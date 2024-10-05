<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li
                    class="nav-item has-treeview    {{ request()->is('index*') || request()->is('index2*') || request()->is('index3*') ? 'menu-open' : '' }} ">
                    <a href="{{ url('/') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'index')) }}" class="nav-link @yield('active-index')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'index2')) }}" class="nav-link @yield('active-index2')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'index3')) }}" class="nav-link @yield('active-index3')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview    {{ request()->is('posts*') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Posts
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('posts.index') }}" class="nav-link @yield('active-posts-index')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Index</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{ url('/' . ($page = 'widgets')) }}" class="nav-link @yield('active-widgets')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item has-treeview    {{ request()->is('layout-top-nav*') || request()->is('layout-boxed*') || request()->is('layout-fixed-sidebar*') || request()->is('layout-fixed-topnav*') || request()->is('layout-fixed-footer*') || request()->is('layout-collapsed-sidebar*') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'layout-top-nav')) }}" class="nav-link @yield('active-layout-top-nav')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'layout-boxed')) }}" class="nav-link @yield('active-layout-boxed')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Boxed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'layout-fixed-sidebar')) }}"
                                class="nav-link @yield('active-layout-fixed-sidebar')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'layout-fixed-topnav')) }}"
                                class="nav-link @yield('active-layout-fixed-topnav')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'layout-fixed-footer')) }}"
                                class="nav-link @yield('active-layout-fixed-footer')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'layout-collapsed-sidebar')) }}"
                                class="nav-link @yield('active-layout-collapsed-sidebar')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview    {{ request()->is('charts-chartjs*') || request()->is('charts-flot*') || request()->is('charts-inline*') ? 'menu-open' : '' }} ">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'charts-chartjs')) }}" class="nav-link @yield('active-charts-chartjs')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'charts-flot')) }}" class="nav-link @yield('active-charts-flot')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'charts-inline')) }}" class="nav-link @yield('active-charts-inline')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inline</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview    {{ request()->is('UI-general*') || request()->is('UI-icons*') || request()->is('UI-buttons*') || request()->is('UI-sliders*') || request()->is('UI-modals*') || request()->is('UI-navbar*') || request()->is('UI-timeline*') || request()->is('UI-ribbons*') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'UI-general')) }}" class="nav-link @yield('active-UI-general')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'UI-icons')) }}" class="nav-link @yield('active-UI-icons')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'UI-buttons')) }}" class="nav-link @yield('active-UI-buttons')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buttons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'UI-sliders')) }}" class="nav-link @yield('active-UI-sliders')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'UI-modals')) }}" class="nav-link @yield('active-UI-modals')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modals & Alerts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'UI-navbar')) }}" class="nav-link @yield('active-UI-navbar')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Navbar & Tabs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'UI-timeline')) }}" class="nav-link @yield('active-UI-timeline')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Timeline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'UI-ribbons')) }}" class="nav-link @yield('active-UI-ribbons')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ribbons</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview    {{ request()->is('forms-general*') || request()->is('forms-editors*') || request()->is('forms-advanced*') ? 'menu-open' : '' }} ">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'forms-general')) }}" class="nav-link @yield('active-forms-general')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'forms-advanced')) }}"
                                class="nav-link @yield('active-forms-advanced')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Advanced Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'forms-editors')) }}" class="nav-link @yield('active-forms-editors')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Editors</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview    {{ request()->is('tables-simple*') || request()->is('tables-data*') || request()->is('tables-jsgrid*') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'tables-simple')) }}" class="nav-link @yield('active-tables-simple')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'tables-data')) }}" class="nav-link @yield('active-tables-data')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'tables-jsgrid')) }}" class="nav-link @yield('active-tables-jsgrid')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="{{ url('/' . ($page = 'calendar')) }}" class="nav-link @yield('active-calendar')">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/' . ($page = 'gallery')) }}" class="nav-link @yield('active-gallery')">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item has-treeview    {{ request()->is('mailbox*') || request()->is('mailbox-compose*') || request()->is('mailbox-read-mail*') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'mailbox')) }}" class="nav-link @yield('active-mailbox')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'mailbox-compose')) }}"
                                class="nav-link @yield('active-mailbox-compose')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'mailbox-read-mail')) }}"
                                class="nav-link @yield('active-mailbox-read-mail')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview    {{ request()->is('examples-invoice*') || request()->is('page-profile*') || request()->is('examples-e_commerce*') || request()->is('examples-projects*') || request()->is('examples-project_add*') || request()->is('examples-project_edit*') || request()->is('examples-project_detail*') || request()->is('examples-contacts*') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-invoice')) }}"
                                class="nav-link @yield('active-examples-invoice')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'page-profile')) }}" class="nav-link @yield('active-page-profile')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-e_commerce')) }}"
                                class="nav-link @yield('active-examples-e_commerce')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-projects')) }}"
                                class="nav-link @yield('active-examples-projects')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-project_add')) }}"
                                class="nav-link @yield('active-examples-project_add')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-project_edit')) }}"
                                class="nav-link @yield('active-examples-project_edit')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-project_detail')) }}"
                                class="nav-link @yield('active-examples-project_detail')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-contacts')) }}"
                                class="nav-link @yield('active-examples-contacts')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview    {{ request()->is('examples-legacy-user-menu*') || request()->is('examples-language-menu*') || request()->is('examples-examples-404*') || request()->is('examples-examples-500*') || request()->is('examples-blank*') || request()->is('examples-project_edit*') || request()->is('examples-project_detail*') || request()->is('examples-contacts*') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'page-login')) }}" class="nav-link @yield('active-page-login')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'page-register')) }}" class="nav-link @yield('active-page-register')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Register</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'lockscreen')) }}" class="nav-link @yield('active-lockscreen')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lockscreen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-legacy-user-menu')) }}"
                                class="nav-link @yield('active-examples-legacy-user-menu')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Legacy User Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-language-menu')) }}"
                                class="nav-link @yield('active-examples-language-menu')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Language Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-404')) }}" class="nav-link @yield('active-examples-404')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 404</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'examples-500')) }}" class="nav-link @yield('active-examples-500')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 500</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'blank')) }}" class="nav-link @yield('active-blank')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blank Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/' . ($page = 'starter')) }}" class="nav-link @yield('active-starter')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Starter Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.0" class="nav-link @yield('active-index')">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
