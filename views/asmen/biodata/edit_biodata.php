<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Edit Profil</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 

                            $nik = $_SESSION["username"];

                            $sql = "SELECT * FROM tb_detail_asmen WHERE nik = '$nik'";
                            $proses = mysqli_query($conn, $sql);

                            $data = mysqli_fetch_assoc($proses);

                        ?>
                        <form method="POST" action="biodata/proses-edit-biodata.php">
                            <div class="form-grup">
                                <label for="nik">NIK :</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?php echo $data["nik"] ?>" readonly>
                            </div><br>
                            <div class="form-grup">
                                <label for="nama">Nama Lengkap :</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $data["nama"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="tempatlahir">Tempat Lahir :</label>
                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $data["tempat_lahir"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="tanggallahir">Tanggal Lahir :</label>
                                <input type="text" class="form-control datepicker" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir" data-date-format="yyyy-mm-dd" value="<?php echo $data["tgl_lahir"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $data["alamat"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="nohp">Nomor HP :</label>
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Hp" value="<?php echo $data["nomor_hp"] ?>">
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan</button>&nbsp;
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>