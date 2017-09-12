<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong>Form Upload Materi</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="materi/proses-input-materi.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="judul_materi">Judul Materi</label>
                                <input type="text" class="form-control" name="judul_materi" placeholder="Judul Materi">
                            </div>
                            <div class="form-group">
                                <label for="file_materi">File Dokumen</label>
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-success">
                                            Browse&hellip; <input type="file" name="file_materi" style="display: none;">
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div><br>
                            <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Upload" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>