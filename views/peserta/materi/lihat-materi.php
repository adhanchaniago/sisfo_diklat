<div class="row">
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Data Mata Pelajaran</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $id = $_SESSION["id"];
                                $no = 1;
                                $sql = "SELECT * FROM tb_materi";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data["judul_materi"] ?></td>
                                    <td>
                                        <a href="<?php echo "../../assets/file/".$data["lokasi"] ?>" class="btn btn-xs btn-primary">DOWNLOAD</a>
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