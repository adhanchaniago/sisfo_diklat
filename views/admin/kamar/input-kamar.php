<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Input Data Kamar</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
						<form method="POST" action="kamar/proses-input-kamar.php">
                            <div class="form-grup"></div>
                            <div class="form-grup">
                                <label for="namaasrama">Nama Asrama :</label>
                                <input type="namaasrama" class="form-control" id="namaasrama" name="namaasrama" placeholder="Nama Asrama">
                            </div><br>
                             <div class="form-grup">
                                <label for="nomorkamar">Nomor Kamar :</label>
                                <input type="nomorkamar" class="form-control" id="nomorkamar" name="nomorkamar" placeholder="Nomor Kamar">
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
                        <a href="?page=lihat-kamar" class="btn btn-default btn-block">Data Kamar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>