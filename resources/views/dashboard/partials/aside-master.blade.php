<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo ">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                
                <svg width="343" height="464" viewBox="0 0 343 464" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M65.3742 303.432L0 231.981L212.269 0H343L65.3742 303.432ZM343 214.072H212.269L163.298 267.594L228.672 339.045"
                        fill="#74F9FF" fill-opacity="0.8" />
                    <path d="M163.298 410.477L212.269 464H343L228.672 339.045" fill="#0D47A1" />
                    <path d="M98.0784 339.083L163.35 267.726L228.621 339.064L163.35 410.421L98.0784 339.083Z" fill="#42A5F5" />
                    <path d="M163.35 410.421L228.621 339.083L237.732 349.041L172.461 420.379L163.35 410.421Z"
                        fill="url(#paint0_linear_3_30)" />
                    <path d="M163.298 410.477L260.296 373.852L228.672 339.026" fill="url(#paint1_linear_3_30)" />
                    <defs>
                        <linearGradient id="paint0_linear_3_30" x1="195.998" y1="374.739" x2="205.917" y2="383.815"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0.2" stop-opacity="0.15" />
                            <stop offset="0.85" stop-color="#616161" stop-opacity="0.01" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_3_30" x1="163.321" y1="374.754" x2="260.317" y2="374.754"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0.2" stop-opacity="0.55" />
                            <stop offset="0.85" stop-color="#616161" stop-opacity="0.01" />
                        </linearGradient>
                    </defs>
                </svg>

            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Gato</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon material-icons">assignment_turned_in</i>
                Dashboards
            </a>
            <ul class="menu-sub">
                <li class="menu-item active">
                    <a href="{{ route('post.index') }}" class="menu-link">
                        Posts
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.index') }}" class="menu-link">
                        Usuarios
                    </a>
                </li>
            </ul>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Otros</div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item">
                    <a href=" {{ route('category.index') }} " class="menu-link">
                        <div>Categorias</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href=" {{ route('contact.index') }} " class="menu-link">
                        <div>Contactos</div>
                    </a>
                </li>
               
            </ul>
        </li>

        <!-- Charts & Maps -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Charts &amp; Maps</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-chart"></i>
                <div data-i18n="Charts">Charts</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="charts-apex.html" class="menu-link">
                        <div data-i18n="Apex Charts">Apex Charts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="charts-chartjs.html" class="menu-link">
                        <div data-i18n="ChartJS">ChartJS</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="maps-leaflet.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-alt"></i>
                <div data-i18n="Leaflet Maps">Leaflet Maps</div>
            </a>
        </li>

        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
            <a href="https://themeselection.com/support/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li>
    </ul>



</aside>