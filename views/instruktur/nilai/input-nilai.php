<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Input Nilai Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $angkatan_id = $_GET["id"];
                            $instruktur_id = $_SESSION["id"];
                            $data_diklat_sql = "
                                SELECT tb_angkatan.id AS angkatan_id, tb_angkatan.nama_diklat, tb_mata_pelajaran.id AS mata_pelajaran_id, tb_mata_pelajaran.nama_pelajaran, tb_jadwal_diklat.tgl, tb_jadwal_diklat.tgl,tb_jadwal_diklat.waktu_mulai, tb_jadwal_diklat.waktu_selesai
                                FROM tb_jadwal_diklat
                                JOIN tb_angkatan ON tb_jadwal_diklat.angkatan_id = tb_angkatan.id
                                JOIN tb_mata_pelajaran ON tb_jadwal_diklat.mata_pelajaran_id = tb_mata_pelajaran.id
                                WHERE tb_jadwal_diklat.detail_instruktur_id = '$instruktur_id'
                                AND tb_angkatan.id = '$angkatan_id'
                            ";
                            $data_diklat_proses = mysqli_query($conn, $data_diklat_sql);
                            $data_diklat = mysqli_fetch_assoc($data_diklat_proses);
                        ?>  
                        <div class="text-center">
                            <h4><?php echo $data_diklat["nama_diklat"] ?></h4>
                        </div>
                        <hr>
                        <p>
                            Mata Pelajaran : <?php echo $data_diklat["nama_pelajaran"] ?>
                        </p>
                        <form action="nilai/proses-input-nilai.php" method="POST">
                            <input type="hidden" name="angkatan_id" value="<?php echo $data_diklat["angkatan_id"] ?>">
                            <input type="hidden" name="detail_instruktur_id" value="<?php echo $instruktur_id ?>">
                            <input type="hidden" name="mata_pelajaran_id" value="<?php echo $data_diklat["mata_pelajaran_id"] ?>">
                            <div class="">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="success">
                                            <th class="text-center">No</th>
                                            <th class="text-center">NIK</th>
                                            <th class="text-center">Nama Peserta</th>
                                            <th class="text-center" width="12%">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $peserta_sql = "SELECT id, nik, nama FROM tb_detail_peserta WHERE angkatan_id = '$angkatan_id'";
                                            $peserta_proses = mysqli_query($conn, $peserta_sql);
                                            while ($peserta_data = mysqli_fetch_assoc($peserta_proses)) {
                                        ?>
                                            <tr>
                                                <input type="hidden" name="peserta_id[]" value="<?php echo $peserta_data["id"] ?>">
                                                <td class="text-center"><?php echo $no ?></td>
                                                <td class="text-center"><?php echo $peserta_data['nik'] ?></td>
                                                <td><?php echo $peserta_data['nama'] ?></td>
                                                <td><input type="text" name="nilai[]" style="width: 100%; text-align: center;"></td>
                                            </tr>
                                        <?php
                                                $no++;
                                            }
                                        ?>
                                    </tbody>
                                        
                                </table>
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan</button> &nbsp;
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>