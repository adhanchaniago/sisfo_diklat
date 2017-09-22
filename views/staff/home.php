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
                        $staff_sql = "SELECT * FROM  tb_detail_staff WHERE nik = '$nik'";
                        $staff_proses = mysqli_query($conn, $staff_sql);
                        $staff_data = mysqli_fetch_assoc($staff_proses);
                    ?>
                    <div class="col-md-12">
                        <table class="table">
                            <tr class="success">
                                <th colspan="2">Informasi Profil</th>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td><strong><?php echo $staff_data["nik"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><strong><?php echo $staff_data["nama"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><strong><?php echo $staff_data["jekel"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Tmp /Tgl Lahir</td>
                                <td>
                                    <strong>
                                        <?php echo $staff_data["tempat_lahir"].' / '.date("d M Y", strtotime($staff_data["tgl_lahir"])) ?>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamt</td>
                                <td><strong><?php echo $staff_data["alamat"] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td><strong><?php echo $staff_data["nomor_hp"] ?></strong></td>
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