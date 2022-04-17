<?= $this->extend('templates/admin/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800">Daftar Kamar</h1>
            <a href="/kamar/create" class="btn btn-primary mb-3">Tambah Data Kamar</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan'); ?></div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Jenis Kamar</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($kamar as $b) : ?>
                    <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $b['jenis_kamar']; ?></td>
                    <td><?= number_format($b['harga']) ?> /Malam</td>
                    <td>
                        <a href="<?= base_url('kamar/' . $b['slug']); ?>" class="btn btn-info">Detail</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>