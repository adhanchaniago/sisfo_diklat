<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp; Tabel Data Administrator</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Jns Kelamin</th>
                                <th>Tmp / Tgl Lair</th>
                                <th>Alamat</th>
                                <th>Nomor HP</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $sql = "SELECT * FROM tb_detail_admin";
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
                                                <li><a href="?page=ubah-admin&id=<?php echo $data['id'] ?>">Ubah Data</a></li>
                                                <li><a href="?page=hapus-admin&id=<?php echo $data['id'] ?>">Hapus Data</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><?php echo $data["nik"] ?></td>
                                    <td><?php echo $data["nama"] ?></td>
                                    <td><?php echo $data["jekel"] ?></td>
                                    <td><?php echo $data["tempat_lahir"]." / ".$data["tgl_lahir"] ?></td>
                                    <td><?php echo $data["alamat"] ?></td>
                                    <td><?php echo $data["nomor_hp"] ?></td>
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