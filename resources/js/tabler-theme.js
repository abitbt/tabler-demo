/**
 * Custom Tabler Theme Handler
 *
 * Enhanced version of tabler-theme.js that respects server-side HTML attributes
 * and provides instant theme switching without page reload
 *
 * Priority order:
 * 1. URL parameters (?theme-base=neutral) - for compatibility
 * 2. localStorage (persistent user preference)
 * 3. Server-side HTML attributes (from Laravel variables)
 * 4. Default values
 */

const themeConfig = {
    theme: 'light',
    'theme-base': 'gray',
    'theme-font': 'sans-serif',
    'theme-primary': 'blue',
    'theme-radius': '1',
};

/**
 * Initialize theme on page load
 */
function initializeTheme() {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });

    for (const key in themeConfig) {
        const param = params[key];
        let selectedValue;

        if (!!param) {
            // URL parameter takes highest priority (for backward compatibility)
            localStorage.setItem('tabler-' + key, param);
            selectedValue = param;
        } else {
            const storedTheme = localStorage.getItem('tabler-' + key);
            if (storedTheme) {
                // Use localStorage value
                selectedValue = storedTheme;
            } else {
                // Check if server-side set a value
                const existingValue = document.documentElement.getAttribute('data-bs-' + key);
                if (existingValue) {
                    // Respect server-side value
                    selectedValue = existingValue;
                } else {
                    // Fall back to default
                    selectedValue = themeConfig[key];
                }
            }
        }

        // Apply theme
        applyTheme(key, selectedValue, false);
    }
}

/**
 * Apply theme value
 * @param {string} key - Theme property (e.g., 'theme', 'theme-base')
 * @param {string} value - Theme value (e.g., 'dark', 'neutral')
 * @param {boolean} persist - Whether to save to localStorage
 */
function applyTheme(key, value, persist = true) {
    if (persist) {
        localStorage.setItem('tabler-' + key, value);
    }

    // Only set attribute if different from default
    if (value !== themeConfig[key]) {
        document.documentElement.setAttribute('data-bs-' + key, value);
    } else {
        document.documentElement.removeAttribute('data-bs-' + key);
    }
}

/**
 * Toggle between light and dark theme
 * @param {string} newTheme - 'light' or 'dark' (optional)
 */
function toggleTheme(newTheme) {
    const currentTheme = document.documentElement.getAttribute('data-bs-theme') || 'light';
    const theme = newTheme || (currentTheme === 'dark' ? 'light' : 'dark');
    applyTheme('theme', theme);
}

/**
 * Set theme base (gray palette)
 * @param {string} base - 'gray', 'neutral', 'slate', 'stone', 'zinc', 'pink', 'catppuccin', 'catppuccin-mocha', 'catppuccin-latte'
 */
function setThemeBase(base) {
    applyTheme('theme-base', base);
}

/**
 * Set primary color
 * @param {string} color - 'blue', 'azure', 'indigo', 'purple', 'pink', 'red', 'orange', 'yellow', 'lime', 'green', 'teal', 'cyan'
 */
function setThemePrimary(color) {
    applyTheme('theme-primary', color);
}

/**
 * Set border radius
 * @param {string|number} radius - '0', '1', '2', '3'
 */
function setThemeRadius(radius) {
    applyTheme('theme-radius', String(radius));
}

/**
 * Set font family
 * @param {string} font - 'sans-serif', 'serif', 'monospace'
 */
function setThemeFont(font) {
    applyTheme('theme-font', font);
}

/**
 * Reset all themes to defaults
 */
function resetTheme() {
    for (const key in themeConfig) {
        localStorage.removeItem('tabler-' + key);
        document.documentElement.removeAttribute('data-bs-' + key);
    }
}

/**
 * Get current theme value
 * @param {string} key - Theme property
 * @returns {string} Current theme value
 */
function getTheme(key) {
    return document.documentElement.getAttribute('data-bs-' + key) || themeConfig[key];
}

// Initialize on page load
initializeTheme();

// Expose functions globally for inline event handlers
window.TablerTheme = {
    toggle: toggleTheme,
    setBase: setThemeBase,
    setPrimary: setThemePrimary,
    setRadius: setThemeRadius,
    setFont: setThemeFont,
    reset: resetTheme,
    get: getTheme,
    apply: applyTheme,
};

// Setup event listeners when DOM is ready
document.addEventListener('DOMContentLoaded', function () {
    // Handle theme toggle buttons
    const darkModeToggles = document.querySelectorAll('[data-bs-theme-toggle="dark"]');
    const lightModeToggles = document.querySelectorAll('[data-bs-theme-toggle="light"]');

    darkModeToggles.forEach((toggle) => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            toggleTheme('dark');
        });
    });

    lightModeToggles.forEach((toggle) => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            toggleTheme('light');
        });
    });
});
