# Comprehensive Testing Plan for Tabler-Blade

## Project Overview

- **70+ Blade components** in the tabler-blade package
- **26 demo pages** showcasing component variations
- **39 routes** including all demos, bootstrap, and layout variations
- Using **Pest 4** with browser testing capabilities
- Testing must be done in the root project (not in tabler-blade submodule)

---

## Testing Strategy

### 1. Unit Tests (`tests/Unit/`)

Test individual component rendering and prop handling.

**Coverage:**
- Component attribute merging
- Prop validation and defaults
- Slot content rendering
- Conditional rendering logic
- Edge cases (empty data, null values)

**Example components to test:**
- Button (colors, sizes, variants)
- Badge (colors, pill styles)
- Alert (colors, dismissible)
- Avatar (sizes, image fallbacks)
- Card variations

**Example Test Structure:**

```php
use function Pest\Laravel\blade;

it('renders button with default styles', function () {
    $view = blade('<x-tabler::button>Click me</x-tabler::button>');

    $view->assertSee('Click me');
    $view->assertSee('btn');
});

it('renders button with color variants', function (string $color) {
    $view = blade("<x-tabler::button color=\"{$color}\">Click</x-tabler::button>");

    $view->assertSee("btn-{$color}");
})->with(['primary', 'secondary', 'success', 'danger', 'warning', 'info']);
```

---

### 2. Feature Tests (`tests/Feature/`)

Test demo pages and route responses.

**Coverage:**
- All 26 demo routes return 200
- Page header rendering
- Component examples display correctly
- Code snippets are present
- Layout switching (boxed, vertical)
- Bootstrap CSS/JS page

**Tests to create:**
- `DemoPageTest.php` - Test all demo routes load successfully
- `ComponentRenderingTest.php` - Test components render with correct HTML structure
- `LayoutTest.php` - Test different layout variations

**Example Test Structure:**

```php
it('loads all demo pages successfully', function (string $route) {
    $response = $this->get($route);

    $response->assertSuccessful();
    $response->assertViewIs('demo.' . basename($route));
})->with([
    '/demo/accordion',
    '/demo/alert',
    '/demo/badge',
    // ... all routes
]);
```

---

### 3. Browser Tests (`tests/Browser/`)

Test interactive components using Pest 4 browser testing capabilities.

**High Priority Interactive Components:**

#### Accordion
- Expand/collapse functionality
- Multiple panels
- Active states

#### Carousel
- Slide navigation
- Autoplay
- Indicators
- Previous/Next buttons

#### Dropdowns
- Click to open/close
- Select items
- Keyboard navigation
- Close on outside click

#### Modals
- Open/close functionality
- Backdrop click to close
- ESC key to close
- Multiple modals
- Scrollable content

#### Offcanvas
- Slide in/out
- Backdrop interaction
- Different placements (start, end, top, bottom)

#### Tabs
- Tab switching
- Active states
- Content display
- Hash navigation

#### Toasts
- Show/hide functionality
- Auto-dismiss
- Positioning
- Stacking

#### Forms
- Input validation
- Switches (on/off)
- Checkboxes
- Radio buttons
- Form submission

**Test scenarios:**
- Click interactions work correctly
- JavaScript components initialize properly
- No console errors
- Animations complete
- Keyboard navigation (accessibility)

**Example Browser Test:**

```php
it('opens and closes modal correctly', function () {
    $page = visit('/demo/modals');

    $page->assertSee('Modal Examples')
        ->assertNoJavascriptErrors()
        ->click('Open Modal')
        ->assertSee('Modal Title')
        ->click('.modal-backdrop') // Click backdrop to close
        ->assertDontSee('Modal Title');
});

it('tabs switch content correctly', function () {
    $page = visit('/demo/tabs');

    $page->assertSee('Tab 1 Content')
        ->assertNoConsoleLogs()
        ->click('[data-bs-target="#tab-2"]')
        ->assertSee('Tab 2 Content')
        ->assertDontSee('Tab 1 Content');
});
```

