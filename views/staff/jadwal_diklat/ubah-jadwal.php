<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Ubah Jadwal Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="jadwal_diklat/proses-ubah-jadwal.php" method="POST">
                            <?php 

                                $get_id = $_GET["id"];

                                $jadwal_sql = "
                                    SELECT tb_angkatan.id AS angkatan_id, tb_angkatan.nama_diklat, tb_mata_pelajaran.id AS mapel_id, tb_mata_pelajaran.nama_pelajaran, tb_detail_instruktur.id AS instruktur_id, tb_detail_instruktur.nama, tb_jadwal_diklat.id, tb_jadwal_diklat.hari, tb_jadwal_diklat.tgl, tb_jadwal_diklat.waktu_mulai, tb_jadwal_diklat.waktu_selesai
                                    FROM tb_jadwal_diklat
                                    JOIN tb_angkatan ON tb_jadwal_diklat.angkatan_id = tb_angkatan.id
                                    JOIN tb_mata_pelajaran ON tb_jadwal_diklat.mata_pelajaran_id = tb_mata_pelajaran.id
                                    JOIN tb_detail_instruktur ON tb_jadwal_diklat.detail_instruktur_id = tb_detail_instruktur.id
                                    WHERE tb_jadwal_diklat.id = '$get_id'
                                ";
                                $jadwal_proses = mysqli_query($conn, $jadwal_sql);
                                $jadwal_data = mysqli_fetch_assoc($jadwal_proses);

                            ?>
                            <input type="hidden" name="id" value="<?php echo $jadwal_data["id"] ?>">
                            <div class="form-group">
                                <label for="angkatan_id">Angkatan Diklat :</label>
                                <select name="angkatan_id" id="angkatan_id" class="form-control">
                                    <option value="<?php echo $jadwal_data["angkatan_id"] ?>"><?php echo $jadwal_data["nama_diklat"] ?></option>
                                    <?php
                                        $angkatan_sql = "SELECT * FROM tb_angkatan";
                                        $angkatan_proses = mysqli_query($conn, $angkatan_sql);
                                        while ($angkatan_data = mysqli_fetch_assoc($angkatan_proses)) {
                                    ?>
                                        <option value="<?php echo $angkatan_data["id"] ?>"><?php echo $angkatan_data["nama_diklat"] ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mata_pelajaran_id">Mata Pelajaran :</label>
                                <select name="mata_pelajaran_id" id="mata_pelajaran_id" class="form-control">
                                    <option value="<?php echo $jadwal_data["mapel_id"] ?>"><?php echo $jadwal_data["nama_pelajaran"] ?></option>
                                    <?php
                                        $mapel_sql = "SELECT * FROM tb_mata_pelajaran";
                                        $mapel_proses = mysqli_query($conn, $mapel_sql);
                                        while ($mapel_data = mysqli_fetch_assoc($mapel_proses)) {
                                    ?>
                                        <option value="<?php echo $mapel_data["id"] ?>"><?php echo $mapel_data["nama_pelajaran"] ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="detail_instruktur_id">Instruktur :</label>
                                <select name="detail_instruktur_id" id="detail_instruktur_id" class="form-control">
                                    <option value="<?php echo $jadwal_data["instruktur_id"] ?>"><?php echo $jadwal_data["nama"] ?></option>
                                    <?php
                                        $instruktur_sql = "SELECT * FROM tb_detail_instruktur";
                                        $instruktur_proses = mysqli_query($conn, $instruktur_sql);
                                        while ($instruktur_data = mysqli_fetch_assoc($instruktur_proses)) {
                                    ?>
                                        <option value="<?php echo $instruktur_data["id"] ?>"><?php echo $instruktur_data["nama"] ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hari">Hari :</label>
                                <select name="hari" id="hari" class="form-control">
                                    <option value="<?php echo $jadwal_data["hari"] ?>"><?php echo $jadwal_data["hari"] ?></option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tgl">Tanggal :</label>
                                <input type="text" class="form-control datepicker" name="tgl" placeholder="Tanggal" data-date-format="yyyy-mm-dd" value="<?php echo $jadwal_data["tgl"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="waktu_selesai">Waktu Mulai :</label>
                                <input type="text" class="form-control" name="waktu_mulai" placeholder="Waktu Mulai" value="<?php echo $jadwal_data["waktu_mulai"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="waktu_selesai">Waktu Selesai :</label>
                                <input type="text" class="form-control" name="waktu_selesai" placeholder="Waktu Selesai" value="<?php echo $jadwal_data["waktu_selesai"] ?>">
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
                        <a href="?page=pilih-angkatan&show=jadwal" class="btn btn-default btn-block">Data Jadwal Diklat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>