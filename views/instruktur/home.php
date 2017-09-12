<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong>Selamat Datang</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php 
                        $nik = $_SESSION["username"];
                        $instruktur_sql = "SELECT id, nik, nama FROM  tb_detail_instruktur WHERE nik = '$nik'";
                        $instruktur_proses = mysqli_query($conn, $instruktur_sql);
                        $instruktur_data = mysqli_fetch_assoc($instruktur_proses);
                    ?>
                    <div class="col-md-12">
                        <table class="table">
                            <tr class="success">
                                <th colspan="2">Informasi Profil</th>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td><?php echo $instruktur_data["nik"] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><?php echo $instruktur_data["nama"] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong>Daftar Jadwal Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 

                            $instruktur_id = $instruktur_data["id"];
                            $jadwal_sql = "
                                SELECT tb_angkatan.nama_diklat, tb_mata_pelajaran.nama_pelajaran, tb_jadwal_diklat.tgl, tb_jadwal_diklat.tgl,tb_jadwal_diklat.waktu_mulai, tb_jadwal_diklat.waktu_selesai
                                    FROM tb_jadwal_diklat
                                    JOIN tb_angkatan ON tb_jadwal_diklat.angkatan_id = tb_angkatan.id
                                    JOIN tb_mata_pelajaran ON tb_jadwal_diklat.mata_pelajaran_id = tb_mata_pelajaran.id
                                    WHERE tb_jadwal_diklat.detail_instruktur_id = '$instruktur_id'
                            ";
                            $jadwal_proses = mysqli_query($conn, $jadwal_sql);

                        ?>
                        <table class="table table-bordered">
                            <tr class="success">
                                <th>No</th>
                                <th>Nama Diklat</th>
                                <th>Mata Pelajaran</th>
                                <th>Tanggal</th>
                                <th>Masuk</th>
                                <th>Keluar</th>
                            </tr>
                            <?php 
                                $no = 1;
                                while ($jadwal_data = mysqli_fetch_assoc($jadwal_proses)) {
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $jadwal_data["nama_diklat"] ?></td>
                                        <td><?php echo $jadwal_data["nama_pelajaran"] ?></td>
                                        <td><?php echo $jadwal_data["tgl"] ?></td>
                                        <td><?php echo $jadwal_data["waktu_mulai"] ?></td>
                                        <td><?php echo $jadwal_data["waktu_selesai"] ?></td>
                                    </tr>

                                    <?php
                                    $no++;
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>