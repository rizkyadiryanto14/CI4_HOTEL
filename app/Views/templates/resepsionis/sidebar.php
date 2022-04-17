<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"></div>
    </a>

    <?php if (in_groups('resepsionis')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Resepsionis Sidebar
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item <?= uri_string() == 'dashboardRP' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('dashboardRP'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item <?= uri_string() == 'resepsionis' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('resepsionis'); ?>">
                <i class="fas fa-users"></i>
                <span>User List</span></a>
        </li>
        <li class="nav-item <?= uri_string() == 'kamarRP' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('kamarRP'); ?>">
                <i class="fas fa-users"></i>
                <span>Daftar Kamar</span></a>
        </li>
    <?php endif; ?>
    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>