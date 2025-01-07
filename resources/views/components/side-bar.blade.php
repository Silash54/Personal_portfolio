<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- End Dashboard Nav -->
    <li class="nav-heading">Pages</li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('project.index') }}">
            <i class="bi bi-caret-left-square-fill"></i>
            <span>Project</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('skill.index') }}">
            <i class="bi bi-bookmark-star-fill"></i>
            <span>Skill</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('profile') }}">
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
    </li>
    <!-- End Profile Page Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>F.A.Q</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </li>
    
</ul>