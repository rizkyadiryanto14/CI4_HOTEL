<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>
<!-- Room Start -->
<div class="container-xxl py-5">
  <div class="container mt-5 pt-lg-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title text-center text-primary text-uppercase">
        Kamar Kami
      </h6>
      <h1 class="mb-5">
        Jelajahi <span class="text-primary text-uppercase">Kamar</span> Kami
      </h1>
    </div>
    <div class="row g-4">
      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan keyword pencarian..." name="keyword">
          <button class="btn btn-primary text-light" type="submit" name="submit">Cari</button>
        </div>
      </form>
      <?php foreach ($kamar as $c) : ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="room-item shadow rounded overflow-hidden">
            <div class="position-relative">
              <img class="img-fluid" src="<?= base_url(); ?>/img/room-1.jpg" alt="" />
              <small class="position-absolute start-0 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4"><?= $c['harga']; ?>K/Malam</small>
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
                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
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
                <!--  -->
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- Room End -->

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
          <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url(); ?>/img/testimonial-2.jpg" style="width: 45px; height: 45px" />
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
          <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url(); ?>/img/testimonial-3.jpg" style="width: 45px; height: 45px" />
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