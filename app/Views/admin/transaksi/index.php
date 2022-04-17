<?= $this->extend('templates/admin/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800">Daftar Transaksi</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan'); ?></div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">Total Harga</th>
                    <!-- <th scope="col">Aksi</th> -->
                    </tr> 
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($transaksi as $d) : ?> 
                    <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td>User</td>
                    <td>standar</td>
                    <td><?= $d['tgl_masuk']; ?></td>
                    <td><?= $d['tgl_keluar']; ?></td>
                    <td><?= $d['total_harga']; ?></td>
                    <!-- <td>
                        <a href="" class="btn btn-info">Detail</a>
                    </td> -->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>