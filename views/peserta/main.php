<?php
    session_start();

    if (isset($_SESSION["username"]) && $_SESSION["hak_akses"] == 'peserta') {
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
                    } elseif ($page == 'input-admin') {
                        include "input_admin/input-admin.php";
                    } elseif ($page == 'lihat-admin') {
                        include "input_admin/lihat-biodata-admin.php";
                    } elseif ($page == 'input-asmen') {
                        include "input_asmen/input-asmen.php";
                    } elseif ($page == 'lihat-asmen') {
                        include "input_asmen/lihat-biodata-asmen.php";
                    } elseif ($page == 'input-staff') {
                        include "input_staff/input-staff.php";
                    } elseif ($page == 'lihat-staff') {
                        include "input_staff/lihat-biodata-staff.php";
                    } elseif ($page == 'input-instruktur') {
                        include "input_instruktur/input-instruktur.php";
                    } elseif ($page == 'lihat-instruktur') {
                        include "input_instruktur/lihat-biodata-instruktur.php";
                    } elseif ($page == 'input-peserta') {
                        include "input_peserta/input-peserta.php";
                    } elseif ($page == 'lihat-peserta') {
                        include "input_peserta/lihat-biodata-peserta.php";
                    }

                }

            ?>      
        </div>
   
        <?php include "partial/script.php" ?>

</body>

</html>
