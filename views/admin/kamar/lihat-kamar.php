<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Data Kamar</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Asrama</th>
                                <th>Nomor Kamar</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $sql = "SELECT * FROM tb_kamar";
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
                                                <li><a href="?page=ubah-kamar&id=<?php echo $data['id'] ?>">Ubah Data</a></li>
                                                <li><a href="?page=hapus-kamar&id=<?php echo $data['id'] ?>">Hapus Data</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><?php echo $data["nama_asrama"] ?></td>
                                    <td><?php echo $data["nomor_kamar"] ?></td>
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