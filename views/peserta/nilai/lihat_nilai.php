<div class="row">
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h5><strong><i class="fa fa-table"></i>&nbsp;Tabel Nilai Diklat</strong></h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
						<?php 

							$peserta_id = $_SESSION["id"];
							$peserta_sql = "SELECT * FROM tb_detail_peserta WHERE id ='$peserta_id'";
							$peserta_proses = mysqli_query($conn, $peserta_sql);
							$peserta_data = mysqli_fetch_assoc($peserta_proses);
	                        
	                        $angkatan_id = $peserta_data["angkatan_id"];

	                        $data_diklat_sql = "
	                            SELECT tb_angkatan.id AS angkatan_id, tb_angkatan.nama_diklat, tb_angkatan.tgl_masuk, tb_angkatan.tgl_selesai, tb_mata_pelajaran.id AS mata_pelajaran_id, tb_mata_pelajaran.nama_pelajaran
	                            FROM tb_jadwal_diklat
	                            JOIN tb_angkatan ON tb_jadwal_diklat.angkatan_id = tb_angkatan.id
	                            JOIN tb_mata_pelajaran ON tb_jadwal_diklat.mata_pelajaran_id = tb_mata_pelajaran.id
	                            AND tb_angkatan.id = '$angkatan_id'
	                        ";
	                        $data_diklat_proses = mysqli_query($conn, $data_diklat_sql);
	                        $data_diklat = mysqli_fetch_assoc($data_diklat_proses);

	                        $mata_pelajaran_id = $data_diklat["mata_pelajaran_id"];
	                    ?>
	                    <div class="text-center">
	                        <p><h3><?php echo $data_diklat["nama_diklat"] ?></h3></p>
	                        <p><h5><?php echo $data_diklat["tgl_masuk"].' s/d '.$data_diklat["tgl_selesai"] ?></h5></p>
	                    </div><hr>
	                    <table class="table table-bordered table-hover my-datatable">
	                        <thead>
	                            <tr>
	                                <th>No</th>
	                                <th>Nama Mata Pelajaran</th>
	                                <th>Nama Instruktur</th>
	                                <th>Nilai Akhir</th>
	                            </tr>
	                        </thead>
	                        <tbody>

	                            <?php

	                                $data_nilai_sql = "
	                                    SELECT tb_nilai.nilai, tb_mata_pelajaran.nama_pelajaran, tb_detail_instruktur.nama
	                                    FROM tb_nilai
	                                    JOIN tb_angkatan ON tb_nilai.angkatan_id = tb_angkatan.id
	                                    JOIN tb_mata_pelajaran ON tb_nilai.mata_pelajaran_id = tb_mata_pelajaran.id
	                                    JOIN tb_detail_instruktur ON tb_nilai.detail_instruktur_id = tb_detail_instruktur.id
	                                    JOIN tb_detail_peserta ON tb_nilai.detail_peserta_id = tb_detail_peserta.id
	                                    WHERE tb_nilai.angkatan_id = '$angkatan_id'
	                                    AND tb_nilai.detail_peserta_id = '$peserta_id'
	                                ";
	                                $data_nilai_proses = mysqli_query($conn, $data_nilai_sql);

	                                $no = 1;
	                                $jumlah = 0;
	                                while ($data_nilai = mysqli_fetch_assoc($data_nilai_proses)) {
	                                    
	                            ?>
	                                
	                                <tr>
	                                    <td><?php echo $no ?></td>
	                                    <td><?php echo $data_nilai["nama_pelajaran"] ?></td>
	                                    <td><?php echo $data_nilai["nama"] ?></td>
	                                    <td class="text-center"><?php echo $data_nilai["nilai"] ?></td>
	                                </tr>

	                            <?php
	                            		$jumlah = $jumlah + $data_nilai["nilai"];
	                                    $no = $no +1;
	                                }

	                                $total  = $no-1;
	                                $rata = $jumlah / $total;

	                            ?>

	                            

	                        </tbody>
	                    </table>
						<br>
	                    <table class="table table-bordered">
	                    	<tr>
	                    		<td> <strong>RATA - RATA</strong></td>
	                    		<td class="text-center"><strong><?php echo number_format($rata, 2) ?></strong></td>
	                    	</tr>
	                    	<tr>
	                    		<td> Nilai Patokan</td>
	                    		<td class="text-center"> 70 </td>
	                    	</tr>
	                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>