<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-trash"></i>&nbsp;Hapus Data Staff</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="input_staff/proses_hapus_staff.php" method="POST">
                            <?php 

                                $id = $_GET["id"];

                                $sql = "SELECT nik, nama FROM tb_detail_staff WHERE id = '$id'";
                                $proses = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($proses);

                            ?>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="hidden" name="nik" value="<?php echo $data["nik"] ?>">
                            <p>
                                Apakah anda yakin ingin menghapus data staff dengan data berikut ini : ?
                            </p>
                            <table width="100%" style="font-size: 14px;">
                                <tr>
                                    <td width="30%">NIK</td>
                                    <td>:</td>
                                    <td><?php echo $data["nik"] ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td><?php echo $data["nama"] ?></td>
                                </tr>
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-danger">Ya, Saya Yakin!</button> &nbsp;
                            <a href="?page=lihat-staff"><button type="button" class="btn btn-default">Batal</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>