---

### 4. Smoke Tests

Quick validation that all pages load without errors.

```php
it('all demo pages load without errors', function () {
    $pages = visit([
        '/',
        '/bootstrap',
        '/demo/accordion',
        '/demo/alert',
        '/demo/avatars',
        '/demo/badge',
        '/demo/button',
        '/demo/cards',
        '/demo/carousel',
        '/demo/divider',
        '/demo/dropdowns',
        '/demo/empty',
        '/demo/forms',
        '/demo/image',
        '/demo/layout-boxed',
        '/demo/layout-vertical',
        '/demo/list-group',
        '/demo/modals',
        '/demo/offcanvas',
        '/demo/pagination',
        '/demo/placeholder',
        '/demo/progress',
        '/demo/ribbon',
        '/demo/spinner',
        '/demo/status',
        '/demo/steps',
        '/demo/tables',
        '/demo/tabs',
        '/demo/timeline',
        '/demo/toasts',
    ]);

    $pages->assertNoJavascriptErrors()
          ->assertNoConsoleLogs();
});
```

---

### 5. Visual Regression Tests (Optional, Advanced)

Use Pest 4's visual testing for:
- Component appearance consistency
- Responsive design breakpoints
- Dark/light mode switching
- Different browser rendering

**Example:**

```php
it('button renders consistently across browsers', function (string $browser) {
    $page = visit('/demo/button', browser: $browser);

    $page->screenshot('button-' . $browser);
})->with(['chrome', 'firefox', 'safari']);

it('components render correctly on mobile', function () {
    $page = visit('/demo/cards', device: 'iPhone 14 Pro');

    $page->assertSee('Card Examples')
        ->screenshot('cards-mobile');
});
```

---

### 6. Integration Tests

Test package integration in the root Laravel application:

- Service provider registration
- View namespace resolution (`tabler::`)
- Component tag resolution (`<x-tabler::button>`)
- Publishable assets
- Config merging

**Example:**

```php
it('resolves tabler components correctly', function () {
    $view = blade('<x-tabler::button>Test</x-tabler::button>');

    $view->assertSee('Test');
    $view->assertSee('btn');
});

it('has tabler view namespace registered', function () {
    $paths = View::getFinder()->getHints()['tabler'] ?? [];

    expect($paths)->not->toBeEmpty();
});
```

---

## Implementation Priority

### Phase 1: Foundation (Start Here)

**Goal:** Establish baseline test coverage and smoke tests

1. ✅ Create smoke test for all demo routes
2. ✅ Basic feature tests for main demo pages
3. ✅ Unit tests for 5 most common components:
   - Button
   - Alert
   - Badge
   - Card
   - Form Input

**Deliverables:**
- `tests/Feature/DemoPageTest.php`
- `tests/Unit/Components/ButtonTest.php`
- `tests/Unit/Components/AlertTest.php`
- `tests/Unit/Components/BadgeTest.php`
- `tests/Unit/Components/CardTest.php`
- `tests/Unit/Components/FormInputTest.php`

**Success Criteria:**
- All demo routes load without 500 errors
- Basic components render with correct HTML classes
- Test suite runs successfully

---

### Phase 2: Interactive Components

**Goal:** Test JavaScript-driven components

1. ✅ Browser tests for modals
2. ✅ Browser tests for dropdowns
3. ✅ Browser tests for tabs
4. ✅ Browser tests for accordion

**Deliverables:**
- `tests/Browser/ModalTest.php`
- `tests/Browser/DropdownTest.php`
- `tests/Browser/TabsTest.php`
- `tests/Browser/AccordionTest.php`

**Success Criteria:**
- Interactive components work correctly
- No JavaScript errors
- Proper state management

---

### Phase 3: Complex Components

**Goal:** Cover advanced interactive features

1. ✅ Browser tests for forms (validation, switches)
2. ✅ Browser tests for carousel
3. ✅ Browser tests for toasts
4. ✅ Browser tests for offcanvas
5. ✅ Table functionality (if applicable)

