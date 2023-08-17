<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="./dist/assets/img/Logo.png" alt="Logo" class="brand-image opacity-75 shadow">
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Empanadas MAUGER</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <!--begin::Sidebar HOME-->
                <li class="nav-item <?php echo menu_open('dashboard') ?>">
                    <a href="#" class="nav-link <?php echo menu_open('dashboard') ?>">
                        <i class="nav-icon bi bi-house"></i>
                        <p>
                            Home
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./home.php" class="nav-link <?php echo page_active('home') ?>">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./perfil.php" class="nav-link <?php echo page_active('perfil') ?>">
                                <i class="nav-icon bi bi-person-circle"></i>
                                <p>Mi Perfil</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--end::Sidebar HOME-->
                <!--begin::Sidebar Administracion-->
                <li class="nav-item <?php echo menu_open('administracion') ?>">
                    <a href="#" class="nav-link <?php echo menu_open('administracion') ?>">
                        <i class="nav-icon bi bi-gear-wide-connected"></i>
                        <p>
                            Administracion
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./usuarios.php" class="nav-link <?php echo page_active('usuarios') ?>">
                                <i class="nav-icon bi bi-person-fill-gear"></i>
                                <p>Control de Accesos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--end::Sidebar Administracion-->
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->