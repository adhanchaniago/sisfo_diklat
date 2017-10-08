<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Input Data Staff</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="proses_input/proses_input_staff.php">
                            <div class="form-grup">
                                <label for="nik">NIK :</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                            </div><br>
                            <div class="form-grup">
                                <label for="nama">Nama Lengkap :</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                            </div><br>
                            <div class="form-group">
                                <label for="jekel">Jenis Kelamin :</label>
                                <select class="form-control" name="jekel">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-grup">
                                <label for="tempatlahir">Tempat Lahir :</label>
                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir">
                            </div><br>
                            <div class="form-grup">
                                <label for="tanggallahir">Tanggal Lahir :</label>
                                <input type="text" class="form-control tgllahir" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir" data-date-format="yyyy-mm-dd">
                            </div><br>
                            <div class="form-grup">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                            </div><br>
                            <div class="form-grup">
                                <label for="nohp">Nomor HP :</label>
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor Hp">
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
                        <a href="?page=lihat-staff" class="btn btn-default btn-block">Data Staff</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>