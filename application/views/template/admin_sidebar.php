<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin_menu/index');?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-building"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Electronix<sup>.id</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Administrator
</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
       <a class="nav-link" href="<?= base_url('admin_menu/index'); ?>">
           <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span></a>
    </li>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin_menu/menu_management'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Menu Management</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<div class="sidebar-heading">
    Menu Management
</div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Menu</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Semua Menu:</h6>
                            <?php foreach ($admin_menu as $am) : ?>
                                <a class="collapse-item" href="<?= base_url("admin_menu/".$am['url']); ?>">
                                <i class="<?= $am['icon']; ?>"></i>
                            <span><?= $am['nama']; ?></span></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>

<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    User
</div>

<!-- Nav Item - Charts
<li class="nav-item">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-user-circle"></i>
        <span>Profile</span></a>
</li> -->

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/keluar'); ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Keluar</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Heading -->
<div class="sidebar-heading">
    Website
</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('/') ?>" target="_blank">
        <i class="fab fa-fw fa-brands fa-chrome"></i>
        <span>Kunjungi Website</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
