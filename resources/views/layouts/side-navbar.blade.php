<!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo/logo-2.svg') }}" alt="brand-logo"/>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow " href="#">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow" href="#" data-bs-toggle="collapse" data-bs-target="#navPages"
                    aria-expanded="false" aria-controls="navPages">
                    <i data-feather="user" class="nav-icon icon-xs me-2">
                    </i> Members
                </a>

                <div id="navPages" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link has-arrow" href="#">
                                <i data-feather="users" class="nav-icon icon-xs me-2"></i>
                                All Members
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i data-feather="user-plus" class="nav-icon icon-xs me-2"></i>
                                Add Member
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2"></i>
                                Attendence
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow" href="#" data-bs-toggle="collapse" data-bs-target="#navPackages"
                    aria-expanded="false" aria-controls="navPages">
                    <i data-feather="package" class="nav-icon icon-xs me-2">
                    </i> Packages
                </a>

                <div id="navPackages" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link has-arrow" href="#">
                                <i data-feather="file-text" class="nav-icon icon-xs me-2"></i>
                                All Packages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i data-feather="plus-circle" class="nav-icon icon-xs me-2"></i>
                                Add Package
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2"></i>
                                Items
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>
</nav>
