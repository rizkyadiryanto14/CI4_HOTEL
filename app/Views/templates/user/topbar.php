<div class="container-fluid bg-dark px-0 position-fixed nav-nav mb-5">
    <div class="row gx-0">
        <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 text-primary text-uppercase">Hotel Hebat</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-primary text-uppercase">Hotel Hebat</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0 float-right">
                        <a href="<?= base_url('/'); ?>" class="nav-item nav-link text-capitalize <?= uri_string() == '/' ? 'active' : '' ?> ">Home</a>
                        <a href="<?= base_url('user/room'); ?>" class="nav-item nav-link text-capitalize <?= uri_string() == 'user/room' ? 'active' : '' ?>">Kamar</a>
                        <a href="<?= base_url('user/facility'); ?>" class="nav-item nav-link text-capitalize <?= uri_string() == 'user/facility' ? 'active' : '' ?>">Fasilitas</a>
                        <a href="<?= base_url('user/about'); ?>" class="nav-item nav-link text-capitalize <?= uri_string() == 'user/about' ? 'active' : '' ?>">Tentang</a>

                        <?php if (logged_in()) : ?>

                            <img class="navbar-brand rounded-circle img-profile mt-2" width="50" height="50" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>">
                            <div class="dropdown">
                                <a class=" nav-link font-weight-bold text-capitalize dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hi, <?= user()->username; ?>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <?php if (in_groups('admin')) : ?>
                                        <a class="dropdown-item" href="<?= base_url('dashboard'); ?>">Dashboard</a>
                                    <?php endif; ?>
                                    <?php if (in_groups('resepsionis')) : ?>
                                        <a class="dropdown-item" href="<?= base_url('dashboardRP'); ?>">Dashboard</a>
                                    <?php endif; ?>
                                    <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
                                </div>
                            </div>
                        <?php else : ?>
                            <a href="<?= base_url('register'); ?>" class="nav-item nav-link text-capitalize">Registrasi</a>
                            <a href="<?= base_url('login'); ?>" class="btn btn-outline-primary rounded-0 py-4 px-md-5 d-lg-block text-capitalize">Masuk<i class="fa fa-arrow-right ms-3"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>