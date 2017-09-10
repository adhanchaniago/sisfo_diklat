<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4>Tabel Data Mata Pelajaran</h4>
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA MATA PELAJARAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $no = 1;
                                $sql = "SELECT * FROM tb_mata_pelajaran";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data["nama_pelajaran"] ?></td>
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