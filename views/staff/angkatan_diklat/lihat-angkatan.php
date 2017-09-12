<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Data Angkatan Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA DIKLAT</th>
                                <th>TGL MASUK</th>
                                <th>TGL SELESAI</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $no = 1;
                                $sql = "SELECT * FROM tb_angkatan";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data["nama_diklat"] ?></td>
                                    <td><?php echo $data["tgl_masuk"] ?></td>
                                    <td><?php echo $data["tgl_selesai"] ?></td>
                                    <td>
                                        <a href="#" class="btn btn-xs btn-success">UBAH</a>
                                        <a href="#" class="btn btn-xs btn-danger">HAPUS</a>
                                    </td>
                                </tr>

                            <?php
                                    $no++;
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>