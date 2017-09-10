<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4>Form Input Data Peserta</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="proses_input/proses_input_peserta.php">
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
                                <label for="nomor_absen">Nomor Absen</label>
                                <input type="text" name="nomor_absen" class="form-control" placeholder="Nomor Absen">
                            </div>
                            <div class="form-grup">
                                <label for="nik">Nik</label>
                                <input type="nik" class="form-control" id="nik" name="nik" placeholder="Nik">
                            </div><br>
                            <div class="form-grup">
                                <label for="nama">Nama</label>
                                <input type="nama" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div><br>
                            <div class="form-group">
                                <label for="kamar_id">Kamar</label>
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
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>