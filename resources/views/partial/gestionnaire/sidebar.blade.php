@php
    $current_page = Route::currentRouteName();
@endphp

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    @can('show-users')
        <li class="nav-item">
            <a href="{{route('admin.agent.index')}}" class="nav-link">
                <i class=" fa-user">Agent</i>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.agent_fiche.index')}}" class="nav-link">
                <i class=" fa-user">Fiche Agent</i>
            </a>
        </li>
    @endcan

    <li class="nav-item">
        <a href="{{route('gest.bons.index')}}" class="nav-link">
            <i class=" fa-user">Bon</i>
        </a>
    </li>





    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
