<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>  
<!--  -->
<div class="container-xxl py-5">
        <div class="container mt-5 pt-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">
                Transaksi
            </h6>
            <div class="mb-5">
                <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success justify-content-center text-center" role="alert"><?= session()->getFlashdata('pesan'); ?></div>
                <?php endif; ?>
            </div>
            </div>
            <div class="row g-4">
            <div class="col-lg-4 col-md-6">
            </div>
            <div class=" rounded col-lg-4 col-md-6">
                
                <div class="service-icon">
                    <div
                    class="w-100 h-100 rounded d-flex align-items-center justify-content-center"
                    >
                    <img src="<?= base_url(); ?>/img/berhasil.png" style="width: 500px; height: 300px">
                    <!-- <i class="fa fa-utensils fa-2x text-primary"></i> -->
                    </div>
                </div>
                <!-- <h5 class="mb-3"</h5> -->
                    <small><a  class="d-flex align-items-center justify-content-center" href="/">&laquo; kembali ke Home</a></small>
                
            </div>
            <div class="col-lg-4 col-md-6">
            </div>
            </div>
        </div>
    </div>
<!--  -->
<?= $this->endSection(); ?>