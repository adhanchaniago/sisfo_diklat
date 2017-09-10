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
                   </ul>
                   
        </nav>
       
        <?php include "../partial/header.php" ?>
        
        <div id="page-wrapper">

            <div class="row">
            
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h3><br><br>Biodata Instruktur</h3><br>                 
                </div>
            </div>    

            <div class="row">
                <div class="col-lg-5">
                    <form>
                        <div class="form-grup">
                           <label for="nik">Nik</label>
                           <input type="nik" class="form-control" id="nik" placeholder="Nik">
                        </div>
                        <div class="form-grup">
                           <label for="nama">Nama</label>
                           <input type="nama" class="form-control" id="nik" placeholder="Nama">
                        </div>
                        <div class="form-grup">
                           <label for="jeniskelamin">Jenis Kelamin</label>
                              <select name="speed" id="speed" class="form-control">
                                      <option> </option>
                                      <option>Laki-laki</option>
                                      <option>Perempuan</option>
                                      
                              </select>
                        </div>
                         <div class="form-grup">
                           <label for="tempatlahir">Tempat Lahir</label>
                           <input type="tempatllahir" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
                        </div>
                         <div class="form-grup">
                            <label for="tanggallahir">Tanggal Lahir</label>
                            <input type="tanggallahir" class="form-control" id="tanggallahir" placeholder="Tanggal Lahir">
                        </div>
                         <div class="form-grup">
                            <label for="alamat">Alamat</label>
                            <input type="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                         <div class="form-grup">
                            <label for="nohp">No Hp</label>
                            <input type="nohp" class="form-control" id="nohp" placeholder="No Hp">
                        </div><br>
                        <button type="submit" class="btn btn-default">Simpan</button>
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
