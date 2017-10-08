<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Ubah Data Asisten Manajer</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 

                            $id = $_GET["id"];

                            $asmen_sql = "SELECT * FROM tb_detail_asmen WHERE id = '$id'";
                            $asmen_proses = mysqli_query($conn, $asmen_sql);
                            $asmen_data = mysqli_fetch_assoc($asmen_proses);

                        ?> 
                        <form method="POST" action="input_asmen/proses_ubah_asmen.php">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <div class="form-grup">
                                <label for="nik">NIK :</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" readonly value="<?php echo $asmen_data["nik"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="nama">Nama Lengkap :</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo $asmen_data["nama"] ?>">
                            </div><br>
                            <div class="form-group">
                                <label for="jekel">Jenis Kelamin :</label>
                                <select class="form-control" name="jekel">
                                    <option value="<?php echo $asmen_data["jekel"] ?>"><?php echo $asmen_data["jekel"] ?></option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-grup">
                                <label for="tempatlahir">Tempat Lahir :</label>
                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $asmen_data["tempat_lahir"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="tanggallahir">Tanggal Lahir :</label>
                                <input type="text" class="form-control tgllahir" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir" data-date-format="yyyy-mm-dd" value="<?php echo $asmen_data["tgl_lahir"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $asmen_data["alamat"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="nohp">Nomor HP :</label>
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP" value="<?php echo $asmen_data["nomor_hp"] ?>">
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Ubah</button>&nbsp;
                                <button type="reset" class="btn btn-default">Reset</button>
                                <a href="?page=lihat-asmen" class="pull-right"><button type="button" class="btn btn-danger">Batal</button></a>
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
                        <a href="?page=lihat-asmen" class="btn btn-default btn-block">Data Asisten Manajer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>