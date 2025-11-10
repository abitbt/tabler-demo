{{--
    Timeline Component

    Vertical timeline for displaying chronological events or activities.

    @prop bool $simple - Use simple timeline style (no badges)

    @slot default - Timeline items

    Available CSS Classes (use via class="" attribute):

    Timeline Styles:
    - timeline           - Base timeline class (applied automatically)
    - timeline-simple    - Simple timeline (also via simple prop)

    Timeline Item:
    - timeline-event     - Individual timeline event/item
    - timeline-event-icon - Icon wrapper for event

    Event Badges:
    - badge              - Badge for timeline markers
    - bg-{color}         - Badge colors

    Usage Examples:

    Basic timeline:
    <x-tabler::timeline>
        <div class="timeline-event">
            <div class="timeline-event-icon bg-primary"></div>
            <div class="card timeline-event-card">
                <div class="card-body">
                    <div class="text-secondary float-end">2 hrs ago</div>
                    <h4>Meeting with team</h4>
                    <p class="text-secondary">Discussed project requirements.</p>
                </div>
            </div>
        </div>

        <div class="timeline-event">
            <div class="timeline-event-icon bg-success"></div>
            <div class="card timeline-event-card">
                <div class="card-body">
                    <div class="text-secondary float-end">5 hrs ago</div>
                    <h4>Task completed</h4>
                    <p class="text-secondary">Finished the homepage design.</p>
                </div>
            </div>
        </div>
    </x-tabler::timeline>

    Simple timeline:
    <x-tabler::timeline simple>
        <div class="timeline-event">
            <div class="timeline-event-icon"></div>
            <div class="card timeline-event-card">
                <div class="card-body">
                    <p class="text-secondary">8:00 AM - Morning standup</p>
                </div>
            </div>
        </div>
        <div class="timeline-event">
            <div class="timeline-event-icon"></div>
            <div class="card timeline-event-card">
                <div class="card-body">
                    <p class="text-secondary">10:30 AM - Client call</p>
                </div>
            </div>
        </div>
    </x-tabler::timeline>
--}}

@props([
    'simple' => false,
])

@php
    // Build timeline classes
    $classes = ['timeline'];

    // Simple variant
    if ($simple) {
        $classes[] = 'timeline-simple';
    }
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
    {{ $slot }}
</div>
