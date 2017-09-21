<?php
    session_start();

    if (isset($_SESSION["username"]) && $_SESSION["hak_akses"] == 'staff') {
        echo "masuk";
    } else {
        session_unset();
        session_destroy();
        header("Location:../../login.php");
    }
?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sisfo Diklat</title>

    <?php include "partial/style.php" ?>

</head>

<body>

    <div id="wrapper">

        <?php include "partial/navbar.php" ?>
        <?php include "partial/sidebar.php" ?>
        
        <div id="page-wrapper">

            <div class="row">
                <br>
                <div class="col-md-12">

                    <?php   

                        include "../../config/koneksi.php";

                        if (isset($_SESSION["flash"]) && isset($_SESSION["message"])) {
                            
                            $flash = $_SESSION["flash"];
                            $message = $_SESSION["message"];

                            if ($flash == 'sukses') {
                                
                                echo '
                                    <div class="alert alert-success">
                                        <strong>SUKSES!</strong> '. $message .'
                                    </div>
                                ';

                                $_SESSION["flash"] = NULL;
                                $_SESSION["message"] = NULL;

                            } elseif ($flash == 'gagal') {
                                
                                echo '
                                    <div class="alert alert-danger">
                                        <strong>GAGAL!</strong> '. $message .'
                                    </div>
                                ';

                                $_SESSION["flash"] = NULL;
                                $_SESSION["message"] = NULL;

                            }
                            
                        }

                    ?>

                </div>

            </div>
            
            <?php
                
                if (isset($_GET["page"])) {
                    
                    $page = $_GET["page"];
                    
                    if ($page == 'home') {
                        include "home.php";
                    } elseif ($page == 'edit-profil') {
                        include "biodata/edit_biodata.php";
                    } elseif ($page == 'ubah-password') {
                        include "password/ubah_password.php";
                    } elseif ($page == 'input-instruktur') {
                        include "input_instruktur/input-instruktur.php";
                    } elseif ($page == 'ubah-instruktur') {
                        include "input_instruktur/ubah-instruktur.php";
                    } elseif ($page == 'hapus-instruktur') {
                        include "input_instruktur/hapus-instruktur.php";
                    } elseif ($page == 'lihat-instruktur') {
                        include "input_instruktur/lihat-biodata-instruktur.php";
                    } elseif ($page == 'input-peserta') {
                        include "input_peserta/input-peserta.php";
                    } elseif ($page == 'ubah-peserta') {
                        include "input_peserta/ubah-peserta.php";
                    } elseif ($page == 'hapus-peserta') {
                        include "input_peserta/hapus-peserta.php";
                    } elseif ($page == 'lihat-peserta') {
                        include "input_peserta/lihat-biodata-peserta.php";
                    } elseif ($page == 'input-mapel') {
                        include "mata_pelajaran/input-mapel.php";
                    } elseif ($page == 'lihat-mapel') {
                        include "mata_pelajaran/lihat-mapel.php";
                    } elseif ($page == 'input-jadwal') {
                        include "jadwal_diklat/input-jadwal.php";
                    } elseif ($page == 'ubah-jadwal') {
                        include "jadwal_diklat/ubah-jadwal.php";
                    } elseif ($page == 'hapus-jadwal') {
                        include "jadwal_diklat/hapus-jadwal.php";
                    } elseif ($page == 'lihat-jadwal') {
                        include "jadwal_diklat/lihat-jadwal.php";
                    } elseif ($page == 'input-angkatan') {
                        include "angkatan_diklat/input-angkatan.php";
                    } elseif ($page == 'ubah-angkatan') {
                        include "angkatan_diklat/ubah-angkatan.php";
                    } elseif ($page == 'hapus-angkatan') {
                        include "angkatan_diklat/hapus-angkatan.php";
                    } elseif ($page == 'lihat-angkatan') {
                        include "angkatan_diklat/lihat-angkatan.php";
                    } elseif ($page == 'input-kamar') {
                        include "kamar/input-kamar.php";
                    } elseif ($page == 'ubah-kamar') {
                        include "kamar/ubah-kamar.php";
                    } elseif ($page == 'hapus-kamar') {
                        include "kamar/hapus-kamar.php";
                    } elseif ($page == 'lihat-kamar') {
                        include "kamar/lihat-kamar.php";
                    } elseif ($page == 'pilih-angkatan') {
                        include "angkatan_diklat/pilih-angkatan.php";
                    } elseif ($page == 'lihat-nilai') {
                        include "nilai/lihat-nilai.php";
                    }

                }

            ?>      
        </div>
   
        <?php include "partial/script.php" ?>

</body>

</html>
