<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-trash"></i>&nbsp;Hapus Data Administrator</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="angkatan_diklat/proses_hapus_angkatan.php" method="POST">
                            <?php 

                                $id = $_GET["id"];

                                $sql = "SELECT nama_diklat FROM tb_angkatan WHERE id = '$id'";
                                $proses = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($proses);

                            ?>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <p>
                                Apakah anda yakin ingin menghapus data angkatan diklat dengan data berikut ini dan juga data-data terkait, seperti data peserta, data jadwal diklat, data nilai, dan sebagainya  : ?
                            </p>
                            <table width="100%" style="font-size: 14px;">
                                <tr>
                                    <td>Nama Angkatan Diklat</td>
                                    <td>:</td>
                                    <td><?php echo $data["nama_diklat"] ?></td>
                                </tr>
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-danger">Ya, Saya Yakin!</button> &nbsp;
                            <a href="?page=lihat-angkatan"><button type="button" class="btn btn-default">Batal</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>