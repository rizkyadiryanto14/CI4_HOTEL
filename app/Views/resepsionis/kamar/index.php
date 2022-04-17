<?= $this->extend('templates/resepsionis/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800">Daftar Kamar</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Jenis Kamar</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kamar as $b) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $b['jenis_kamar']; ?></td>
                            <td><?= number_format($b['harga']) ?> /Malam</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>