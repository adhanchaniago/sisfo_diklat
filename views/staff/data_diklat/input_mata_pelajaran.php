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
                    <h3><br>Input Mata Pelajaran</h3>
                </div>    
                <div class="row">
                    <div class="col-lg-7">
                        <form method="POST" action="proses_input_mata_pelajaran.php">
                            <div class="form-grup"></div>
                            <div class="form-grup">
                                <label for="namapelajaran">Nama Pelajaran</label>
                                <input type="namapelajaran" class="form-control" id="namapelajaran" name="namapelajaran" placeholder="namapelajaran">
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
