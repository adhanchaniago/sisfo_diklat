<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="../../../assets/css/bootstrap-admin.css" rel="stylesheet" />
    <link href="../../../assets/css/font-awesome-admin.css" rel="stylesheet" />
    <link href="../../../assets/css/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../../../assets/css/style-admin.css" rel="stylesheet" />
      <link href="../../../assets/css/main-style-admin.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                   
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">

        </nav>                          

    <?php include "../partial/header.php" ?>

      <div id="page-wrapper">
           <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h3><br>Input Jadwal Diklat</h3>
                </div>    
                <div class="row">
                    <div class="col-lg-7">
                        <form method="POST" action="proses_input_angkatan_diklat.php">
                            <div class="form-grup"></div>
                            <div class="form-grup">
                                <label for="angkatanid">Angkatan</label>
                                <input type="namadiklat" class="form-control" id="namadiklat" name="namadiklat" placeholder="namadiklat">
                            </div>
                             <div class="form-grup">
                                <label for="tgl_masuk">Tanggal Masuk</label>
                                <input type="tgl_masuk" class="form-control" id="tgl_masuk" name="tgl_masuk" placeholder="tgl_masuk">
                            </div>
                            <div class="form-grup">
                                <label for="tgl_selesai">Tanggal Selesai</label>
                                <input type="tgl_selesai" class="form-control" id="tgl_selesai" name="tgl_selesai" placeholder="tgl_selesai">
                            </div><br>
                                <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>       
           </div>
     </div>
    
    <script src="../../../assets/js/jquery-admin.js"></script>
    <script src="../../../assets/js/bootstrap-admin.js"></script>
    <script src="../../../assets/js/jquery-adminMenu.js"></script>
    <script src="../../../assets/js/pace-admin.js"></script>
    <script src="../../../assets/js/siminta-admin.js"></script>

    </body>

</html>
