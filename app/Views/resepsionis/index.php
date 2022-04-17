<?= $this->extend('templates/resepsionis/index'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">User List</h1>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="row">
        <div class="col-lg-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>