<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Data Nilai Peserta Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <?php 

                        $angkatan_id = $_GET["id"];

                        $angkatan_sql = "SELECT * FROM tb_angkatan WHERE id = '$angkatan_id'";
                        $angkatan_proses = mysqli_query($conn, $angkatan_sql);
                        $angkatan_data = mysqli_fetch_assoc($angkatan_proses);

                    ?>
                    <div class="text-center">
                        <h3><?php echo $angkatan_data["nama_diklat"] ?></h3>
                        <h5>Periode : <?php echo date('d M Y', strtotime($angkatan_data["tgl_masuk"])) . " s/d " . date('d M Y', strtotime($angkatan_data["tgl_selesai"])) ?></h5>
                        <hr>
                    </div>
                    <table class="table table-bordered table-hover tb-nilai display responsive nowrap">
                        <?php 
                            $angkatan_id = $_GET["id"];
                            $data_mapel_sql = "
                                SELECT DISTINCT tb_mata_pelajaran.id, tb_mata_pelajaran.nama_pelajaran,tb_mata_pelajaran.slug
                                FROM tb_jadwal_diklat
                                JOIN tb_mata_pelajaran ON tb_jadwal_diklat.mata_pelajaran_id = tb_mata_pelajaran.id
                                WHERE tb_jadwal_diklat.angkatan_id = '$angkatan_id'
                            ";
                            $data_mapel_proses = mysqli_query($conn, $data_mapel_sql);

                        ?>
                        <thead>
                            <tr class="success">
                                <th class="text-center">No</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">NAMA</th>
                                <?php 
                                    while ($data_mapel = mysqli_fetch_assoc($data_mapel_proses)) {
                                        echo "<th class='text-center'>".$data_mapel["slug"]."</th>";
                                    }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                $peserta_sql = "SELECT * FROM tb_detail_peserta WHERE angkatan_id = '$angkatan_id'";
                                $peserta_proses = mysqli_query($conn, $peserta_sql);
                                while ($peserta_data = mysqli_fetch_assoc($peserta_proses)) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no ?></td>
                                <td class="text-center"><?php echo $peserta_data["nik"] ?></td>
                                <td><?php echo $peserta_data["nama"] ?></td>
                                <?php 
                                    $angkatan_id = $_GET["id"];
                                    $data_mapel_sql2 = "
                                        SELECT DISTINCT tb_mata_pelajaran.id AS mapel_id, tb_mata_pelajaran.nama_pelajaran
                                        FROM tb_jadwal_diklat
                                        JOIN tb_mata_pelajaran ON tb_jadwal_diklat.mata_pelajaran_id = tb_mata_pelajaran.id
                                        WHERE tb_jadwal_diklat.angkatan_id = '$angkatan_id'
                                    ";
                                    $data_mapel_proses2 = mysqli_query($conn, $data_mapel_sql2);
                                    while ($data_mapel2 = mysqli_fetch_assoc($data_mapel_proses2)) {
                                        $peserta_id = $peserta_data["id"];
                                        $mapel_id = $data_mapel2["mapel_id"];
                                        $nilai_sql = "
                                            SELECT nilai FROM tb_nilai WHERE angkatan_id = '$angkatan_id'
                                            AND mata_pelajaran_id = '$mapel_id'
                                            AND detail_peserta_id = '$peserta_id'
                                        ";
                                        $nilai_proses = mysqli_query($conn, $nilai_sql);
                                        $nilai_data = mysqli_fetch_assoc($nilai_proses);
                                    ?>
                                        
                                        <td class="text-center"><?php echo $nilai_data["nilai"] ?></td>

                                    <?php
                                    }
                                ?>                                                                
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