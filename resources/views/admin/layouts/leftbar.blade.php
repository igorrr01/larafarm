<div class="preloader flex-column justify-content-center align-items-center">
            <img src="/public/vendor/adminlte/dist/img/AdminLTELogo.png" class="animation__shake" alt="AdminLTE Preloader Image" width="60" height="60">
        </div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars"></i>
                        <span class="sr-only">Навігація</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <span>
                            {{ Auth::user()->name }}
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-footer">
                            <a class="btn btn-default btn-flat float-right  btn-block " href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-gear"></i>
                                Вихід
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('admin.index') }}" class="brand-link ">
                <img src="/public/vendor/adminlte/dist/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity:.8">
                <span class="brand-text font-weight-light ">
                    <b>Адмін панель</b>
                </span>
            </a>
            <div class="sidebar">
                <nav class="pt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('admin.product.index') }}">
                            <i class="fas fa-store"></i>
                                <p>Товари</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('admin.settings.index') }}">
                            <i class="fas fa-wrench"></i>
                                <p>Загальні налаштуання</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>