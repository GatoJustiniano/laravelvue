<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo ">
        <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img width="30px" src="{{ asset('garrita.svg')}}" alt ="icon garrita" />
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">
                {{env('APP_NAME')}}
            </span>
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
                <li class="menu-item ">
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

        <!-- Roles y permisos -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Roles &amp; Permisos</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-chart"></i>
                <div>Roles y Permisos</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('roles.index') }}" class="menu-link">
                        <div>Roles</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('permissions.index') }}" class="menu-link">
                        <div>Permisos</div>
                    </a>
                </li>
            </ul>
        </li>
        

        <!-- Ayuda -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Ayuda</span></li>
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-receipt"></i>
                <div>Tutorial</div>
            </a>
        </li>
        <li class="menu-item">
            <a href=""
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div>Documentación</div>
            </a>
        </li>
    </ul>



</aside>