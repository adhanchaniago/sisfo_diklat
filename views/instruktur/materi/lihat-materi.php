<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Data Materi</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr class="success">
                                <th class="text-center">No</th>
                                <th class="text-center">Judul Materi</th>
                                <th class="text-center">#</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $id = $_SESSION["id"];
                                $no = 1;
                                $sql = "SELECT * FROM tb_materi WHERE detail_instruktur_id = '$id'";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td class="text-center"><?php echo $no; ?></td>
                                    <td><?php echo $data["judul_materi"] ?></td>
                                    <td class="text-center">
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