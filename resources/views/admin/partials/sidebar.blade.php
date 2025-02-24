<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="index.html">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::routeIs('profile.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('profile.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('skils.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('skils.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Skils</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('resume.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('resume.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Resume</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('about.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('about.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">About</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('languages.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('languages.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Languages</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('projects.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('projects.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Projects</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