**Deliverables:**
- `tests/Browser/FormTest.php`
- `tests/Browser/CarouselTest.php`
- `tests/Browser/ToastTest.php`
- `tests/Browser/OffcanvasTest.php`

**Success Criteria:**
- Complex interactions work as expected
- Form validation functions properly
- Animations complete without errors

---

### Phase 4: Polish & Advanced

**Goal:** Comprehensive coverage and quality assurance

1. ✅ Add datasets for testing component variations
2. ✅ Visual regression tests
3. ✅ Accessibility tests (keyboard nav, ARIA attributes)
4. ✅ Cross-browser tests (Chrome, Firefox, Safari)
5. ✅ Responsive design tests (mobile, tablet, desktop)

**Deliverables:**
- Expanded test datasets
- Visual regression baseline screenshots
- Accessibility compliance tests
- Multi-browser test suite

**Success Criteria:**
- 90%+ code coverage
- All accessibility standards met
- Consistent rendering across browsers
- All components tested in multiple viewports

---

## Test File Structure

```
tests/
├── Unit/
│   ├── Components/
│   │   ├── ButtonTest.php
│   │   ├── AlertTest.php
│   │   ├── BadgeTest.php
│   │   ├── CardTest.php
│   │   ├── FormInputTest.php
│   │   ├── AvatarTest.php
│   │   ├── AccordionTest.php
│   │   ├── DividerTest.php
│   │   ├── EmptyTest.php
│   │   ├── ImageTest.php
│   │   ├── ListGroupTest.php
│   │   ├── PaginationTest.php
│   │   ├── PlaceholderTest.php
│   │   ├── ProgressTest.php
│   │   ├── RibbonTest.php
│   │   ├── SpinnerTest.php
│   │   ├── StatusTest.php
│   │   ├── StepsTest.php
│   │   ├── TableTest.php
│   │   └── TimelineTest.php
│   └── ExampleTest.php (remove when real tests exist)
├── Feature/
│   ├── DemoPageTest.php
│   ├── ComponentRenderingTest.php
│   ├── LayoutTest.php
│   ├── BootstrapPageTest.php
│   └── ExampleTest.php (remove when real tests exist)
└── Browser/
    ├── AccordionTest.php
    ├── ModalTest.php
    ├── DropdownTest.php
    ├── TabsTest.php
    ├── OffcanvasTest.php
    ├── CarouselTest.php
    ├── ToastTest.php
    ├── FormTest.php
    ├── SmokeTest.php
    └── AccessibilityTest.php (advanced)
```

---

## Component Testing Checklist

### Core Components (Priority 1)

- [ ] Alert
- [ ] Badge
- [ ] Button
- [ ] Card (and sub-components)
- [ ] Form Input
- [ ] Avatar

### Layout Components (Priority 2)

- [ ] Divider
- [ ] Empty
- [ ] Page Header
- [ ] Breadcrumb
- [ ] List Group
- [ ] Table

### Interactive Components (Priority 3)

- [ ] Accordion
- [ ] Carousel
- [ ] Dropdown
- [ ] Modal
- [ ] Offcanvas
- [ ] Tabs
- [ ] Toast

### Form Components (Priority 4)

- [ ] Input
- [ ] Switch
- [ ] Checkbox (via color-check)
- [ ] Color Picker
- [ ] Range
- [ ] Label
- [ ] Help Text
- [ ] Invalid Feedback
- [ ] Fieldset

### Utility Components (Priority 5)

- [ ] Image
- [ ] Pagination
- [ ] Placeholder
- [ ] Progress
- [ ] Ribbon
- [ ] Spinner
- [ ] Status
- [ ] Steps
- [ ] Timeline

---

## Key Testing Guidelines

### General Rules

