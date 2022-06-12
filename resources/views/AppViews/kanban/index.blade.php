@include('AppViews.project.timeline')
<div class="kanban-row mt-1">
    @include('AppViews.tasks.partials._kanbanColumn', ['name' => 'Workflows', 'color' => '#3993DD'])
    @include('AppViews.tasks.partials._kanbanColumn', ['name' => 'E-Banette', 'color' => '#E0ACD5'])
    @include('AppViews.tasks.partials._kanbanColumn', ['name' => 'Réaménagements', 'color' => '#29E7CD'])
</div>
