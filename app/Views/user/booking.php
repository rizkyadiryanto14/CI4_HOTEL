<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container pt-lg-4 mt-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase mb-5">
            Pemesanan Kamar
            </h6>
            
        </div>
        <div class="row g-5">
            <small><a href="/">&laquo; kembali ke Home</a></small>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                    <img
                        class="img-fluid rounded w-75 wow zoomIn"
                        data-wow-delay="0.1s"
                        src="<?= base_url(); ?>/img/about-1.jpg"
                        style="margin-top: 25%"
                    />
                    </div>
                    <div class="col-6 text-start">
                    <img
                        class="img-fluid rounded w-100 wow zoomIn"
                        data-wow-delay="0.3s"
                        src="<?= base_url(); ?>/img/about-2.jpg"
                    />
                    </div>
                    <div class="col-6 text-end">
                    <img
                        class="img-fluid rounded w-50 wow zoomIn"
                        data-wow-delay="0.5s"
                        src="<?= base_url(); ?>/img/about-3.jpg"
                    />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <!-- <ssmall><a href="/">&laquo; kembali ke Home</a></ssmall> -->
                    <form action="/booking/save" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="jenis_kamar" name="jenis_kamar" value="<?= $kamar['jenis_kamar'] ?>" disabled />
                                    <label for="jenis_kamar">Tipe Kamar</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="harga" name="harga" value="Rp.<?= number_format($kamar['harga']) ?>" disabled />
                                    <label for="harga">Harga per malam</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating text-success">
                                    <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk" data-provide="datepicker" onblur="diff();" onkeydown="return false" autofocus/>
                                    <label for="tgl_masuk">Check In</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date text-success">
                                    <input type="text" class="form-control" id="tgl_keluar" name="tgl_keluar" data-provide="datepicker" onblur="diff();" onkeydown="return false" autofocus/>
                                    <label for="tgl_keluar">Check Out</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="durasi" name="durasi" onkeydown="return false"/>
                                    <label for="durasi">Lama Menginap</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="total_harga" name="total_harga" onkeydown="return false"/>
                                    <label for="total_harga">Total Harga</label>
                                </div>
                            </div>
                            <!-- <input type="text" id="txt1"  onkeyup="sum();"/>
                            <input type="text" id="txt2"  onkeyup="sum();"/> -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary text-capitalize text-light w-100">Bayar</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Service End -->
    <script>
        function diff(){
            const oneDay = 24 * 60 * 60 * 1000;
            let date1 = document.getElementById('tgl_masuk').value;
            let date2 = document.getElementById('tgl_keluar').value;
            let firstDateParts = date1.split('/');
            let secondDateParts = date2.split('/');

            let firstDate = new Date(firstDateParts[2], (firstDateParts[0] - 0), firstDateParts[1]);
            let secondDate = new Date(secondDateParts[2], (secondDateParts[0] - 0), secondDateParts[1]);
        
            // // hitung perbedaan waktu dari dua tanggal
            const diffDays = Math.round(Math.abs((firstDate - secondDate) / oneDay));
            if (!isNaN(diffDays)) {
                document.getElementById('durasi').value = `${diffDays} hari`;
            }

            let harga = document.getElementById('harga').value;
            const numHarga = harga.replace(/[Rp.,\/#!$%\^&\*;:{}=\-_`~()]/g,"");
            const result = parseInt(numHarga) * parseInt(diffDays);
            // proses format number koma
            // const result = new Intl.NumberFormat().format(count);
            if (!isNaN(result)) {
                document.getElementById('total_harga').value = `Rp.${new Intl.NumberFormat().format(result)}`;
            }
        }
    </script>
<?= $this->endSection(); ?>
