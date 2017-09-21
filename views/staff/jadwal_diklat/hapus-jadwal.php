<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-trash"></i>&nbsp;Hapus Data Kamar</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="jadwal_diklat/proses-hapus-jadwal.php" method="POST">
                            <?php 

                                $id = $_GET["id"];

                                $sql = "SELECT * FROM tb_jadwal_diklat WHERE id = '$id'";
                                $proses = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($proses);

                                $angkatan_id = $data["angkatan_id"];

                            ?>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="hidden" name="angkatan_id" value="<?php echo $angkatan_id ?>">
                            <p>
                                Apakah anda yakin ingin menghapus data jadwal diklat ini : ?
                            </p>
                            <hr>
                            <button type="submit" class="btn btn-danger">Ya, Saya Yakin!</button> &nbsp;
                            <a href="?page=lihat-jadwal&id=<?php echo $angkatan_id ?>"><button type="button" class="btn btn-default">Batal</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>