<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Form Input Data Jadwal Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="jadwal_diklat/proses-input-jadwal.php" method="POST">
                            <div class="form-group">
                                <label for="angkatan_id">Angkatan Diklat</label>
                                <select name="angkatan_id" id="angkatan_id" class="form-control">
                                    <option value="">Pilih Angkatan Diklat</option>
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
                                <label for="mata_pelajaran_id">Mata Pelajaran</label>
                                <select name="mata_pelajaran_id" id="mata_pelajaran_id" class="form-control">
                                    <option value="">Pilih Mata Pelajaran</option>
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
                                <label for="detail_instruktur_id">Instruktur</label>
                                <select name="detail_instruktur_id" id="detail_instruktur_id" class="form-control">
                                    <option value="">Pilih Intruktur</option>
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
                                <label for="hari">Hari</label>
                                <select name="hari" id="hari" class="form-control">
                                    <option value="">Pilih Hari</option>
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
                                <label for="tgl">Tanggal</label>
                                <input type="text" class="form-control datepicker" name="tgl" placeholder="Tanggal" data-date-format="yyyy-mm-dd">
                            </div>
                            <div class="form-group">
                                <label for="waktu_selesai">Waktu Mulai</label>
                                <input type="text" class="form-control" name="waktu_mulai" placeholder="Waktu Mulai">
                            </div>
                            <div class="form-group">
                                <label for="waktu_selesai">Waktu Selesai</label>
                                <input type="text" class="form-control" name="waktu_selesai" placeholder="Waktu Selesai">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>