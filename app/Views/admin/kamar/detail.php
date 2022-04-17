<?= $this->extend('templates/admin/index'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h1 class="h3 mb-4 text-gray-800">Detail Kamar</h1>
                <div class="card mb-3">
                    <div class="col-lg-12 ">
                        <div class="col-lg-12 float-right pb-3">
                        <!-- gambar -->
                            <img
                                class="py-4 rounded-3 img-fluid w-25 "
                                src="<?= base_url(); ?>/img/about-3.jpg"
                                
                            />
                            <img
                                class="py-4 rounded-3 img-fluid w-25 "
                                src="<?= base_url(); ?>/img/about-2.jpg"
                                
                            />
                            <img
                                class="py-4 rounded-3 img-fluid w-25 "
                                src="<?= base_url(); ?>/img/about-1.jpg"
                                
                            />
                            <h5 class="card-title"><?= $kamar['jenis_kamar']; ?></h5>
                                <p class="card-text"><b>Harga : </b> Rp.<?= number_format($kamar['harga']) ?>/Malam</p>
                                <a href="/kamar/edit/<?= $kamar['slug']; ?>" class="btn btn-warning">Edit</a>
                                <form action="/kamar/<?= $kamar['id']; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                </form>
                                <br><br>
                                <small><a href="/kamar">&laquo; kembali ke daftar kamar</a></small>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="card-body">
                                <h5 class="card-title"><?= $kamar['jenis_kamar']; ?></h5>
                                <p class="card-text"><b>Harga :</b> <?= $kamar['harga']; ?></p>
                                <a href="/kamar/edit/<?= $kamar['slug']; ?>" class="btn btn-warning">Edit</a>
                                <form action="/kamar/<?= $kamar['id']; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                </form>
                                <br><br>
                                <small><a href="/kamar">&laquo; kembali ke daftar kamar</a></small>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>