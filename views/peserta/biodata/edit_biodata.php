<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Edit Profil</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="biodata/pros_edit_biodata.php"> 
                            <?php
                                $nik = $_SESSION["username"];
                                $sql = "
                                    SELECT tb_angkatan.id, tb_angkatan.nama_diklat, tb_detail_peserta.id, tb_detail_peserta.nomor_absen, 
                                    tb_detail_peserta.nik, tb_detail_peserta.nama, tb_detail_peserta.jekel, tb_detail_peserta.tempat_lahir, 
                                    tb_detail_peserta.tgl_lahir, tb_detail_peserta.cabang_asal, tb_detail_peserta.alamat_kantor,
                                    tb_detail_peserta.tlp_kantor, tb_detail_peserta.nomor_hp, tb_detail_peserta.alamat_rumah, tb_detail_peserta.agama, 
                                    tb_detail_peserta.foto, tb_kamar.id, tb_kamar.nomor_kamar, tb_kamar.nama_asrama
                                    FROM tb_detail_peserta
                                    JOIN tb_angkatan ON tb_detail_peserta.angkatan_id = tb_angkatan.id
                                    JOIN tb_kamar ON tb_detail_peserta.kamar_id = tb_kamar.id
                                    WHERE tb_detail_peserta.nik = '$nik'
                                ";
                                $proses = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($proses);
                            ?>
                            <div class="form-grup">
                                <label for="pesertadiklat">Nama Diklat :</label>
                                <input type="text" class="form-control" id="pesertadiklat" placeholder="Peserta Diklat" value="<?php echo $data["nama_diklat"] ?>" readonly>
                            </div><br>
                            <div class="form-grup">
                                <label for="noabsen">Nomor Absen :</label>
                                <input type="text" class="form-control" id="noabsen" placeholder="No Absen" value="<?php echo $data["nomor_absen"] ?>" readonly>
                            </div><br>
                            <div class="form-grup">
                                <label for="nik">NIK :</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?php echo $data["nik"] ?>" readonly>
                            </div><br>
                            <div class="form-grup">
                                <label for="nama">Nama Lengkap :</label>
                                <input type="text" class="form-control" id="nik" name="nama" placeholder="Nama Lengkap" value="<?php echo $data["nama"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="jeniskelamin">Jenis Kelamin :</label>
                                <select name="jekel" id="jekel" class="form-control">
                                    <option value="<?php echo $data["jekel"] ?>"><?php echo strtoupper($data["jekel"]) ?></option>
                                    <option value="laki-laki">LAKI-LAKI</option>
                                    <option value="perempuan">PEREMPUAN</option>
                                </select>
                            </div><br>
                            <div class="form-grup">
                                <label for="tempatlahir">Tempat Lahir :</label>
                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $data["tempat_lahir"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="tgllahir">Tanggal Lahir :</label>
                                <input type="text" class="form-control datepicker" id="tgllahir" name="tgllahir" placeholder="Tanggal Lahir" data-date-format="yyyy-mm-dd" value="<?php echo $data["tgl_lahir"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="agama">Agama :</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="<?php echo $data["agama"] ?>"><?php echo ucfirst($data["agama"]) ?></option>
                                    <option value="islam">Islam</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="protestan">Protestan</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                </select>
                            </div><br>
                            <div class="form-grup">
                                <label for="alamatrumah">Alamat Rumah :</label>
                                <input type="text" class="form-control" id="alamatrumah" name="alamatrumah" placeholder="Alamat Rumah" value="<?php echo $data["alamat_rumah"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="notelpkantor">Nomor Telepon :</label>
                                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Nomor Telepon" value="<?php echo $data["nomor_hp"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="cabangasal">Kantor Cabang Asal :</label>
                                <input type="text" class="form-control" id="cabangasal" name="cabangasal" placeholder="Cabang Asal" value="<?php echo $data["cabang_asal"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="alamatkantor">Alamat Kantor Cabang :</label>
                                <input type="text" class="form-control" id="alamatkantor" name="alamatkantor" placeholder="Alamat Kantor" value="<?php echo $data["alamat_kantor"] ?>">
                            </div><br>
                            <div class="form-grup">
                                <label for="notelpkantor">Nomor Telepon Kantor Cabang :</label>
                                <input type="text" class="form-control" id="notelpkantor" name="notelpkantor" placeholder="No Telepon Kantor" value="<?php echo $data["tlp_kantor"] ?>">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
