<div class="row">
    <div class="col-md-9">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Data Jadwal Diklat</strong></h5>
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
                        <h4><?php echo $angkatan_data["tgl_masuk"] . " s/d " . $angkatan_data["tgl_selesai"] ?></h4>
                        <hr>
                    </div>
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Hari / Tanggal</th>
                                <th>Waktu</th>
                                <th>Mata Pelajaran</th>
                                <th>Nama Instruktur</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $no = 1;
                                $sql = "
                                    SELECT tb_angkatan.nama_diklat, tb_mata_pelajaran.nama_pelajaran, tb_detail_instruktur.nama, 
                                    tb_jadwal_diklat.id, tb_jadwal_diklat.hari, tb_jadwal_diklat.tgl, tb_jadwal_diklat.waktu_mulai, 
                                    tb_jadwal_diklat.waktu_selesai
                                    FROM tb_jadwal_diklat
                                    JOIN tb_angkatan ON tb_jadwal_diklat.angkatan_id = tb_angkatan.id
                                    JOIN tb_mata_pelajaran ON tb_jadwal_diklat.mata_pelajaran_id = tb_mata_pelajaran.id
                                    JOIN tb_detail_instruktur ON tb_jadwal_diklat.detail_instruktur_id = tb_detail_instruktur.id
                                    WHERE tb_angkatan.id = '$angkatan_id'
                                ";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data["hari"]." / ".$data["tgl"] ?></td>
                                    <td><?php echo $data["waktu_mulai"].' s/d '.$data["waktu_selesai"] ?> WIB</td>
                                    <td><?php echo $data["nama_pelajaran"] ?></td>
                                    <td><?php echo $data["nama"] ?></td>
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
    <div class="col-md-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-info-circle"></i>&nbsp;Informasi</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <strong>Istirahat : 10.00 s/d 10.30 WIB</strong>
                        </p>
                        <p>
                            <strong>Isoma : 12.00 s/d 13.30 WIB</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>