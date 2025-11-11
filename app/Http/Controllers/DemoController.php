<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DemoController extends Controller
{
    /**
     * Display the alert demo page.
     */
    public function alert(): View
    {
        return view('demo.alert', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the badge demo page.
     */
    public function badge(): View
    {
        return view('demo.badge', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the button demo page.
     */
    public function button(): View
    {
        return view('demo.button', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the forms demo page.
     */
    public function forms(): View
    {
        return view('demo.forms', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the cards demo page.
     */
    public function cards(): View
    {
        return view('demo.cards', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the modals demo page.
     */
    public function modals(): View
    {
        return view('demo.modals', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the offcanvas demo page.
     */
    public function offcanvas(): View
    {
        return view('demo.offcanvas', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the dropdowns demo page.
     */
    public function dropdowns(): View
    {
        return view('demo.dropdowns', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the tables demo page.
     */
    public function tables(): View
    {
        return view('demo.tables', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the tabs demo page.
     */
    public function tabs(): View
    {
        return view('demo.tabs', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the toasts demo page.
     */
    public function toasts(): View
    {
        return view('demo.toasts', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the progress demo page.
     */
    public function progress(): View
    {
        return view('demo.progress', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the spinner demo page.
     */
    public function spinner(): View
    {
        return view('demo.spinner', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the pagination demo page.
     */
    public function pagination(): View
    {
        return view('demo.pagination', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the steps demo page.
     */
    public function steps(): View
    {
        return view('demo.steps', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the avatars demo page.
     */
    public function avatars(): View
    {
        return view('demo.avatars', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the status demo page.
     */
    public function status(): View
    {
        return view('demo.status', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the ribbon demo page.
     */
    public function ribbon(): View
    {
        return view('demo.ribbon', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the empty demo page.
     */
    public function empty(): View
    {
        return view('demo.empty', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the divider demo page.
     */
    public function divider(): View
    {
        return view('demo.divider', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the timeline demo page.
     */
    public function timeline(): View
    {
        return view('demo.timeline', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the accordion demo page.
     */
    public function accordion(): View
    {
        return view('demo.accordion', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the carousel demo page.
     */
    public function carousel(): View
    {
        return view('demo.carousel', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the list group demo page.
     */
    public function listGroup(): View
    {
        return view('demo.list-group', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the placeholder demo page.
     */
    public function placeholder(): View
    {
        return view('demo.placeholder', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the image demo page.
     */
    public function image(): View
    {
        return view('demo.image', ['navItems' => $this->buildNavigation()]);
    }

    /**
     * Display the vertical layout demo page.
     */
    public function layoutVertical(): View
    {
        return view('demo.layouts.vertical', [
            'navItems' => $this->buildNavigation(),
            'bsThemeBase' => 'neutral',
            'bsThemeRadius' => 2,
            'layoutFluid' => true,
            'sidebarPosition' => 'left',
        ]);
    }

    /**
     * Display the boxed layout demo page.
     */
    public function layoutBoxed(): View
    {
        return view('demo.layouts.boxed', [
            'navItems' => $this->buildNavigation(),
            'bsThemeBase' => 'catppuccin-mocha',
            'bsThemeRadius' => 2,
            'layoutBoxed' => true,
            'navbarDark' => false,
            'navbarSticky' => false,
        ]);
    }
}
