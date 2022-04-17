<?= $this->extend('templates/admin/index'); ?>

<?= $this->section('content'); ?>   
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">User Detail</h1>

        <div class="row">
            <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="<?= base_url('/img/' . $user->user_image); ?>" class="img-fluid rounded-start mt-3 mx-3" alt="<?= $user->username; ?>">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user->username; ?></h5>
                            <p class="card-text"><?= $user->email; ?></p>
                            <p class="card-text">
                                <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning' ?>"><?= $user->name; ?></span></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <form action="" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                            </form>
                            <br><br>
                            <small><a href="/admin">&laquo; kembali ke user list</a></small>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?> 