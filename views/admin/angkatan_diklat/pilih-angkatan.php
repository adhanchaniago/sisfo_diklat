<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-info-circle"></i>&nbsp;Pilih Angkatan Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php

                            $show = $_GET["show"];
                            $target = "";

                            if ($show == 'peserta') {
                                $target = 'lihat-peserta';
                            } elseif ($show == 'jadwal') {
                                $target = 'lihat-jadwal';
                            } elseif ($show == 'nilai') {
                                $target = 'lihat-nilai';
                            } elseif ($show == 'input-peserta') {
                                $target = 'input-peserta';
                            }

                        ?>
                        <form action="main.php" method="GET">
                            <div class="form-group">
                                <input type="hidden" name="page" value="<?php echo $target ?>">
                                <label for="angkatan_id">Pilih Angkatan Diklat :</label>
                                <select name="id" id="id" class="form-control">
                                    <option value="">Pilih Angkatan Diklat</option>
                                    <?php
                                        $angkatan_sql = "SELECT * FROM tb_angkatan";
                                        $angkatan_proses = mysqli_query($conn, $angkatan_sql);
                                        while ($angkatan_data = mysqli_fetch_assoc($angkatan_proses)) {
                                    ?>
                                        <option value="<?php echo $angkatan_data["id"] ?>"><?php echo $angkatan_data["nama_diklat"] ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Lanjut</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>