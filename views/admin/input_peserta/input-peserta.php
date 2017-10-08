<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Form Input Data Peserta</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $angkatan_id = $_GET["id"];
                        ?>
                        <form method="POST" action="proses_input/proses_input_peserta.php">
                            <input type="hidden" name="angkatan_id" value="<?php echo $angkatan_id ?>">
                            <div class="form-group">
                                <label for="angkatan">Angkatan Diklat :</label>
                                <?php 
                                    $angkatan_sql = "SELECT * FROM tb_angkatan WHERE id = '$angkatan_id'";
                                    $angkatan_proses = mysqli_query($conn, $angkatan_sql);
                                    $angkatan_data = mysqli_fetch_assoc($angkatan_proses);
                                ?>
                                <input type="text" name="" value="<?php echo $angkatan_data["nama_diklat"] ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nomor_absen">Nomor Absen :</label>
                                <?php 
                                    $absen_sql = "SELECT MAX(nomor_absen) AS noabsen FROM tb_detail_peserta WHERE angkatan_id = '$angkatan_id'";
                                    $absen_proses = mysqli_query($conn, $absen_sql);
                                    $absen_data = mysqli_fetch_assoc($absen_proses);
                                ?>
                                <input type="text" name="nomor_absen" class="form-control" placeholder="Nomor Absen" value="<?php echo $absen_data["noabsen"] + 1 ?>" readonly>
                            </div>
                            <div class="form-grup">
                                <label for="nik">NIK :</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                            </div><br>
                            <div class="form-grup">
                                <label for="nama">Nama Lengkap :</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                            </div><br>
                            <div class="form-group">
                                <label for="kamar_id">Kamar :</label>
                                <select name="kamar_id" id="kamar_id" class="form-control">
                                    <option value="">Pilih Kamar</option>
                                    <?php
                                        $kamar_sql = "SELECT * FROM tb_kamar";
                                        $kamar_proses = mysqli_query($conn, $kamar_sql);
                                        while ($kamar_data = mysqli_fetch_assoc($kamar_proses)) {
                                    ?>
                                        <option value="<?php echo $kamar_data["id"] ?>"><?php echo $kamar_data["nama_asrama"].', Kamar '.$kamar_data["nomor_kamar"] ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
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
                        <hr>
                        <a href="?page=pilih-angkatan&show=peserta" class="btn btn-default btn-block">Data Peserta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>