/**
 * Documentation Page Enhancements
 * - Copy buttons for code blocks
 * - Table of Contents scroll spy
 * - Search functionality with keyboard shortcuts
 */

document.addEventListener('DOMContentLoaded', () => {
    initCopyButtons();
    initTocScrollSpy();
    initSearchBar();
});

/**
 * Add copy buttons to all code blocks
 */
function initCopyButtons() {
    const codeBlocks = document.querySelectorAll('pre code');

    codeBlocks.forEach((codeBlock) => {
        const pre = codeBlock.parentElement;

        // Create wrapper to position button absolutely
        const wrapper = document.createElement('div');
        wrapper.className = 'code-block-wrapper';
        pre.parentNode.insertBefore(wrapper, pre);
        wrapper.appendChild(pre);

        // Create copy button
        const button = document.createElement('button');
        button.className = 'btn btn-sm btn-copy';
        button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-copy">
                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
            </svg>
            <span class="btn-copy-text">Copy</span>
        `;
        button.setAttribute('aria-label', 'Copy code to clipboard');

        // Add click handler
        button.addEventListener('click', async () => {
            try {
                await navigator.clipboard.writeText(codeBlock.textContent);
                button.classList.add('copied');
                button.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-check">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <span class="btn-copy-text">Copied!</span>
                `;

                setTimeout(() => {
                    button.classList.remove('copied');
                    button.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-copy">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                        <span class="btn-copy-text">Copy</span>
                    `;
                }, 2000);
            } catch (err) {
                console.error('Failed to copy:', err);
            }
        });

        wrapper.appendChild(button);
    });
}

/**
 * Initialize Table of Contents scroll spy
 */
function initTocScrollSpy() {
    const tocLinks = document.querySelectorAll('.toc-link');
    if (tocLinks.length === 0) return;

    const headings = Array.from(tocLinks).map((link) => {
        const id = link.getAttribute('href').substring(1);
        return document.getElementById(id);
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                const id = entry.target.getAttribute('id');
                const tocLink = document.querySelector(`.toc-link[href="#${id}"]`);

                if (entry.isIntersecting) {
                    tocLinks.forEach((link) => link.classList.remove('active'));
                    tocLink?.classList.add('active');
                }
            });
        },
        {
            rootMargin: '-100px 0px -80% 0px',
        }
    );

    headings.forEach((heading) => {
        if (heading) {
            observer.observe(heading);
        }
    });
}

/**
 * Initialize search bar functionality
 */
function initSearchBar() {
    const searchInput = document.getElementById('docs-search');
    const searchResults = document.getElementById('search-results');

    if (!searchInput || !searchResults) return;

    let debounceTimer;

    // Search on input
    searchInput.addEventListener('input', (e) => {
        clearTimeout(debounceTimer);
        const query = e.target.value.trim();

        if (query.length < 2) {
            searchResults.style.display = 'none';
            return;
        }

        debounceTimer = setTimeout(() => {
            performSearch(query);
        }, 300);
    });

    // Close results on outside click
    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
            searchResults.style.display = 'none';
        }
    });

    // Keyboard shortcuts
    document.addEventListener('keydown', (e) => {
        // Ctrl+K or Cmd+K to focus search
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            searchInput.focus();
        }

        // Escape to close search results
        if (e.key === 'Escape') {
            searchResults.style.display = 'none';
            searchInput.blur();
        }
    });

    async function performSearch(query) {
        try {
            const response = await fetch(`/docs/search?q=${encodeURIComponent(query)}`);
            const results = await response.json();

            if (results.length === 0) {
                searchResults.innerHTML = '<div class="search-no-results">No results found</div>';
            } else {
                displaySearchResults(results);
            }

            searchResults.style.display = 'block';
        } catch (error) {
            console.error('Search error:', error);
            searchResults.innerHTML = '<div class="search-error">Search failed</div>';
            searchResults.style.display = 'block';
        }
    }

    function displaySearchResults(results) {
        const html = results
            .map(
                (result) => `
            <a href="/docs/${escapeHtml(result.slug)}" class="search-result-item">
                <div class="search-result-title">
                    ${sanitizeHtml(result.title)}
                    ${result.category ? `<span class="badge bg-secondary-lt ms-2">${escapeHtml(result.category)}</span>` : ''}
                </div>
                <div class="search-result-excerpt">${sanitizeHtml(result.excerpt)}</div>
            </a>
        `
            )
            .join('');

        searchResults.innerHTML = html;
    }
}

/**
 * Escape HTML to prevent XSS
 */
function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

/**
 * Sanitize HTML to allow only <mark> tags (for search highlighting)
 */
function sanitizeHtml(html) {
    // First escape all HTML
    const escaped = escapeHtml(html);
    // Then allow <mark> tags by unescaping them
    return escaped.replace(/&lt;mark&gt;/g, '<mark>').replace(/&lt;\/mark&gt;/g, '</mark>');
}
