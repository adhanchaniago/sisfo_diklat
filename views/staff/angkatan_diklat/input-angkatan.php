<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Input Data Angkatan Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="angkatan_diklat/proses-input-angkatan.php" method="POST">
                            <div class="form-group">
                                <label for="nama_diklat">Nama Diklat :</label>
                                <input type="text" class="form-control" name="nama_diklat" placeholder="Nama Diklat">
                            </div>
                            <div class="form-group">
                                <label for="tgl_masuk">Tanggal Masuk :</label>
                                <input type="text" class="form-control awaldiklat" name="tgl_masuk" placeholder="Tanggal Masuk" data-date-format="yyyy-mm-dd">
                            </div>
                            <div class="form-group">
                                <label for="tgl_selesai">Tanggal Keluar :</label>
                                <input type="text" class="form-control akhirdiklat" name="tgl_selesai" placeholder="Tanggal Keluar" data-date-format="yyyy-mm-dd">
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan</button>&nbsp;
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-info-circle"></i>&nbsp;Informasi</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Silahkan dilengkapi semua form input disamping dengan data yang valid.
                        </p>
                        <p>
                            Terima Kasih.
                        </p>
                        <hr>
                        <a href="?page=lihat-angkatan" class="btn btn-default btn-block">Data Angkatan Diklat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>