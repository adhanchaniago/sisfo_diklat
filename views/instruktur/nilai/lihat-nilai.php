<div class="row">
    <div class="col-md-10">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Data Nilai</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <?php 
                        $angkatan_id = $_POST["angkatan_id"];
                        $instruktur_id = $_SESSION["id"];

                        $data_diklat_sql = "
                            SELECT tb_angkatan.id AS angkatan_id, tb_angkatan.nama_diklat, tb_mata_pelajaran.id AS mata_pelajaran_id, tb_mata_pelajaran.nama_pelajaran
                            FROM tb_jadwal_diklat
                            JOIN tb_angkatan ON tb_jadwal_diklat.angkatan_id = tb_angkatan.id
                            JOIN tb_mata_pelajaran ON tb_jadwal_diklat.mata_pelajaran_id = tb_mata_pelajaran.id
                            WHERE tb_jadwal_diklat.detail_instruktur_id = '$instruktur_id'
                            AND tb_angkatan.id = '$angkatan_id'
                        ";
                        $data_diklat_proses = mysqli_query($conn, $data_diklat_sql);
                        $data_diklat = mysqli_fetch_assoc($data_diklat_proses);

                        $mata_pelajaran_id = $data_diklat["mata_pelajaran_id"];
                    ?>
                    <div class="text-center">
                        <p><h3><?php echo $data_diklat["nama_diklat"] ?></h3></p>
                        <p><h3><?php echo $data_diklat["nama_pelajaran"] ?></h3></p>
                    </div><hr>
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIK</th>
                                <th>NAMA PESERTA</th>
                                <th>CABANG ASAL</th>
                                <th>TMP/ TGL LAHIR</th>
                                <th>NILAI</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $data_nilai_sql = "
                                    SELECT tb_detail_peserta.nik, tb_detail_peserta.nama, tb_nilai.nilai, tb_detail_peserta.tempat_lahir, tb_detail_peserta.tgl_lahir, tb_detail_peserta.cabang_asal
                                    FROM tb_nilai
                                    JOIN tb_angkatan ON tb_nilai.angkatan_id = tb_angkatan.id
                                    JOIN tb_mata_pelajaran ON tb_nilai.mata_pelajaran_id = tb_mata_pelajaran.id
                                    JOIN tb_detail_instruktur ON tb_nilai.detail_instruktur_id = tb_detail_instruktur.id
                                    JOIN tb_detail_peserta ON tb_nilai.detail_peserta_id = tb_detail_peserta.id
                                    WHERE tb_nilai.angkatan_id = '$angkatan_id'
                                    AND tb_nilai.mata_pelajaran_id = '$mata_pelajaran_id'
                                    AND tb_nilai.detail_instruktur_id = '$instruktur_id'
                                ";
                                $data_nilai_proses = mysqli_query($conn, $data_nilai_sql);

                                $no = 1;
                                while ($data_nilai = mysqli_fetch_assoc($data_nilai_proses)) {
                                    
                            ?>
                                
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data_nilai["nik"] ?></td>
                                    <td><?php echo $data_nilai["nama"] ?></td>
                                    <td><?php echo $data_nilai["cabang_asal"] ?></td>
                                    <td><?php echo $data_nilai["tempat_lahir"]." / ".$data_nilai["tgl_lahir"] ?></td>
                                    <td><?php echo $data_nilai["nilai"] ?></td>
                                </tr>

                            <?php

                                    $no++;
                                }

                            ?>

                        </tbody>
                    </table>
                    <p>
                        Nilai Patokan = 70
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>