<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Input Data Mata Pelajaran</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="mata_pelajaran/proses-input-mapel.php">
                            <div class="form-grup">
                                <label for="namapelajaran">Nama Pelajaran :</label>
                                <input type="namapelajaran" class="form-control" name="namapelajaran" placeholder="Nama Pelajaran">
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
                        <a href="?page=lihat-mapel" class="btn btn-default btn-block">Data Mata Pelajaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>