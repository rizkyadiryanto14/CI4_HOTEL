<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="<?= base_url(); ?>/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="<?= base_url(); ?>/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet" />

    <!-- datepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet"/>

    <!-- datepicker -->
  </head>

<body>

    <!-- Page -->
    <div class="container-xxl bg-white p-0">

        <!-- Spinner -->
        <?= $this->include('templates/user/spinner'); ?>
        <!-- End of Spinner -->

        <!-- Topbar -->
        <?= $this->include('templates/user/topbar'); ?>
        <!-- End of Topbar -->

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <?= $this->renderSection('content'); ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        <!-- Footer -->
        <?= $this->include('templates/user/footer'); ?>
        <!-- End of Footer -->

        <!-- Back to Top -->
        <?= $this->include('templates/user/back_to_top'); ?>
        <!-- End Back to Top -->

    </div>
    <!-- End of Page -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="<?= base_url(); ?>/lib/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>/lib/easing/easing.min.js"></script>
    <script src="<?= base_url(); ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url(); ?>/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url(); ?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url(); ?>/js/main.js"></script>

</body>

</html>