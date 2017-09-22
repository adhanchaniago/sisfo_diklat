<div class="row">
    <div class="col-lg-5">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-info-circle"></i>&nbsp;Selamat Datang</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php 
                        $nik = $_SESSION["username"];
                        $instruktur_sql = "SELECT * FROM  tb_detail_instruktur WHERE nik = '$nik'";
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
                                <td><strong><?php echo $instruktur_data["nik"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><strong><?php echo $instruktur_data["nama"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><strong><?php echo $instruktur_data["jekel"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Tmp /Tgl Lahir</td>
                                <td>
                                    <strong>
                                        <?php echo $instruktur_data["tempat_lahir"].' / '.date("d M Y", strtotime($instruktur_data["tgl_lahir"])) ?>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamt</td>
                                <td><strong><?php echo $instruktur_data["alamat"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td><strong><?php echo $instruktur_data["nomor_hp"] ?></strong></td>
                            </tr>
                        </table>
                        <hr>
                        <a href="?page=edit-profil">
                            <button type="button" class="btn btn-success btn-block">Edit Profil</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Daftar Jadwal Diklat</strong></h5>
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
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Nama Diklat</th>
                                <th class="text-center">Mata Pelajaran</th>
                                <th class="text-center">Masuk</th>
                                <th class="text-center">Keluar</th>
                            </tr>
                            <?php 
                                $no = 1;
                                while ($jadwal_data = mysqli_fetch_assoc($jadwal_proses)) {
                                    ?>
                                    
                                    <tr>
                                        <td class="text-center"><?php echo $no ?></td>
                                        <td class="text-center"><?php echo date('d M Y', strtotime($jadwal_data["tgl"])) ?></td>
                                        <td><?php echo $jadwal_data["nama_diklat"] ?></td>
                                        <td><?php echo $jadwal_data["nama_pelajaran"] ?></td>
                                        <td class="text-center"><?php echo $jadwal_data["waktu_mulai"] ?></td>
                                        <td class="text-center"><?php echo $jadwal_data["waktu_selesai"] ?></td>
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