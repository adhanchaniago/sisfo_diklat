<div class="row">
    <div class="col-md-10">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp; Tabel Data Asisten Manajer</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr class="success">
                                <th class="text-center">#</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama Lengkap</th>
                                <th class="text-center">Jns Kelamin</th>
                                <th class="text-center">Tmpt / Tgl Lahir</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Nomor HP</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $sql = "SELECT * FROM tb_detail_asmen";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td class="text-center">
                                        <div class="dropdown">
                                        <button class="btn btn-success btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                                AKSI &nbsp;
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="?page=ubah-asmen&id=<?php echo $data['id'] ?>">Ubah Data</a></li>
                                                <li><a href="?page=hapus-asmen&id=<?php echo $data['id'] ?>">Hapus Data</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="text-center"><?php echo $data["nik"] ?></td>
                                    <td><?php echo $data["nama"] ?></td>
                                    <td class="text-center"><?php echo $data["jekel"] ?></td>
                                    <td><?php echo $data["tempat_lahir"].", ".date('d M Y', strtotime($data["tgl_lahir"])) ?></td>
                                    <td><?php echo $data["alamat"] ?></td>
                                    <td class="text-center"><?php echo $data["nomor_hp"] ?></td>
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

