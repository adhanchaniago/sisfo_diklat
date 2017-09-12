<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong>Selamat Datang</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php 
                        $nik = $_SESSION["username"];
                        $asmen_sql = "SELECT id, nik, nama FROM  tb_detail_asmen WHERE nik = '$nik'";
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
                                <td><?php echo $asmen_data["nik"] ?></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><?php echo $asmen_data["nama"] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>