<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-address-card"></i>&nbsp;Upload Materi</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="materi/proses-input-materi.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="judul_materi">Judul Materi :</label>
                                <input type="text" class="form-control" name="judul_materi" placeholder="Judul Materi">
                            </div>
                            <div class="form-group">
                                <label for="file_materi">File Dokumen :</label>
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-success">
                                            Browse&hellip; <input type="file" name="file_materi" style="display: none;">
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Upload</button>&nbsp;
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
                        <a href="?page=lihat-materi" class="btn btn-default btn-block">Data Materi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>