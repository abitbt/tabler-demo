<?php

namespace App\Http\Controllers;

use Abitbt\TablerBlade\TablerMenu\TablerMenu;

abstract class Controller
{
    /**
     * Build the navigation menu for the application.
     */
    protected function buildNavigation(): array
    {
        $menu = TablerMenu::make();

        // Home link
        $menu->link('Home', url('/'))
            ->icon('home')
            ->activeRoute('home');

        // Components dropdown
        $menu->dropdown('Components')
            ->icon('package')
            ->columns(3)
            ->items(function (mixed $dropdown) {
                $dropdown->link('Accordion', url('/demo/accordion'))
                    ->icon('list')
                    ->activeRoute('demo.accordion');

                $dropdown->link('Alerts', url('/demo/alert'))
                    ->icon('bell')
                    ->activeRoute('demo.alert');

                $dropdown->link('Avatars', url('/demo/avatars'))
                    ->icon('user-circle')
                    ->activeRoute('demo.avatars');

                $dropdown->link('Badges', url('/demo/badge'))
                    ->icon('bookmarks')
                    ->activeRoute('demo.badge');

                $dropdown->link('Buttons', url('/demo/button'))
                    ->icon('square')
                    ->activeRoute('demo.button');

                $dropdown->link('Cards', url('/demo/cards'))
                    ->icon('layout')
                    ->activeRoute('demo.cards');

                $dropdown->link('Carousel', url('/demo/carousel'))
                    ->icon('carousel-horizontal')
                    ->activeRoute('demo.carousel');

                $dropdown->link('Divider', url('/demo/divider'))
                    ->icon('separator-horizontal')
                    ->activeRoute('demo.divider');

                $dropdown->link('Dropdowns', url('/demo/dropdowns'))
                    ->icon('select')
                    ->activeRoute('demo.dropdowns');

                $dropdown->link('Empty States', url('/demo/empty'))
                    ->icon('folder-x')
                    ->activeRoute('demo.empty');

                $dropdown->link('Forms', url('/demo/forms'))
                    ->icon('forms')
                    ->activeRoute('demo.forms');

                $dropdown->link('Images', url('/demo/image'))
                    ->icon('photo')
                    ->activeRoute('demo.image');

                $dropdown->link('List Group', url('/demo/list-group'))
                    ->icon('list-check')
                    ->activeRoute('demo.list-group');

                $dropdown->link('Modals', url('/demo/modals'))
                    ->icon('square-plus')
                    ->activeRoute('demo.modals');

                $dropdown->link('Offcanvas', url('/demo/offcanvas'))
                    ->icon('layout-sidebar-right')
                    ->activeRoute('demo.offcanvas');

                $dropdown->link('Pagination', url('/demo/pagination'))
                    ->icon('dots')
                    ->activeRoute('demo.pagination');

                $dropdown->link('Placeholder', url('/demo/placeholder'))
                    ->icon('text-size')
                    ->activeRoute('demo.placeholder');

                $dropdown->link('Progress', url('/demo/progress'))
                    ->icon('progress')
                    ->activeRoute('demo.progress');

                $dropdown->link('Ribbon', url('/demo/ribbon'))
                    ->icon('flag')
                    ->activeRoute('demo.ribbon');

                $dropdown->link('Spinner', url('/demo/spinner'))
                    ->icon('loader')
                    ->activeRoute('demo.spinner');

                $dropdown->link('Status', url('/demo/status'))
                    ->icon('point')
                    ->activeRoute('demo.status');

                $dropdown->link('Steps', url('/demo/steps'))
                    ->icon('stairs')
                    ->activeRoute('demo.steps');

                $dropdown->link('Tables', url('/demo/tables'))
                    ->icon('table')
                    ->activeRoute('demo.tables');

                $dropdown->link('Timeline', url('/demo/timeline'))
                    ->icon('timeline')
                    ->activeRoute('demo.timeline');

                $dropdown->link('Toasts', url('/demo/toasts'))
                    ->icon('bread')
                    ->activeRoute('demo.toasts');

                $dropdown->link('Tabs', url('/demo/tabs'))
                    ->icon('credit-card')
                    ->activeRoute('demo.tabs');
            });

        // Layouts dropdown
        $menu->dropdown('Layouts')
            ->icon('layout-grid')
            ->activeRoute('demo.layout-*')
            ->items(function (mixed $dropdown) {
                $dropdown->link('Vertical Layout', url('/demo/layout-vertical'))
                    ->icon('layout-sidebar')
                    ->activeRoute('demo.layout-vertical');

                $dropdown->link('Boxed Layout', url('/demo/layout-boxed'))
                    ->icon('layout-distribute-horizontal')
                    ->activeRoute('demo.layout-boxed');
            });

        return $menu->toArray();
    }
}
