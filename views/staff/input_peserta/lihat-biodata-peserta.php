<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Data Peserta</strong></h5>
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="table table-bordered table-hover my-datatable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ANGKATAN</th>
                                <th>NO ABSEN</th>
                                <th>NIK</th>
                                <th>NAMA</th>
                                <th>ASRAMA</th>
                                <th>KAMAR</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $no = 1;
                                $sql = "
                                    SELECT tb_angkatan.nama_diklat, tb_detail_peserta.nomor_absen, 
                                    tb_detail_peserta.nik, tb_detail_peserta.nama, tb_kamar.nama_asrama, 
                                    tb_kamar.nomor_kamar
                                    FROM tb_detail_peserta
                                    JOIN tb_angkatan ON tb_detail_peserta.angkatan_id = tb_angkatan.id
                                    JOIN tb_kamar ON tb_detail_peserta.kamar_id = tb_kamar.id
                                ";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data["nama_diklat"] ?></td>
                                    <td><?php echo $data["nomor_absen"] ?></td>
                                    <td><?php echo $data["nik"] ?></td>
                                    <td><?php echo $data["nama"] ?></td>
                                    <td><?php echo $data["nama_asrama"] ?></td>
                                    <td><?php echo $data["nomor_kamar"] ?></td>
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