<?php

    $nik = $_SESSION["username"];
    $sql = "
        SELECT tb_angkatan.id, tb_angkatan.nama_diklat, tb_angkatan.tgl_masuk, tb_angkatan.tgl_selesai, 
        tb_detail_peserta.id, tb_detail_peserta.nomor_absen, 
        tb_detail_peserta.nik, tb_detail_peserta.nama, tb_detail_peserta.jekel, tb_detail_peserta.tempat_lahir, 
        tb_detail_peserta.tgl_lahir, tb_detail_peserta.cabang_asal, tb_detail_peserta.alamat_kantor,
        tb_detail_peserta.tlp_kantor, tb_detail_peserta.nomor_hp, tb_detail_peserta.alamat_rumah, tb_detail_peserta.agama, 
        tb_detail_peserta.foto, tb_kamar.id, tb_kamar.nomor_kamar, tb_kamar.nama_asrama
        FROM tb_detail_peserta
        JOIN tb_angkatan ON tb_detail_peserta.angkatan_id = tb_angkatan.id
        JOIN tb_kamar ON tb_detail_peserta.kamar_id = tb_kamar.id
        WHERE tb_detail_peserta.nik = '$nik'
    ";
    $proses = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($proses);

?>

<div class="row">
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><i class="fa fa-address-book"></i>&nbsp;<strong>Selamat Datang</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <tr class="success">
                                <th colspan="2">Informasi Diklat</th>
                            </tr>
                            <tr>
                                <td>Nama Diklat</td>
                                <td><?php echo $data["nama_diklat"] ?></td>
                            </tr>
                            <tr>
                                <td>Tgl Mulai</td>
                                <td><?php echo $data["tgl_masuk"] ?></td>
                            </tr>
                            <tr>
                                <td>Tgl Selesai</td>
                                <td><?php echo $data["tgl_selesai"] ?></td>
                            </tr>
                            <tr class="success">
                                <th colspan="2">Informasi Kamar</th>
                            </tr>
                            <tr>
                                <td>Nama Asrama</td>
                                <td><?php echo $data["nama_asrama"] ?></td>
                            </tr>
                            <tr>
                                <td>Nomor Kamar</td>
                                <td><?php echo $data["nomor_kamar"] ?></td>
                            </tr>
                            <tr class="success">
                                <th colspan="2">Informasi Peserta</th>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td><?php echo $data["nik"] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><?php echo $data["nama"] ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><?php echo strtoupper($data["jekel"]) ?></td>
                            </tr>
                            <tr>
                                <td>Tempat / Tanggal Lahir</td>
                                <td><?php echo $data["tempat_lahir"].' / '.$data["tgl_lahir"] ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td><?php echo strtoupper($data["agama"]) ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?php echo $data["alamat_rumah"] ?></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td><?php echo $data["nomor_hp"] ?></td>
                            </tr>
                            <tr class="success">
                                <th colspan="2">Informasi Kantor Cabang Asal</th>
                            </tr>
                            <tr>
                                <td>Kantor Cabang Asal</td>
                                <td><?php echo $data["cabang_asal"] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?php echo $data["alamat_kantor"] ?></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td><?php echo $data["tlp_kantor"] ?></td>
                            </tr>
                        </table>
                        <div class="form-group"> 
                            <a href="?page=edit-profil" class="btn btn-success btn-block">Edit Profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5><i class="fa fa-info-circle"></i>&nbsp;<strong>Pemberitahuan</strong></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    Diberitahukan kepada seluruh peserta (diklat) untuk segera melengkapi biodata diri, 
                                    mengupload foto dan ktp, sesegera mungkin. Terima kasih.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5><i class="fa fa-upload"></i>&nbsp;<strong>Upload Photo</strong></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <img src="../../assets/img/huda.jpg" alt="" class="img-responsive">
                                </div><br>
                                <form action="" method="POST">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn btn-success">
                                                Browse&hellip; <input type="file" style="display: none;" multiple>
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly>
                                    </div><br>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block" value="Upload">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5><i class="fa fa-upload"></i>&nbsp;<strong>Upload KTP</strong></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                            <div>
                                <img src="" alt="" class="img-responsive">
                                </div><br>
                                <form action="" method="POST">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                            <span class="btn btn-success">
                                                Browse&hellip; <input type="file" style="display: none;" multiple>
                                            </span>
                                        </label>
                                        <input type="text" class="form-control" readonly>
                                    </div><br>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block" value="Upload">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>