1. **Use Pest syntax** for all tests (no PHPUnit classes)
2. **Run Pint** before committing: `vendor/bin/pint --dirty`
3. **Run format** before committing: `npm run format`
4. **Use datasets** for testing multiple variations
5. **Test in root project**, not in tabler-blade submodule
6. **Follow existing conventions** from sibling test files
7. **Test all paths**: happy, failure, and edge cases

### Pest-Specific Guidelines

**Use datasets for variations:**
```php
it('renders with different colors', function (string $color) {
    $view = blade("<x-tabler::badge color=\"{$color}\">Badge</x-tabler::badge>");
    $view->assertSee("badge-{$color}");
})->with(['primary', 'secondary', 'success', 'danger', 'warning']);
```

**Use descriptive test names:**
```php
it('dismissible alert shows close button')
it('modal closes when clicking backdrop')
it('carousel advances to next slide on navigation click')
```

**Import Pest functions:**
```php
use function Pest\Laravel\blade;
use function Pest\Laravel\get;
use function Pest\Laravel\post;
```

**Use beforeEach for setup:**
```php
beforeEach(function () {
    // Common setup
});
```

### Browser Testing Guidelines

**Always check for errors:**
```php
$page->assertNoJavascriptErrors()
     ->assertNoConsoleLogs();
```

**Use descriptive selectors:**
```php
$page->click('[data-bs-toggle="modal"]')  // Good
$page->click('.btn')                       // Too generic
```

**Test keyboard interactions:**
```php
$page->press('Escape')
     ->press('Tab')
     ->press('Enter');
```

**Take screenshots for debugging:**
```php
$page->screenshot('modal-open-state');
```

### Running Tests

**Run all tests:**
```bash
php artisan test
```

**Run specific test file:**
```bash
php artisan test tests/Feature/DemoPageTest.php
```

**Filter by test name:**
```bash
php artisan test --filter="modal closes"
```

**Run with coverage:**
```bash
php artisan test --coverage
```

---

## Test Data Management

### Use Factories (if needed)

If the package evolves to include database models:

```php
use Database\Factories\UserFactory;

it('displays user avatar', function () {
    $user = User::factory()->create();

    $view = blade('<x-tabler::avatar :user="$user" />', ['user' => $user]);

    $view->assertSee($user->name);
});
```

### Use Datasets for Component Props

```php
dataset('button-sizes', [
    'small' => 'sm',
    'medium' => 'md',
    'large' => 'lg',
]);

dataset('button-colors', [
    'primary',
    'secondary',
    'success',
    'danger',
    'warning',
    'info',
]);

it('renders button sizes correctly', function (string $size) {
    $view = blade("<x-tabler::button size=\"{$size}\">Click</x-tabler::button>");
    $view->assertSee("btn-{$size}");
})->with('button-sizes');
```

---

## Continuous Integration

### GitHub Actions Workflow (Future)

```yaml
name: Tests

on: [push, pull_request]

jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: 8.4
      - name: Install Dependencies
        run: composer install
      - name: Run Tests
        run: php artisan test
      - name: Run Pint
        run: vendor/bin/pint --test
```

---

## Success Metrics

### Coverage Goals

- **Unit Tests:** 80%+ coverage of all components
- **Feature Tests:** 100% of demo routes tested
- **Browser Tests:** All interactive components tested
- **No Failures:** 0 failing tests in CI/CD

### Quality Indicators

- All tests pass consistently
- No flaky tests (tests that randomly fail)
- Fast test execution (< 5 minutes for full suite)
- Clear, descriptive test names
- Comprehensive edge case coverage

---

## Next Steps

1. **Start with Phase 1** - Foundation tests
2. **Run tests frequently** during development
3. **Review test results** and iterate
4. **Add browser tests** for interactive components
5. **Document test patterns** for consistency
6. **Automate testing** in CI/CD pipeline

---

## Resources

- [Pest Documentation](https://pestphp.com)
- [Laravel Testing](https://laravel.com/docs/testing)
- [Pest Browser Testing](https://pestphp.com/docs/browser-testing)
- [Tabler UI Documentation](https://tabler.io)
- Project docs in `docs/` folder
