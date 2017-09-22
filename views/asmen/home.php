<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-info-circle"></i> Selamat Datang</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php 
                        $nik = $_SESSION["username"];
                        $asmen_sql = "SELECT * FROM  tb_detail_asmen WHERE nik = '$nik'";
                        $asmen_proses = mysqli_query($conn, $asmen_sql);
                        $asmen_data = mysqli_fetch_assoc($asmen_proses);
                    ?>
                    <div class="col-md-12">
                        <table class="table">
                            <tr class="success">
                                <th colspan="2">Informasi Profil</th>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td><strong><?php echo $asmen_data["nik"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><strong><?php echo $asmen_data["nama"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><strong><?php echo $asmen_data["jekel"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Tmp /Tgl Lahir</td>
                                <td>
                                    <strong>
                                        <?php echo $asmen_data["tempat_lahir"].' / '.date("d M Y", strtotime($asmen_data["tgl_lahir"])) ?>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamt</td>
                                <td><strong><?php echo $asmen_data["alamat"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td><strong><?php echo $asmen_data["nomor_hp"] ?></strong></td>
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
</div>