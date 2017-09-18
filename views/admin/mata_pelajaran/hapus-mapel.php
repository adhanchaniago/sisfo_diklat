<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-trash"></i>&nbsp;Hapus Data Mata Pelajaran</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="mata_pelajaran/proses_hapus_mapel.php" method="POST">
                            <?php 

                                $id = $_GET["id"];

                                $sql = "SELECT * FROM tb_mata_pelajaran WHERE id = '$id'";
                                $proses = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($proses);

                            ?>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <p>
                                Apakah anda yakin ingin menghapus data mata pelajaran dengan data berikut ini : ?
                            </p>
                            <table width="100%" style="font-size: 14px;">
                                <tr>
                                    <td width="30%">Nama Mata Pelajaran</td>
                                    <td>:</td>
                                    <td><?php echo $data["nama_pelajaran"] ?></td>
                                </tr>
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-danger">Ya, Saya Yakin!</button> &nbsp;
                            <a href="?page=lihat-mapel"><button type="button" class="btn btn-default">Batal</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>