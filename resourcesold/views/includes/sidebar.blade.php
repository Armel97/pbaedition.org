<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="/admin/dashboard">
                    <span class="brand-logo">
                        <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <img src="{{asset('assets/site-images/logo.jpg')}}" alt="">
                            </g>
                        </svg></span>
                    <h2 class="brand-text">Éditions</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center" href="/admin/dashboard"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home">Dableau de board</span></a>
            </li>
            <li class="nav-item {{ request()->is('admin/categories-livres') ? 'active' : '' }} {{ request()->is('admin/livres') ? 'active' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather="layout"></i><span class="menu-title text-truncate" data-i18n="Page Layouts">Gestion des livres</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="/admin/categories-livres">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Collapsed Menu">Thématiques </span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="/admin/livres">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Collapsed Menu">Livres </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="/admin/users">
                    <i data-feather="users"></i>
                    <span class="menu-title text-truncate" data-i18n="Home">Gestion utilisateurs</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="/admin/equipe">
                    <i data-feather="users"></i>
                    <span class="menu-title text-truncate" data-i18n="Home">Gestion équipe</span>
                </a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layout"></i><span class="menu-title text-truncate" data-i18n="Page Layouts">Gestion formations</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="/admin/formation">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Collapsed Menu">Formations </span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="/admin/evenements">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Collapsed Menu">Evènements </span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="/admin/stages">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Collapsed Menu">Stages </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layout"></i><span class="menu-title text-truncate" data-i18n="Page Layouts">Gestion galerie</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="/admin/galerie-categories">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Collapsed Menu">Catégorie galerie </span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="/admin/galeries">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Collapsed Menu">Galerie </span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="/admin/videos">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Collapsed Menu">Vidéos </span>
                        </a>
                    </li>


                </ul>
            </li>
        
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="/admin/distributeurs">
                    <i data-feather="users"></i>
                    <span class="menu-title text-truncate" data-i18n="Home">Gestions distributeurs</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="/admin/subscribers">
                    <i data-feather="users"></i>
                    <span class="menu-title text-truncate" data-i18n="Home">Gestion abonnés</span>
                </a>
            </li>
        </ul>
    </div>
</div>