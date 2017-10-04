<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Ubah Nilai Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 

                            $angkatan_id = $_GET["akt"];
                            $mata_pelajaran_id = $_GET["mpl"];
                            $instruktur_id = $_GET["ins"];
                            $peserta_id = $_GET["id"];

                            $sql = "SELECT nilai FROM tb_nilai WHERE angkatan_id = '$angkatan_id' AND mata_pelajaran_id = '$mata_pelajaran_id' AND detail_instruktur_id = '$instruktur_id' AND detail_peserta_id = '$peserta_id'";
                            $proses = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_assoc($proses);

                        ?>
                        <form action="nilai/proses-ubah-nilai.php" method="POST">
                            <input type="hidden" name="angkatan_id" value="<?php echo $angkatan_id ?>">
                            <input type="hidden" name="mata_pelajaran_id" value="<?php echo $mata_pelajaran_id ?>">
                            <input type="hidden" name="detail_instruktur_id" value="<?php echo $instruktur_id ?>">
                            <input type="hidden" name="detail_peserta_id" value="<?php echo $peserta_id ?>">
                            <div class="form-group">
                                <label for="nilai">Nilai :</label>
                                <input type="text" class="form-control" name="nilai" placeholder="Nilai" value="<?php echo $data["nilai"] ?>">
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Ubah</button>&nbsp;
                                <button type="reset" class="btn btn-default">Reset</button>
                                <a href="?page=lihat-nilai&id=<?php echo $angkatan_id ?>" class="pull-right"><button type="button" class="btn btn-danger">Batal</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>