<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Data Angkatan Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Angkatan Diklat</th>
                                <th>Tgl Mulai Diklat</th>
                                <th>Tgl Selesai Diklat</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $sql = "SELECT * FROM tb_angkatan";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td>
                                        <div class="dropdown">
                                        <button class="btn btn-success btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                                AKSI &nbsp;
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="?page=ubah-angkatan&id=<?php echo $data['id'] ?>">Ubah Data</a></li>
                                                <li><a href="?page=hapus-angkatan&id=<?php echo $data['id'] ?>">Hapus Data</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><?php echo $data["nama_diklat"] ?></td>
                                    <td><?php echo $data["tgl_masuk"] ?></td>
                                    <td><?php echo $data["tgl_selesai"] ?></td>
                                </tr>

                            <?php
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>