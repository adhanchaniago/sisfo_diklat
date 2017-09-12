<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Form Input Data Asisten Manajer</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="proses_input/proses_input_asmen.php">
                            <div class="form-grup">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div><br>
                            <div class="form-grup">
                                <label for="nik">Nik</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Nik">
                            </div><br>
                            <div class="form-grup">
                                <label for="tempatlahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir">
                            </div><br>
                            <div class="form-grup">
                                <label for="tanggallahir">Tanggal Lahir</label>
                                <input type="text" class="form-control datepicker" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir" data-date-format="yyyy-mm-dd">
                            </div><br>
                            <div class="form-grup">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                            </div><br>
                            <div class="form-grup">
                                <label for="nohp">No Hp</label>
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Hp">
                            </div><br>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>