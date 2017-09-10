<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4>Form Input Angkatan Diklat</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="angkatan_diklat/proses-input-angkatan.php" method="POST">
                            <div class="form-group">
                                <label for="nama_diklat">Nama Diklat</label>
                                <input type="text" class="form-control" name="nama_diklat" placeholder="Nama Diklat">
                            </div>
                            <div class="form-group">
                                <label for="tgl_masuk">Tanggal Masuk</label>
                                <input type="text" class="form-control datepicker" name="tgl_masuk" placeholder="Tanggal Masuk" data-date-format="yyyy-mm-dd">
                            </div>
                            <div class="form-group">
                                <label for="tgl_selesai">Tanggal Keluar</label>
                                <input type="text" class="form-control datepicker" name="tgl_selesai" placeholder="Tanggal Keluar" data-date-format="yyyy-mm-dd">
                            </div>
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>