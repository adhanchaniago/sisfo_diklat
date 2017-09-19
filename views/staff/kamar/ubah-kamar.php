<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Ubah Data Kamar</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 

                            $id = $_GET["id"];

                            $kamar_sql = "SELECT * FROM tb_kamar WHERE id = '$id'";
                            $kamar_proses = mysqli_query($conn, $kamar_sql);
                            $kamar_data = mysqli_fetch_assoc($kamar_proses);

                        ?>
						<form method="POST" action="kamar/proses_ubah_kamar.php">
                            <input type="hidden" name="id" value="<?php echo $kamar_data["id"] ?>">
                            <div class="form-grup"></div>
                            <div class="form-grup">
                                <label for="namaasrama">Nama Asrama :</label>
                                <input type="namaasrama" class="form-control" id="namaasrama" name="namaasrama" placeholder="Nama Asrama" value="<?php echo $kamar_data["nama_asrama"] ?>">
                            </div><br>
                             <div class="form-grup">
                                <label for="nomorkamar">Nomor Kamar :</label>
                                <input type="nomorkamar" class="form-control" id="nomorkamar" name="nomorkamar" placeholder="Nomor Kamar" value="<?php echo $kamar_data["nomor_kamar"] ?>">
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Ubah</button>&nbsp;
                                <button type="reset" class="btn btn-default">Reset</button>&nbsp;
                                <a href="?page=lihat-kamar" class="pull-right"><button type="button" class="btn btn-danger">Batal</button></a>
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
                        <a href="?page=lihat-kamar" class="btn btn-default btn-block">Data Kamar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>