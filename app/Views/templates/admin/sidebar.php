<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3"></div>
</a>

<?php if (in_groups('admin')) : ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin Sidebar
    </div>

    <!-- Nav Item - User List -->
    <li class="nav-item <?= uri_string() == 'dashboard' ? 'active':'' ?>">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item <?= uri_string() == 'admin' ? 'active':'' ?>">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-users"></i>
            <span>User List</span></a>
    </li>
    <li class="nav-item <?= uri_string() == 'kamar' ? 'active':'' ?>">
        <a class="nav-link" href="<?= base_url('kamar'); ?>">
            <i class="fas fa-users"></i>
            <span>Daftar Kamar</span></a>
    </li>
    <li class="nav-item <?= uri_string() == 'transaksi' ? 'active':'' ?>">
        <a class="nav-link" href="<?= base_url('transaksi'); ?>">
            <i class="fas fa-users"></i>
            <span>Daftar Transaksi</span></a>
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