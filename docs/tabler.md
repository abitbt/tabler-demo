# Tabler UI Reference

> Quick reference for Tabler UI layouts, plugins, interface components, and extra pages

### Package Stats

- **Total Components**: 19
- **Form Components**: 11 (input, select, textarea, checkbox, radio, switch, range, color-input, file-input, form-label, form-hint)
- **UI Components**: 4 (alert, badge, button, card)
- **Layout Components**: 2 (page-header, pagination)
- **Helper Components**: 2 (input-group, tag)

## Quick Component Finder

| Component | Complexity | JS Required | Dependencies | Tabler Status |
|-----------|------------|-------------|--------------|---------------|
| **Interface** |  |  |  |  |
| [Accordion](#accordion) | ⭐⭐ Medium | ✓ Bootstrap | Bootstrap JS | ✓ Available |
| [Alerts](#alerts) | ⭐ Easy | Optional | - | ✓ Available |
| [Avatars](#avatars) | ⭐ Easy | - | - | ✓ Available |
| [Badges](#badges) | ⭐ Easy | - | - | ✓ Available |
| [Breadcrumbs](#breadcrumbs) | ⭐ Easy | - | - | ✓ Available |
| [Buttons](#buttons) | ⭐ Easy | - | - | ✓ Available |
| [Cards](#cards) | ⭐⭐ Medium | - | - | ✓ Available |
| [Carousel](#carousel) | ⭐⭐ Medium | ✓ Bootstrap | Bootstrap JS | ✓ Available |
| [Chips](#chips) | ⭐ Easy | - | - | ⚠️ SCSS Only |
| [Close Button](#close-button) | ⭐ Easy | - | - | ⚠️ SCSS Only |
| [Divider](#divider) | ⭐ Easy | - | - | ✓ Available |
| [Dropdowns](#dropdowns) | ⭐⭐ Medium | ✓ Bootstrap | Bootstrap JS | ✓ Available |
| [Empty States](#empty-states) | ⭐ Easy | - | - | ✓ Available |
| [Forms](#forms) | ⭐⭐⭐ Hard | Optional | Tom-Select, IMask, Autosize | ✓ Available |
| [Icons](#icons) | ⭐ Easy | - | - | ✓ Available |
| [Images](#images) | ⭐ Easy | - | - | ✓ Available |
| [Legend](#legend) | ⭐ Easy | - | - | ⚠️ SCSS Only |
| [Lists](#lists) | ⭐ Easy | - | - | ✓ Available |
| [Loaders](#loaders) | ⭐ Easy | - | - | ✓ Available |
| [Markdown](#markdown) | ⭐ Easy | - | - | ⚠️ SCSS Only |
| [Modals](#modals) | ⭐⭐ Medium | ✓ Bootstrap | Bootstrap JS | ✓ Available |
| [Navigation](#navigation) | ⭐⭐ Medium | - | - | ✓ Available |
| [Offcanvas](#offcanvas) | ⭐⭐ Medium | ✓ Bootstrap | Bootstrap JS | ✓ Available |
| [Pagination](#pagination) | ⭐ Easy | - | - | ✓ Available |
| [Placeholder](#placeholder) | ⭐ Easy | - | - | ✓ Available |
| [Popovers](#popovers) | ⭐⭐ Medium | ✓ Bootstrap | Bootstrap JS | ✓ Available |
| [Progress](#progress) | ⭐ Easy | - | - | ✓ Available |
| [Ribbons](#ribbons) | ⭐ Easy | - | - | ✓ Available |
| [Spinners](#spinners) | ⭐ Easy | - | - | ✓ Available |
| [Status](#status) | ⭐ Easy | - | - | ✓ Available |
| [Steps](#steps) | ⭐⭐ Medium | - | - | ✓ Available |
| [Tables](#tables) | ⭐⭐ Medium | Optional | Sortable.js | ✓ Available |
| [Tabs](#tabs) | ⭐⭐ Medium | ✓ Bootstrap | Bootstrap JS | ✓ Available |
| [Timeline](#timeline) | ⭐⭐ Medium | - | - | ✓ Available |
| [Toasts](#toasts) | ⭐⭐ Medium | ✓ Bootstrap | Bootstrap JS | ✓ Available |
| [Toolbar](#toolbar) | ⭐⭐ Medium | - | - | ⚠️ SCSS Only |
| [Tooltips](#tooltips) | ⭐ Easy | ✓ Bootstrap | Bootstrap JS | ✓ Available |
| [Tracking](#tracking) | ⭐ Easy | - | - | ✓ Available |

**Legend:**
- **Tabler Status** = Availability in Tabler UI framework (not tabler-blade package)
- ✓ Available = Full component with preview, docs, and SCSS
- ⚠️ SCSS Only = Only SCSS file exists, no preview or documentation
- ⭐ Easy = Simple HTML/CSS, no JavaScript
- ⭐⭐ Medium = Moderate complexity, may require JavaScript
- ⭐⭐⭐ Hard = Complex with multiple variations and JavaScript

**JavaScript Dependencies:**
- **Bootstrap JS**: Required for interactive components (modals, dropdowns, tooltips, etc.)
- **Tom-Select**: Advanced select dropdowns
- **IMask**: Input masking
- **Autosize**: Auto-resizing textareas

---

## Layout

### Boxed
- **Preview:** [tabler/preview/dist/layout-boxed.html](../tabler/preview/dist/layout-boxed.html)
- **Template:** [tabler/preview/pages/layout-boxed.html](../tabler/preview/pages/layout-boxed.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

### Combined
- **Preview:** [tabler/preview/dist/layout-combo.html](../tabler/preview/dist/layout-combo.html)
- **Template:** [tabler/preview/pages/layout-combo.html](../tabler/preview/pages/layout-combo.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

### Condensed
- **Preview:** [tabler/preview/dist/layout-condensed.html](../tabler/preview/dist/layout-condensed.html)
- **Template:** [tabler/preview/pages/layout-condensed.html](../tabler/preview/pages/layout-condensed.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

### Dark mode
- **Preview:** [tabler/preview/dist/layout-navbar-dark.html](../tabler/preview/dist/layout-navbar-dark.html)
- **Template:** [tabler/preview/pages/layout-navbar-dark.html](../tabler/preview/pages/layout-navbar-dark.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_dark.scss](../tabler/core/scss/layout/_dark.scss)

### Fluid
- **Preview:** [tabler/preview/dist/layout-fluid.html](../tabler/preview/dist/layout-fluid.html)
- **Template:** [tabler/preview/pages/layout-fluid.html](../tabler/preview/pages/layout-fluid.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

### Fluid vertical
- **Preview:** [tabler/preview/dist/layout-fluid-vertical.html](../tabler/preview/dist/layout-fluid-vertical.html)
- **Template:** [tabler/preview/pages/layout-fluid-vertical.html](../tabler/preview/pages/layout-fluid-vertical.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

### Horizontal
- **Preview:** [tabler/preview/dist/layout-horizontal.html](../tabler/preview/dist/layout-horizontal.html)
- **Template:** [tabler/preview/pages/layout-horizontal.html](../tabler/preview/pages/layout-horizontal.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

### Navbar dark
- **Preview:** [tabler/preview/dist/layout-navbar-dark.html](../tabler/preview/dist/layout-navbar-dark.html)
- **Template:** [tabler/preview/pages/layout-navbar-dark.html](../tabler/preview/pages/layout-navbar-dark.html)
- **Documentation:** [tabler/docs/content/ui/layout/navbars.md](../tabler/docs/content/ui/layout/navbars.md)
- **SCSS:** [tabler/core/scss/layout/_navbar.scss](../tabler/core/scss/layout/_navbar.scss)

### Navbar overlap
- **Preview:** [tabler/preview/dist/layout-navbar-overlap.html](../tabler/preview/dist/layout-navbar-overlap.html)
- **Template:** [tabler/preview/pages/layout-navbar-overlap.html](../tabler/preview/pages/layout-navbar-overlap.html)
- **Documentation:** [tabler/docs/content/ui/layout/navbars.md](../tabler/docs/content/ui/layout/navbars.md)
- **SCSS:** [tabler/core/scss/layout/_navbar.scss](../tabler/core/scss/layout/_navbar.scss)

### Navbar sticky
- **Preview:** [tabler/preview/dist/layout-navbar-sticky.html](../tabler/preview/dist/layout-navbar-sticky.html)
- **Template:** [tabler/preview/pages/layout-navbar-sticky.html](../tabler/preview/pages/layout-navbar-sticky.html)
- **Documentation:** [tabler/docs/content/ui/layout/navbars.md](../tabler/docs/content/ui/layout/navbars.md)
- **SCSS:** [tabler/core/scss/layout/_navbar.scss](../tabler/core/scss/layout/_navbar.scss)

### Right vertical
- **Preview:** [tabler/preview/dist/layout-vertical-right.html](../tabler/preview/dist/layout-vertical-right.html)
- **Template:** [tabler/preview/pages/layout-vertical-right.html](../tabler/preview/pages/layout-vertical-right.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

### RTL mode
- **Preview:** [tabler/preview/dist/layout-rtl.html](../tabler/preview/dist/layout-rtl.html)
- **Template:** [tabler/preview/pages/layout-rtl.html](../tabler/preview/pages/layout-rtl.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

### Vertical
- **Preview:** [tabler/preview/dist/layout-vertical.html](../tabler/preview/dist/layout-vertical.html)
- **Template:** [tabler/preview/pages/layout-vertical.html](../tabler/preview/pages/layout-vertical.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

### Vertical transparent
- **Preview:** [tabler/preview/dist/layout-vertical-transparent.html](../tabler/preview/dist/layout-vertical-transparent.html)
- **Template:** [tabler/preview/pages/layout-vertical-transparent.html](../tabler/preview/pages/layout-vertical-transparent.html)
- **Documentation:** [tabler/docs/content/ui/layout/page-layouts.md](../tabler/docs/content/ui/layout/page-layouts.md)
- **SCSS:** [tabler/core/scss/layout/_page.scss](../tabler/core/scss/layout/_page.scss)

---

## Plugins

### Charts
- **Preview:** [tabler/preview/dist/charts.html](../tabler/preview/dist/charts.html)
- **Template:** [tabler/preview/pages/charts.html](../tabler/preview/pages/charts.html)
- **Documentation:** [tabler/docs/content/ui/components/charts.md](../tabler/docs/content/ui/components/charts.md)
- **Includes:** [tabler/shared/includes/ui/chart.html](../tabler/shared/includes/ui/chart.html), [chart-sparkline.html](../tabler/shared/includes/ui/chart-sparkline.html), [chart-heatmap.html](../tabler/shared/includes/ui/chart-heatmap.html)
- **SCSS:** [tabler/core/scss/ui/_charts.scss](../tabler/core/scss/ui/_charts.scss)
- **Library:** [tabler/core/dist/libs/apexcharts/](../tabler/core/dist/libs/apexcharts/)

### Color picker
- **Preview:** [tabler/preview/dist/colorpicker.html](../tabler/preview/dist/colorpicker.html)
- **Template:** [tabler/preview/pages/colorpicker.html](../tabler/preview/pages/colorpicker.html)
- **Includes:** [tabler/shared/includes/ui/colorpicker.html](../tabler/shared/includes/ui/colorpicker.html), [tabler/shared/includes/parts/form/input-colorpicker.html](../tabler/shared/includes/parts/form/input-colorpicker.html)
- **SCSS:** [tabler/core/scss/ui/forms/_form-colorinput.scss](../tabler/core/scss/ui/forms/_form-colorinput.scss)
- **Library:** [tabler/core/dist/libs/litepicker/](../tabler/core/dist/libs/litepicker/)

### Datatables
- **Preview:** [tabler/preview/dist/datatables.html](../tabler/preview/dist/datatables.html)
- **Template:** [tabler/preview/pages/datatables.html](../tabler/preview/pages/datatables.html)
- **SCSS:** [tabler/core/scss/ui/_tables.scss](../tabler/core/scss/ui/_tables.scss)
- **Library:** [tabler/core/dist/libs/tom-select/](../tabler/core/dist/libs/tom-select/)

### Dropzone
- **Preview:** [tabler/preview/dist/dropzone.html](../tabler/preview/dist/dropzone.html)
- **Template:** [tabler/preview/pages/dropzone.html](../tabler/preview/pages/dropzone.html)
- **Documentation:** [tabler/docs/content/ui/components/dropzone.md](../tabler/docs/content/ui/components/dropzone.md)
- **Includes:** [tabler/shared/includes/ui/dropzone.html](../tabler/shared/includes/ui/dropzone.html)
- **Library:** [tabler/core/dist/libs/dropzone/](../tabler/core/dist/libs/dropzone/)

### Fullcalendar
- **Preview:** [tabler/preview/dist/fullcalendar.html](../tabler/preview/dist/fullcalendar.html)
- **Template:** [tabler/preview/pages/fullcalendar.html](../tabler/preview/pages/fullcalendar.html)
- **Includes:** [tabler/shared/includes/ui/fullcalendar.html](../tabler/shared/includes/ui/fullcalendar.html)
- **SCSS:** [tabler/core/scss/ui/_calendars.scss](../tabler/core/scss/ui/_calendars.scss)
- **Library:** [tabler/core/dist/libs/fullcalendar/](../tabler/core/dist/libs/fullcalendar/)

### Inline player
- **Preview:** [tabler/preview/dist/inline-player.html](../tabler/preview/dist/inline-player.html)
- **Template:** [tabler/preview/pages/inline-player.html](../tabler/preview/pages/inline-player.html)
- **Documentation:** [tabler/docs/content/ui/components/inline-player.md](../tabler/docs/content/ui/components/inline-player.md)
- **Includes:** [tabler/shared/includes/ui/inline-player.html](../tabler/shared/includes/ui/inline-player.html)
- **Library:** [tabler/core/dist/libs/plyr/](../tabler/core/dist/libs/plyr/)

### Lightbox
- **Preview:** [tabler/preview/dist/lightbox.html](../tabler/preview/dist/lightbox.html)
- **Template:** [tabler/preview/pages/lightbox.html](../tabler/preview/pages/lightbox.html)
- **Library:** [tabler/core/dist/libs/fslightbox/](../tabler/core/dist/libs/fslightbox/)

### Map
- **Preview:** [tabler/preview/dist/maps.html](../tabler/preview/dist/maps.html)
- **Template:** [tabler/preview/pages/maps.html](../tabler/preview/pages/maps.html)
- **Includes:** [tabler/shared/includes/ui/map.html](../tabler/shared/includes/ui/map.html)

### Map fullsize
- **Preview:** [tabler/preview/dist/map-fullsize.html](../tabler/preview/dist/map-fullsize.html)
- **Template:** [tabler/preview/pages/map-fullsize.html](../tabler/preview/pages/map-fullsize.html)

### Map vector
- **Preview:** [tabler/preview/dist/maps-vector.html](../tabler/preview/dist/maps-vector.html)
- **Template:** [tabler/preview/pages/maps-vector.html](../tabler/preview/pages/maps-vector.html)
- **Documentation:** [tabler/docs/content/ui/components/vector-maps.md](../tabler/docs/content/ui/components/vector-maps.md)
- **Includes:** [tabler/shared/includes/ui/map-vector.html](../tabler/shared/includes/ui/map-vector.html)
- **Library:** [tabler/core/dist/libs/jsvectormap/](../tabler/core/dist/libs/jsvectormap/)

### Turbo loader
- **Preview:** [tabler/preview/dist/turbo-loader.html](../tabler/preview/dist/turbo-loader.html)
- **Template:** [tabler/preview/pages/turbo-loader.html](../tabler/preview/pages/turbo-loader.html)
- **Library:** [tabler/core/dist/libs/@hotwired/](../tabler/core/dist/libs/@hotwired/)

### WYSIWYG editor
- **Preview:** [tabler/preview/dist/wysiwyg.html](../tabler/preview/dist/wysiwyg.html)
- **Template:** [tabler/preview/pages/wysiwyg.html](../tabler/preview/pages/wysiwyg.html)
- **Documentation:** [tabler/docs/content/ui/components/wysiwyg.md](../tabler/docs/content/ui/components/wysiwyg.md)
- **Includes:** [tabler/shared/includes/ui/wysiwyg.html](../tabler/shared/includes/ui/wysiwyg.html)
- **Library:** [tabler/core/dist/libs/hugerte/](../tabler/core/dist/libs/hugerte/)

---

## Interface

### Accordion
- **Complexity:** ⭐⭐ Medium
- **JavaScript:** Required (Bootstrap Collapse)
- **Dependencies:** Bootstrap JS
- **Preview:** [tabler/preview/dist/accordion.html](../tabler/preview/dist/accordion.html)
- **Template:** [tabler/preview/pages/accordion.html](../tabler/preview/pages/accordion.html)
- **Documentation:** [tabler/docs/content/ui/components/accordion.md](../tabler/docs/content/ui/components/accordion.md)
- **Includes:** [tabler/shared/includes/ui/accordion.html](../tabler/shared/includes/ui/accordion.html)
- **SCSS:** [tabler/core/scss/ui/_accordion.scss](../tabler/core/scss/ui/_accordion.scss)

### Alerts
- **Complexity:** ⭐ Easy
- **JavaScript:** Optional (dismissible alerts)
- **Dependencies:** None
- **Preview:** [tabler/preview/dist/alerts.html](../tabler/preview/dist/alerts.html)
- **Template:** [tabler/preview/pages/alerts.html](../tabler/preview/pages/alerts.html)
- **Documentation:** [tabler/docs/content/ui/components/alerts.md](../tabler/docs/content/ui/components/alerts.md)
- **Includes:** [tabler/shared/includes/ui/alert.html](../tabler/shared/includes/ui/alert.html)
- **SCSS:** [tabler/core/scss/ui/_alerts.scss](../tabler/core/scss/ui/_alerts.scss)

### Authentication
- **Sign In:** [tabler/preview/dist/sign-in.html](../tabler/preview/dist/sign-in.html)
- **Sign In (Cover):** [tabler/preview/dist/sign-in-cover.html](../tabler/preview/dist/sign-in-cover.html)
- **Sign In (Illustration):** [tabler/preview/dist/sign-in-illustration.html](../tabler/preview/dist/sign-in-illustration.html)
- **Sign In (Link):** [tabler/preview/dist/sign-in-link.html](../tabler/preview/dist/sign-in-link.html)
- **Sign Up:** [tabler/preview/dist/sign-up.html](../tabler/preview/dist/sign-up.html)
- **Forgot Password:** [tabler/preview/dist/forgot-password.html](../tabler/preview/dist/forgot-password.html)
- **Auth Lock:** [tabler/preview/dist/auth-lock.html](../tabler/preview/dist/auth-lock.html)
- **2-Step Verification:** [tabler/preview/dist/2-step-verification.html](../tabler/preview/dist/2-step-verification.html)
- **2-Step Verification Code:** [tabler/preview/dist/2-step-verification-code.html](../tabler/preview/dist/2-step-verification-code.html)
- **SCSS:** [tabler/core/scss/ui/_login.scss](../tabler/core/scss/ui/_login.scss)

### Avatars
- **Preview:** [tabler/preview/dist/avatars.html](../tabler/preview/dist/avatars.html)
- **Template:** [tabler/preview/pages/avatars.html](../tabler/preview/pages/avatars.html)
- **Documentation:** [tabler/docs/content/ui/components/avatars.md](../tabler/docs/content/ui/components/avatars.md)
- **Includes:** [tabler/shared/includes/ui/avatar.html](../tabler/shared/includes/ui/avatar.html), [avatar-list.html](../tabler/shared/includes/ui/avatar-list.html), [avatar-upload.html](../tabler/shared/includes/ui/avatar-upload.html)
- **SCSS:** [tabler/core/scss/ui/_avatars.scss](../tabler/core/scss/ui/_avatars.scss)

### Badges
- **Preview:** [tabler/preview/dist/badges.html](../tabler/preview/dist/badges.html)
- **Template:** [tabler/preview/pages/badges.html](../tabler/preview/pages/badges.html)
- **Documentation:** [tabler/docs/content/ui/components/badges.md](../tabler/docs/content/ui/components/badges.md)
- **Includes:** [tabler/shared/includes/ui/badge.html](../tabler/shared/includes/ui/badge.html), [tag.html](../tabler/shared/includes/ui/tag.html)
- **SCSS:** [tabler/core/scss/ui/_badges.scss](../tabler/core/scss/ui/_badges.scss), [_tags.scss](../tabler/core/scss/ui/_tags.scss)

### Blank page
- **Preview:** [tabler/preview/dist/blank.html](../tabler/preview/dist/blank.html)
- **Template:** [tabler/preview/pages/blank.html](../tabler/preview/pages/blank.html)

### Buttons
- **Preview:** [tabler/preview/dist/buttons.html](../tabler/preview/dist/buttons.html)
- **Template:** [tabler/preview/pages/buttons.html](../tabler/preview/pages/buttons.html)
- **Documentation:** [tabler/docs/content/ui/components/buttons.md](../tabler/docs/content/ui/components/buttons.md)
- **Includes:** [tabler/shared/includes/ui/button.html](../tabler/shared/includes/ui/button.html), [button-group.html](../tabler/shared/includes/ui/button-group.html)
- **SCSS:** [tabler/core/scss/ui/_buttons.scss](../tabler/core/scss/ui/_buttons.scss), [_button-group.scss](../tabler/core/scss/ui/_button-group.scss)

### Cards
- **Preview:** [tabler/preview/dist/cards.html](../tabler/preview/dist/cards.html)
- **Template:** [tabler/preview/pages/cards.html](../tabler/preview/pages/cards.html)
- **Documentation:** [tabler/docs/content/ui/components/cards.md](../tabler/docs/content/ui/components/cards.md)
- **Includes:** [tabler/shared/includes/cards/](../tabler/shared/includes/cards/) (50+ card variations)
- **Card Actions:** [tabler/preview/dist/card-actions.html](../tabler/preview/dist/card-actions.html)
- **Cards Masonry:** [tabler/preview/dist/cards-masonry.html](../tabler/preview/dist/cards-masonry.html)
- **SCSS:** [tabler/core/scss/ui/_cards.scss](../tabler/core/scss/ui/_cards.scss)

### Carousel
- **Preview:** [tabler/preview/dist/carousel.html](../tabler/preview/dist/carousel.html)
- **Template:** [tabler/preview/pages/carousel.html](../tabler/preview/pages/carousel.html)
- **Documentation:** [tabler/docs/content/ui/components/carousel.md](../tabler/docs/content/ui/components/carousel.md)
- **Includes:** [tabler/shared/includes/ui/carousel.html](../tabler/shared/includes/ui/carousel.html)
- **SCSS:** [tabler/core/scss/ui/_carousel.scss](../tabler/core/scss/ui/_carousel.scss)

### Colors
- **Preview:** [tabler/preview/dist/colors.html](../tabler/preview/dist/colors.html)
- **Template:** [tabler/preview/pages/colors.html](../tabler/preview/pages/colors.html)
- **Documentation:** [tabler/docs/content/ui/base/colors.md](../tabler/docs/content/ui/base/colors.md)
- **SCSS:** [tabler/core/scss/_variables.scss](../tabler/core/scss/_variables.scss)

### Data grid
- **Preview:** [tabler/preview/dist/datagrid.html](../tabler/preview/dist/datagrid.html)
- **Template:** [tabler/preview/pages/datagrid.html](../tabler/preview/pages/datagrid.html)
- **Documentation:** [tabler/docs/content/ui/components/datagrid.md](../tabler/docs/content/ui/components/datagrid.md)
- **Includes:** [tabler/shared/includes/parts/datagrid.html](../tabler/shared/includes/parts/datagrid.html)
- **SCSS:** [tabler/core/scss/ui/_datagrid.scss](../tabler/core/scss/ui/_datagrid.scss)

### Dropdowns
- **Preview:** [tabler/preview/dist/dropdowns.html](../tabler/preview/dist/dropdowns.html)
- **Template:** [tabler/preview/pages/dropdowns.html](../tabler/preview/pages/dropdowns.html)
- **Documentation:** [tabler/docs/content/ui/components/dropdowns.md](../tabler/docs/content/ui/components/dropdowns.md)
- **Includes:** [tabler/shared/includes/ui/dropdown.html](../tabler/shared/includes/ui/dropdown.html), [dropdown-menu.html](../tabler/shared/includes/ui/dropdown-menu.html)
- **SCSS:** [tabler/core/scss/ui/_dropdowns.scss](../tabler/core/scss/ui/_dropdowns.scss)
- **JS:** [tabler/core/js/src/dropdown.js](../tabler/core/js/src/dropdown.js)

### Error pages
- **404 Error:** [tabler/preview/dist/error-404.html](../tabler/preview/dist/error-404.html)
- **500 Error:** [tabler/preview/dist/error-500.html](../tabler/preview/dist/error-500.html)
- **Maintenance:** [tabler/preview/dist/error-maintenance.html](../tabler/preview/dist/error-maintenance.html)

### Forms
- **Form Elements:** [tabler/preview/dist/form-elements.html](../tabler/preview/dist/form-elements.html)
- **Form Layout:** [tabler/preview/dist/form-layout.html](../tabler/preview/dist/form-layout.html)
- **Documentation:** [tabler/docs/content/ui/forms/form-elements.md](../tabler/docs/content/ui/forms/form-elements.md)
- **Includes:** [tabler/shared/includes/ui/form/](../tabler/shared/includes/ui/form/), [tabler/shared/includes/parts/form/](../tabler/shared/includes/parts/form/)
- **SCSS:** [tabler/core/scss/ui/_forms.scss](../tabler/core/scss/ui/_forms.scss), [tabler/core/scss/ui/forms/](../tabler/core/scss/ui/forms/)
- **JS:** [tabler/core/js/src/input-mask.js](../tabler/core/js/src/input-mask.js), [autosize.js](../tabler/core/js/src/autosize.js)
- **Libraries:** [tabler/core/dist/libs/autosize/](../tabler/core/dist/libs/autosize/), [imask/](../tabler/core/dist/libs/imask/), [tom-select/](../tabler/core/dist/libs/tom-select/)

### Lists
- **Preview:** [tabler/preview/dist/lists.html](../tabler/preview/dist/lists.html)
- **Template:** [tabler/preview/pages/lists.html](../tabler/preview/pages/lists.html)
- **SCSS:** [tabler/core/scss/ui/_lists.scss](../tabler/core/scss/ui/_lists.scss)

### Modals
- **Preview:** [tabler/preview/dist/modals.html](../tabler/preview/dist/modals.html)
- **Template:** [tabler/preview/pages/modals.html](../tabler/preview/pages/modals.html)
- **Documentation:** [tabler/docs/content/ui/components/modals.md](../tabler/docs/content/ui/components/modals.md)
- **Includes:** [tabler/shared/includes/ui/modal.html](../tabler/shared/includes/ui/modal.html), [tabler/shared/includes/parts/modals/](../tabler/shared/includes/parts/modals/)
- **SCSS:** [tabler/core/scss/ui/_modals.scss](../tabler/core/scss/ui/_modals.scss)

### Markdown
- **Preview:** [tabler/preview/dist/markdown.html](../tabler/preview/dist/markdown.html)
- **Template:** [tabler/preview/pages/markdown.html](../tabler/preview/pages/markdown.html)
- **SCSS:** [tabler/core/scss/ui/_markdown.scss](../tabler/core/scss/ui/_markdown.scss)

### Navigation
- **Preview:** [tabler/preview/dist/navigation.html](../tabler/preview/dist/navigation.html)
- **Template:** [tabler/preview/pages/navigation.html](../tabler/preview/pages/navigation.html)
- **Documentation:** [tabler/docs/content/ui/layout/navs-tabs.md](../tabler/docs/content/ui/layout/navs-tabs.md)
- **Includes:** [tabler/shared/includes/ui/nav.html](../tabler/shared/includes/ui/nav.html)
- **SCSS:** [tabler/core/scss/ui/_nav.scss](../tabler/core/scss/ui/_nav.scss), [_breadcrumbs.scss](../tabler/core/scss/ui/_breadcrumbs.scss)

### Offcanvas
- **Preview:** [tabler/preview/dist/offcanvas.html](../tabler/preview/dist/offcanvas.html)
- **Template:** [tabler/preview/pages/offcanvas.html](../tabler/preview/pages/offcanvas.html)
- **Documentation:** [tabler/docs/content/ui/components/offcanvas.md](../tabler/docs/content/ui/components/offcanvas.md)
- **SCSS:** [tabler/core/scss/ui/_offcanvas.scss](../tabler/core/scss/ui/_offcanvas.scss)

### Pagination
- **Preview:** [tabler/preview/dist/pagination.html](../tabler/preview/dist/pagination.html)
- **Template:** [tabler/preview/pages/pagination.html](../tabler/preview/pages/pagination.html)
- **Documentation:** [tabler/docs/content/ui/components/pagination.md](../tabler/docs/content/ui/components/pagination.md)
- **Includes:** [tabler/shared/includes/ui/pagination.html](../tabler/shared/includes/ui/pagination.html)
- **SCSS:** [tabler/core/scss/ui/_pagination.scss](../tabler/core/scss/ui/_pagination.scss)

### Placeholder
- **Preview:** [tabler/preview/dist/placeholder.html](../tabler/preview/dist/placeholder.html)
- **Template:** [tabler/preview/pages/placeholder.html](../tabler/preview/pages/placeholder.html)
- **Documentation:** [tabler/docs/content/ui/components/placeholder.md](../tabler/docs/content/ui/components/placeholder.md)
- **Includes:** [tabler/shared/includes/cards/placeholder/](../tabler/shared/includes/cards/placeholder/)
- **SCSS:** [tabler/core/scss/ui/_placeholder.scss](../tabler/core/scss/ui/_placeholder.scss)

### Segmented control
- **Preview:** [tabler/preview/dist/segmented-control.html](../tabler/preview/dist/segmented-control.html)
- **Template:** [tabler/preview/pages/segmented-control.html](../tabler/preview/pages/segmented-control.html)
- **Documentation:** [tabler/docs/content/ui/components/segmented-control.md](../tabler/docs/content/ui/components/segmented-control.md)
- **Includes:** [tabler/shared/includes/ui/nav-segmented.html](../tabler/shared/includes/ui/nav-segmented.html)
- **SCSS:** [tabler/core/scss/ui/_segmented.scss](../tabler/core/scss/ui/_segmented.scss)

### Scroll spy
- **Preview:** [tabler/preview/dist/scroll-spy.html](../tabler/preview/dist/scroll-spy.html)
- **Template:** [tabler/preview/pages/scroll-spy.html](../tabler/preview/pages/scroll-spy.html)

### Social icons
- **Preview:** [tabler/preview/dist/social-icons.html](../tabler/preview/dist/social-icons.html)
- **Template:** [tabler/preview/pages/social-icons.html](../tabler/preview/pages/social-icons.html)
- **Documentation:** [tabler/docs/content/ui/plugins/social-icons.md](../tabler/docs/content/ui/plugins/social-icons.md)
- **SCSS:** [tabler/core/scss/ui/_social.scss](../tabler/core/scss/ui/_social.scss)

### Stars rating
- **Preview:** [tabler/preview/dist/stars-rating.html](../tabler/preview/dist/stars-rating.html)
- **Template:** [tabler/preview/pages/stars-rating.html](../tabler/preview/pages/stars-rating.html)
- **Includes:** [tabler/shared/includes/ui/stars.html](../tabler/shared/includes/ui/stars.html), [rating.html](../tabler/shared/includes/ui/rating.html)
- **SCSS:** [tabler/core/scss/ui/_stars.scss](../tabler/core/scss/ui/_stars.scss)
- **Library:** [tabler/core/dist/libs/star-rating.js/](../tabler/core/dist/libs/star-rating.js/)

### Steps
- **Preview:** [tabler/preview/dist/steps.html](../tabler/preview/dist/steps.html)
- **Template:** [tabler/preview/pages/steps.html](../tabler/preview/pages/steps.html)
- **Documentation:** [tabler/docs/content/ui/components/steps.md](../tabler/docs/content/ui/components/steps.md)
- **Includes:** [tabler/shared/includes/ui/steps.html](../tabler/shared/includes/ui/steps.html)
- **SCSS:** [tabler/core/scss/ui/_steps.scss](../tabler/core/scss/ui/_steps.scss)

### Tables
- **Preview:** [tabler/preview/dist/tables.html](../tabler/preview/dist/tables.html)
- **Template:** [tabler/preview/pages/tables.html](../tabler/preview/pages/tables.html)
- **Documentation:** [tabler/docs/content/ui/components/tables.md](../tabler/docs/content/ui/components/tables.md)
- **Includes:** [tabler/shared/includes/ui/table.html](../tabler/shared/includes/ui/table.html), [advanced-table.html](../tabler/shared/includes/ui/advanced-table.html)
- **SCSS:** [tabler/core/scss/ui/_tables.scss](../tabler/core/scss/ui/_tables.scss)
- **Library:** [tabler/core/dist/libs/sortablejs/](../tabler/core/dist/libs/sortablejs/)

### Tabs
- **Preview:** [tabler/preview/dist/tabs.html](../tabler/preview/dist/tabs.html)
- **Template:** [tabler/preview/pages/tabs.html](../tabler/preview/pages/tabs.html)
- **Documentation:** [tabler/docs/content/ui/components/tabs.md](../tabler/docs/content/ui/components/tabs.md)
- **SCSS:** [tabler/core/scss/ui/_nav.scss](../tabler/core/scss/ui/_nav.scss)
- **JS:** [tabler/core/js/src/tab.js](../tabler/core/js/src/tab.js)

### Tags
- **Preview:** [tabler/preview/dist/tags.html](../tabler/preview/dist/tags.html)
- **Template:** [tabler/preview/pages/tags.html](../tabler/preview/pages/tags.html)
- **SCSS:** [tabler/core/scss/ui/_tags.scss](../tabler/core/scss/ui/_tags.scss)

### Toasts
- **Preview:** [tabler/preview/dist/toasts.html](../tabler/preview/dist/toasts.html)
- **Template:** [tabler/preview/pages/toasts.html](../tabler/preview/pages/toasts.html)
- **Documentation:** [tabler/docs/content/ui/components/toasts.md](../tabler/docs/content/ui/components/toasts.md)
- **Includes:** [tabler/shared/includes/ui/toast.html](../tabler/shared/includes/ui/toast.html)
- **SCSS:** [tabler/core/scss/ui/_toasts.scss](../tabler/core/scss/ui/_toasts.scss)
- **JS:** [tabler/core/js/src/toast.js](../tabler/core/js/src/toast.js)

### Typography
- **Preview:** [tabler/preview/dist/typography.html](../tabler/preview/dist/typography.html)
- **Template:** [tabler/preview/pages/typography.html](../tabler/preview/pages/typography.html)
- **Documentation:** [tabler/docs/content/ui/base/typography.md](../tabler/docs/content/ui/base/typography.md)
- **SCSS:** [tabler/core/scss/ui/_type.scss](../tabler/core/scss/ui/_type.scss)

---

## Extra

### Activity page
- **Preview:** [tabler/preview/dist/activity.html](../tabler/preview/dist/activity.html)
- **Template:** [tabler/preview/pages/activity.html](../tabler/preview/pages/activity.html)
- **SCSS:** [tabler/core/scss/ui/_timeline.scss](../tabler/core/scss/ui/_timeline.scss)

### Chat page
- **Preview:** [tabler/preview/dist/chat.html](../tabler/preview/dist/chat.html)
- **Template:** [tabler/preview/pages/chat.html](../tabler/preview/pages/chat.html)
- **Includes:** [tabler/shared/includes/ui/chat.html](../tabler/shared/includes/ui/chat.html)
- **SCSS:** [tabler/core/scss/ui/_chat.scss](../tabler/core/scss/ui/_chat.scss)

### Cookie banner
- **Preview:** [tabler/preview/dist/cookie-banner.html](../tabler/preview/dist/cookie-banner.html)
- **Template:** [tabler/preview/pages/cookie-banner.html](../tabler/preview/pages/cookie-banner.html)

### Empty page
- **Preview:** [tabler/preview/dist/empty.html](../tabler/preview/dist/empty.html)
- **Template:** [tabler/preview/pages/empty.html](../tabler/preview/pages/empty.html)
- **Documentation:** [tabler/docs/content/ui/components/empty.md](../tabler/docs/content/ui/components/empty.md)
- **Includes:** [tabler/shared/includes/ui/empty.html](../tabler/shared/includes/ui/empty.html)
- **SCSS:** [tabler/core/scss/ui/_empty.scss](../tabler/core/scss/ui/_empty.scss)

### FAQ page
- **Preview:** [tabler/preview/dist/faq.html](../tabler/preview/dist/faq.html)
- **Template:** [tabler/preview/pages/faq.html](../tabler/preview/pages/faq.html)

### Gallery page
- **Preview:** [tabler/preview/dist/gallery.html](../tabler/preview/dist/gallery.html)
- **Template:** [tabler/preview/pages/gallery.html](../tabler/preview/pages/gallery.html)
- **SCSS:** [tabler/core/scss/ui/_images.scss](../tabler/core/scss/ui/_images.scss)

### Invoice page
- **Preview:** [tabler/preview/dist/invoice.html](../tabler/preview/dist/invoice.html)
- **Template:** [tabler/preview/pages/invoice.html](../tabler/preview/pages/invoice.html)

### Job listing page
- **Preview:** [tabler/preview/dist/job-listing.html](../tabler/preview/dist/job-listing.html)
- **Template:** [tabler/preview/pages/job-listing.html](../tabler/preview/pages/job-listing.html)

### License page
- **Preview:** [tabler/preview/dist/license.html](../tabler/preview/dist/license.html)
- **Template:** [tabler/preview/pages/license.html](../tabler/preview/pages/license.html)

### Logs page
- **Preview:** [tabler/preview/dist/logs.html](../tabler/preview/dist/logs.html)
- **Template:** [tabler/preview/pages/logs.html](../tabler/preview/pages/logs.html)

### Marketing page
- **Preview:** [tabler/preview/dist/marketing/index.html](../tabler/preview/dist/marketing/index.html)
- **About:** [tabler/preview/dist/marketing/about.html](../tabler/preview/dist/marketing/about.html)
- **Hero:** [tabler/preview/dist/marketing/hero.html](../tabler/preview/dist/marketing/hero.html)
- **Pricing:** [tabler/preview/dist/marketing/pricing.html](../tabler/preview/dist/marketing/pricing.html)
- **Real Estate:** [tabler/preview/dist/marketing/real-estate.html](../tabler/preview/dist/marketing/real-estate.html)
- **Testimonials:** [tabler/preview/dist/marketing/testimonials.html](../tabler/preview/dist/marketing/testimonials.html)
- **Includes:** [tabler/shared/includes/marketing/](../tabler/shared/includes/marketing/)
- **SCSS:** [tabler/core/scss/marketing/](../tabler/core/scss/marketing/)

### Music page
- **Preview:** [tabler/preview/dist/music.html](../tabler/preview/dist/music.html)
- **Template:** [tabler/preview/pages/music.html](../tabler/preview/pages/music.html)

### Page loader page
- **Preview:** [tabler/preview/dist/page-loader.html](../tabler/preview/dist/page-loader.html)
- **Template:** [tabler/preview/pages/page-loader.html](../tabler/preview/pages/page-loader.html)
- **SCSS:** [tabler/core/scss/ui/_loaders.scss](../tabler/core/scss/ui/_loaders.scss)

### Photogrid page
- **Preview:** [tabler/preview/dist/photogrid.html](../tabler/preview/dist/photogrid.html)
- **Template:** [tabler/preview/pages/photogrid.html](../tabler/preview/pages/photogrid.html)

### Pricing cards page
- **Preview:** [tabler/preview/dist/pricing.html](../tabler/preview/dist/pricing.html)
- **Template:** [tabler/preview/pages/pricing.html](../tabler/preview/pages/pricing.html)

### Pricing table page
- **Preview:** [tabler/preview/dist/pricing-table.html](../tabler/preview/dist/pricing-table.html)
- **Template:** [tabler/preview/pages/pricing-table.html](../tabler/preview/pages/pricing-table.html)

### Search results page
- **Preview:** [tabler/preview/dist/search-results.html](../tabler/preview/dist/search-results.html)
- **Template:** [tabler/preview/pages/search-results.html](../tabler/preview/pages/search-results.html)

### Settings page
- **Preview:** [tabler/preview/dist/settings.html](../tabler/preview/dist/settings.html)
- **Template:** [tabler/preview/pages/settings.html](../tabler/preview/pages/settings.html)
- **Settings Plan:** [tabler/preview/dist/settings-plan.html](../tabler/preview/dist/settings-plan.html)

### Signatures page
- **Preview:** [tabler/preview/dist/signatures.html](../tabler/preview/dist/signatures.html)
- **Template:** [tabler/preview/pages/signatures.html](../tabler/preview/pages/signatures.html)
- **Includes:** [tabler/shared/includes/ui/signature.html](../tabler/shared/includes/ui/signature.html)
- **SCSS:** [tabler/core/scss/ui/_signature.scss](../tabler/core/scss/ui/_signature.scss)
- **Library:** [tabler/core/dist/libs/signature_pad/](../tabler/core/dist/libs/signature_pad/)

### Tasks page
- **Preview:** [tabler/preview/dist/tasks.html](../tabler/preview/dist/tasks.html)
- **Template:** [tabler/preview/pages/tasks.html](../tabler/preview/pages/tasks.html)

### Text features page
- **Preview:** [tabler/preview/dist/text-features.html](../tabler/preview/dist/text-features.html)
- **Template:** [tabler/preview/pages/text-features.html](../tabler/preview/pages/text-features.html)
- **Library:** [tabler/core/dist/libs/typed.js/](../tabler/core/dist/libs/typed.js/)

### Trial ended page
- **Preview:** [tabler/preview/dist/trial-ended.html](../tabler/preview/dist/trial-ended.html)
- **Template:** [tabler/preview/pages/trial-ended.html](../tabler/preview/pages/trial-ended.html)

### Uptime monitor page
- **Preview:** [tabler/preview/dist/uptime.html](../tabler/preview/dist/uptime.html)
- **Template:** [tabler/preview/pages/uptime.html](../tabler/preview/pages/uptime.html)

### Users list page
- **Preview:** [tabler/preview/dist/users.html](../tabler/preview/dist/users.html)
- **Template:** [tabler/preview/pages/users.html](../tabler/preview/pages/users.html)

### Widgets page
- **Preview:** [tabler/preview/dist/widgets.html](../tabler/preview/dist/widgets.html)
- **Template:** [tabler/preview/pages/widgets.html](../tabler/preview/pages/widgets.html)
- **SCSS:** [tabler/core/scss/ui/_charts.scss](../tabler/core/scss/ui/_charts.scss), [_progress.scss](../tabler/core/scss/ui/_progress.scss)
- **JS:** [tabler/core/js/src/countup.js](../tabler/core/js/src/countup.js)
- **Library:** [tabler/core/dist/libs/countup.js/](../tabler/core/dist/libs/countup.js/)

### Wizard page
- **Preview:** [tabler/preview/dist/wizard.html](../tabler/preview/dist/wizard.html)
- **Template:** [tabler/preview/pages/wizard.html](../tabler/preview/pages/wizard.html)

---

## Core Files

### Main JavaScript
- **Main Bundle:** [tabler/core/js/tabler.js](../tabler/core/js/tabler.js)
- **Source Files:** [tabler/core/js/src/](../tabler/core/js/src/)

**JavaScript Modules (12 files):**
1. `tabler.js` - Main framework initialization
2. `autosize.js` - Auto-resizing textarea plugin
3. `bootstrap.js` - Bootstrap JavaScript enhancements
4. `countup.js` - Number counter animation
5. `dropdown.js` - Custom dropdown behavior
6. `input-mask.js` - Input masking functionality
7. `popover.js` - Popover component
8. `sortable.js` - Table/list sorting
9. `switch-icon.js` - Icon switcher
10. `tab.js` - Tab navigation
11. `toast.js` - Toast notifications
12. `tooltip.js` - Tooltip component

### Main SCSS
- **Main File:** [tabler/core/scss/tabler.scss](../tabler/core/scss/tabler.scss)
- **Variables:** [tabler/core/scss/_variables.scss](../tabler/core/scss/_variables.scss) (36KB design tokens)
- **Dark Mode:** [tabler/core/scss/_variables-dark.scss](../tabler/core/scss/_variables-dark.scss)
- **Layout:** [tabler/core/scss/layout/](../tabler/core/scss/layout/) (7 files)
- **UI Components:** [tabler/core/scss/ui/](../tabler/core/scss/ui/) (50+ component files)
- **Utilities:** [tabler/core/scss/utils/](../tabler/core/scss/utils/)
- **Marketing:** [tabler/core/scss/marketing/](../tabler/core/scss/marketing/)

**Total SCSS Files:** 119 files

### Third-party Libraries
Location: [tabler/core/dist/libs/](../tabler/core/dist/libs/)

**Charts & Visualization (2):**
- `apexcharts/` - Advanced charting library
- `jsvectormap/` - Vector map library

**UI Components (8):**
- `clipboard/` - Copy-to-clipboard functionality
- `dropzone/` - File upload handling
- `fullcalendar/` - Calendar component
- `plyr/` - Video/audio player
- `fslightbox/` - Image lightbox
- `signature_pad/` - Signature capture
- `sortablejs/` - Drag-and-drop sorting
- `star-rating.js/` - Star rating widget

**Form Controls (5):**
- `tom-select/` - Advanced select dropdown
- `imask/` - Input masking library
- `autosize/` - Auto-resize textarea
- `litepicker/` - Date picker
- `nouislider/` - Range slider

**Text & Content (2):**
- `typed.js/` - Text typing animation
- `hugerte/` - WYSIWYG editor (TinyMCE)

**Utilities (4):**
- `list.js/` - List filtering and sorting
- `@hotwired/` - Turbo for progressive enhancement
- `@melloware/` - Additional utilities
- `countup.js/` - Number counter animation

**Total Libraries:** 21 bundled libraries

### Shared Templates
- **UI Includes:** [tabler/shared/includes/ui/](../tabler/shared/includes/ui/) (75 files)
- **Card Variations:** [tabler/shared/includes/cards/](../tabler/shared/includes/cards/) (60+ files)
- **Layout Includes:** [tabler/shared/includes/layout/](../tabler/shared/includes/layout/)
- **Form Includes:** [tabler/shared/includes/forms/](../tabler/shared/includes/forms/)
- **Total Include Files:** 283 reusable templates

### Documentation
- **Location:** [tabler/docs/content/](../tabler/docs/content/)
- **Component Docs:** [tabler/docs/content/ui/components/](../tabler/docs/content/ui/components/) (42 files)
- **Form Docs:** [tabler/docs/content/ui/forms/](../tabler/docs/content/ui/forms/) (9 files)
- **Layout Docs:** [tabler/docs/content/ui/layout/](../tabler/docs/content/ui/layout/) (4 files)
- **Getting Started:** [tabler/docs/content/ui/getting-started/](../tabler/docs/content/ui/getting-started/) (10 files)
- **Total Documentation Files:** 104 markdown files

### Preview Pages
- **Location:** [tabler/preview/pages/](../tabler/preview/pages/)
- **Total Pages:** 116 HTML preview/example pages
- **Built Site:** [tabler/preview/dist/](../tabler/preview/dist/)
