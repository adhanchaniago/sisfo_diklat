<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Data Peserta</strong></h5>
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
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr class="success">
                                <th class="text-center">#</th>
                                <th class="text-center">Absen</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama Lengkap</th>
                                <th class="text-center">Tmp/Tgl Lahir</th>
                                <th class="text-center">Cabang Asal</th>
                                <th class="text-center">Asrama</th>
                                <th class="text-center">Kamar</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $sql = "
                                    SELECT tb_angkatan.nama_diklat, tb_detail_peserta.id, tb_detail_peserta.nomor_absen, 
                                    tb_detail_peserta.nik, tb_detail_peserta.nama, tb_detail_peserta.cabang_asal, 
                                    tb_detail_peserta.tempat_lahir, tb_detail_peserta.tgl_lahir,
                                    tb_kamar.nama_asrama, tb_kamar.nomor_kamar
                                    FROM tb_detail_peserta
                                    JOIN tb_angkatan ON tb_detail_peserta.angkatan_id = tb_angkatan.id
                                    JOIN tb_kamar ON tb_detail_peserta.kamar_id = tb_kamar.id
                                    WHERE tb_detail_peserta.angkatan_id = '$angkatan_id'
                                ";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td class="text-center">
                                        <div class="dropdown">
                                        <button class="btn btn-success btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                                AKSI &nbsp;
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="?page=ubah-peserta&id=<?php echo $data['id'] ?>">Ubah Data</a></li>
                                                <li><a href="?page=hapus-peserta&id=<?php echo $data['id'] ?>">Hapus Data</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="text-center"><?php echo $data["nomor_absen"] ?></td>
                                    <td class="text-center"><?php echo $data["nik"] ?></td>
                                    <td><?php echo $data["nama"] ?></td>
                                    <td><?php echo $data["tempat_lahir"]." / ".date('d M Y', strtotime($data["tgl_lahir"])) ?></td>
                                    <td><?php echo $data["cabang_asal"] ?></td>
                                    <td class="text-center"><?php echo $data["nama_asrama"] ?></td>
                                    <td class="text-center"><?php echo $data["nomor_kamar"] ?></td>
                                </tr>

                            <?php
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>