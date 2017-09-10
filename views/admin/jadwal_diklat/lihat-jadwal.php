<div class="row">
    <div class="col-md-12">
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
                                <th>ANGKATAN DIKLAT</th>
                                <th>MATA PELAJARAN</th>
                                <th>INSTRUKTUR</th>
                                <th>HARI / TANGGAL</th>
                                <th>MULAI</th>
                                <th>SELESAI</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                $no = 1;
                                $sql = "
                                    SELECT tb_angkatan.nama_diklat, tb_mata_pelajaran.nama_pelajaran, tb_detail_instruktur.nama, 
                                    tb_jadwal_diklat.id, tb_jadwal_diklat.hari, tb_jadwal_diklat.tgl, tb_jadwal_diklat.waktu_mulai, 
                                    tb_jadwal_diklat.waktu_selesai
                                    FROM tb_jadwal_diklat
                                    JOIN tb_angkatan ON tb_jadwal_diklat.angkatan_id = tb_angkatan.id
                                    JOIN tb_mata_pelajaran ON tb_jadwal_diklat.mata_pelajaran_id = tb_mata_pelajaran.id
                                    JOIN tb_detail_instruktur ON tb_jadwal_diklat.detail_instruktur_id = tb_detail_instruktur.id
                                ";
                                $proses = mysqli_query($conn, $sql);
            
                                while ($data = mysqli_fetch_assoc($proses))
                                {
                            ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data["nama_diklat"] ?></td>
                                    <td><?php echo $data["nama_pelajaran"] ?></td>
                                    <td><?php echo $data["nama"] ?></td>
                                    <td><?php echo $data["hari"]." / ".$data["tgl"] ?></td>
                                    <td><?php echo $data["waktu_mulai"] ?> WIB</td>
                                    <td><?php echo $data["waktu_selesai"] ?> WIB</td>
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