<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/hotel1.jpg" alt="Image" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">
                            Sumbawa
                        </h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">
                            Temukan Hotel Mewah
                        </h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/hotel2.jpg" alt="Image" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">
                            Hidup Mewah
                        </h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">
                            Temukan Hotel Mewah
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">
                    Tentang Kami
                </h6>
                <h1 class="mb-4">
                    Selamat datang di
                    <span class="text-primary text-uppercase">Hotel Hebat</span>
                </h1>
                <p class="mb-4">
                    Hotel Hebat merupakan sebuah aplikasi Sistem Reservasi Hotel
                    Berbasis Website yang sudah digunakan oleh beribu pelanggan
                </p>
                <div class="row g-3 pb-4">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Kamar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Karyawan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                <p class="mb-0">Pengguna</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Jelajahi Lebih Banyak</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%" />
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" />
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg" />
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Room Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">
                Kamar Kami
            </h6>
            <h1 class="mb-5">
                Jelajahi
                <span class="text-primary text-uppercase">Kamar</span>
                Kami
            </h1>
        </div>
        <div class="row g-4">
            <?php $i = 1 + (3 * ($currentPage - 1)); ?>
            <?php foreach ($kamar as $c) : ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?= base_url(); ?>/img/room-1.jpg" alt="" />
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">Rp.<?= number_format($c['harga']) ?>/Malam</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0"><?= $c['jenis_kamar']; ?></h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa   fa-bath text-primary me-2"></i>2 Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">
                                ><?= $c['slug']; ?>
                            </p>
                            <div class="d-flex justify-content-end">
                                <!-- <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""
                        >View Detail</a
                    > -->
                                <a class="btn btn-primary rounded py-2 px-4 text-capitalize text-light" href="<?= logged_in('user') ? base_url('booking/' . $c['slug']) : base_url('login'); ?>">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?= $pager->links('kamar', 'kamar_pagination') ?>
        </div>
    </div>
</div>
<!-- Room End -->

<!-- Video Start -->
<div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5">
                <h6 class="section-title text-start text-white text-uppercase mb-3">
                    Hidup Mewah
                </h6>
                <h1 class="text-white mb-4">Temukan Hotel Mewah</h1>
                <p class="text-white mb-4">
                    Kenyamanan pelanggan adalah prioritas kami,<br>
                    Ayo Booking Hotel Sekarang !!
                </p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Kamar Kami</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Pesan Kamar</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/ADHHbFx0dhk?start=17" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Start -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">
                Layanan Kami
            </h6>
            <h1 class="mb-5">
                Jelajahi
                <span class="text-primary text-uppercase">Layanan</span>
                Kami
            </h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-hotel fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Kamar & Apartemen</h5>
                    <p class="text-body mb-0">
                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                        lorem sed diam stet diam sed stet lorem.
                    </p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <a class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Makanan & Restoran</h5>
                    <p class="text-body mb-0">
                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                        lorem sed diam stet diam sed stet lorem.
                    </p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-spa fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Spa & Kebugaran</h5>
                    <p class="text-body mb-0">
                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                        lorem sed diam stet diam sed stet lorem.
                    </p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <a class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-swimmer fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Olahraga & Permainan</h5>
                    <p class="text-body mb-0">
                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                        lorem sed diam stet diam sed stet lorem.
                    </p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Acara & Pesta</h5>
                    <p class="text-body mb-0">
                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                        lorem sed diam stet diam sed stet lorem.
                    </p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <a class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                            <i class="fa fa-dumbbell fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">GYM & Yoga</h5>
                    <p class="text-body mb-0">
                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                        lorem sed diam stet diam sed stet lorem.
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Testimonial Start -->
<div class="container-xxl testimonial py-5 wow zoomIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">
                Testimonial
            </h6>
        </div>
        <div class="owl-carousel testimonial-carousel py-5">
            <div class="testimonial-item position-relative bg-gradient rounded overflow-hidden">
                <p>
                    Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                    ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                    est kasd kasd et erat magna eos
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url(); ?>/img/testimonial-1.jpg" style="width: 45px; height: 45px" />
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-gradient rounded overflow-hidden">
                <p>
                    Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                    ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                    est kasd kasd et erat magna eos
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 45px; height: 45px" />
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-gradient rounded overflow-hidden">
                <p>
                    Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                    ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                    est kasd kasd et erat magna eos
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 45px; height: 45px" />
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<?= $this->endSection(); ?>