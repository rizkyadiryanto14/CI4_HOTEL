<?= $this->extend('templates/admin/index'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="h3 mb-4 text-gray-800">Form Tambah Data</h2>
                <form action="/kamar/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="jenis_kamar" class="col-sm-2 col-form-label">Jenis Kamar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('jenis_kamar')) ? 'is-invalid' : ''; ?>" id="jenis_kamar" name="jenis_kamar" value="<?= old('jenis_kamar'); ?>" autofocus>
                            <div id="validationServer03Feedback" class="invalid-feedback"><?= $validation->getError('jenis_kamar'); ?></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>">
                        </div>
                    </div>
                    <!--  -->
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>