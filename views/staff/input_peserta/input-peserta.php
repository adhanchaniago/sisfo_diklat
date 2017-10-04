<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Form Input Data Peserta</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="proses_input/proses_input_peserta.php">
                            <div class="form-group">
                                <label for="angkatan_id">Angkatan Diklat :</label>
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
                                <label for="nomor_absen">Nomor Absen :</label>
                                <input type="text" name="nomor_absen" class="form-control" placeholder="Nomor Absen">
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
<!--     <div class="col-md-2">
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
    </div> -->
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-info-circle"></i>&nbsp;Data Peserta</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kamar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $sql_peserta = "
                                        SELECT tb_angkatan.nama_diklat, tb_detail_peserta.id, tb_detail_peserta.nomor_absen, 
                                        tb_detail_peserta.nik, tb_detail_peserta.nama, tb_detail_peserta.cabang_asal, 
                                        tb_detail_peserta.tempat_lahir, tb_detail_peserta.tgl_lahir,
                                        tb_kamar.nama_asrama, tb_kamar.nomor_kamar
                                        FROM tb_detail_peserta
                                        JOIN tb_angkatan ON tb_detail_peserta.angkatan_id = tb_angkatan.id
                                        JOIN tb_kamar ON tb_detail_peserta.kamar_id = tb_kamar.id
                                    ";
                                    $proses_peserta = mysqli_query($conn, $sql_peserta);

                                    $no = 1;
                                    while ($data_peserta = mysqli_fetch_assoc($proses_peserta))
                                    {

                                ?>        
                                    
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data_peserta["nama"] ?></td>
                                        <td><?php echo $data_peserta["nama_asrama"].', Nomor '.$data_peserta["nomor_kamar"] ?></td>
                                    </tr>

                                <?php
                                        $no++;
                                    }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>