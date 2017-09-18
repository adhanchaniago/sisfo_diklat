<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Ubah Data Mata Pelajaran</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 

                            $id = $_GET["id"];

                            $mapel_sql = "SELECT * FROM tb_mata_pelajaran WHERE id = '$id'";
                            $mapel_proses = mysqli_query($conn, $mapel_sql);
                            $mapel_data = mysqli_fetch_assoc($mapel_proses);

                        ?>
                        <form method="POST" action="mata_pelajaran/proses_ubah_mapel.php">
                            <input type="hidden" name="id" value="<?php echo $mapel_data["id"] ?>">
                            <div class="form-grup">
                                <label for="namapelajaran">Nama Pelajaran :</label>
                                <input type="namapelajaran" class="form-control" name="namapelajaran" placeholder="Nama Pelajaran" value="<?php echo $mapel_data["nama_pelajaran"] ?>">
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Ubah</button>&nbsp;
                                <button type="reset" class="btn btn-default">Reset</button>&nbsp;
                                <a href="?page=lihat-mapel" class="pull-right"><button type="button" class="btn btn-danger">Batal</button></a>
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
                        <a href="?page=lihat-mapel" class="btn btn-default btn-block">Data Mata Pelajaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>