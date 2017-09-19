<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Ubah Data Angkatan Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 

                            $id = $_GET["id"];

                            $angkatan_sql = "SELECT * FROM tb_angkatan WHERE id = '$id'";
                            $angkatan_proses = mysqli_query($conn, $angkatan_sql);
                            $angkatan_data = mysqli_fetch_assoc($angkatan_proses);

                        ?> 
                        <form action="angkatan_diklat/proses_ubah_angkatan.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <div class="form-group">
                                <label for="nama_diklat">Nama Angkatan Diklat :</label>
                                <input type="text" class="form-control" name="nama_diklat" placeholder="Nama Angkatan Diklat" value="<?php echo $angkatan_data["nama_diklat"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="tgl_masuk">Tanggal Masuk :</label>
                                <input type="text" class="form-control datepicker" name="tgl_masuk" placeholder="Tanggal Masuk" data-date-format="yyyy-mm-dd" value="<?php echo $angkatan_data["tgl_masuk"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="tgl_selesai">Tanggal Keluar :</label>
                                <input type="text" class="form-control datepicker" name="tgl_selesai" placeholder="Tanggal Keluar" data-date-format="yyyy-mm-dd" value="<?php echo $angkatan_data["tgl_selesai"] ?>">
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Ubah</button>&nbsp;
                                <button type="reset" class="btn btn-default">Reset</button>&nbsp;
                                <a href="?page=lihat-angkatan" class="pull-right"><button type="button" class="btn btn-danger">Batal</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-info-circle"></i>&nbsp;Informasi</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Silahkan dilengkapi semua form input disamping dengan data yang valid.
                        </p>
                        <p>
                            Terima Kasih.
                        </p>
                        <hr>
                        <a href="?page=lihat-angkatan" class="btn btn-default btn-block">Data Angkatan Diklat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>