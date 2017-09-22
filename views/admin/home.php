<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-info-circle"></i>&nbsp;Selamat Datang</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php 
                        $nik = $_SESSION["username"];
                        $admin_sql = "SELECT * FROM  tb_detail_admin WHERE nik = '$nik'";
                        $admin_proses = mysqli_query($conn, $admin_sql);
                        $admin_data = mysqli_fetch_assoc($admin_proses);
                    ?>
                    <div class="col-md-12">
                        <table class="table">
                            <tr class="success">
                                <th colspan="2">Informasi Profil</th>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td><strong><?php echo $admin_data["nik"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><strong><?php echo $admin_data["nama"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><strong><?php echo $admin_data["jekel"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Tmp /Tgl Lahir</td>
                                <td>
                                    <strong>
                                        <?php echo $admin_data["tempat_lahir"].' / '.date("d M Y", strtotime($admin_data["tgl_lahir"])) ?>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamt</td>
                                <td><strong><?php echo $admin_data["alamat"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td><strong><?php echo $admin_data["nomor_hp"] ?></strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>