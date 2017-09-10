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
     <link href="css/bootstrap-min-tgl.css" rel="stylesheet"> 
    <link href="css/datepicker-tgl.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-tgl-min.js"></script> 

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
                    <h3><br><br>Biodata Peserta</h3><br>                 
                </div>
            </div>    

            <div class="row">
                <div class="col-lg-5">
                    <form>
                        <div class="form-grup">
                           <label for="pesertadiklat">Peserta Diklat</label>
                           <input type="pesertadiklat" class="form-control" id="pesertadiklat" placeholder="Peserta Diklat">
                        </div>
                        <div class="form-grup">
                           <label for="angkatan">Angkatan</label>
                           <input type="angkatan" class="form-control" id="angkatan" placeholder="Angkatan">
                        </div>
                        <div class="form-grup">
                           <label for="noabsen">No Absen</label>
                           <input type="noabsen" class="form-control" id="noabsen" placeholder="No Absen">
                        </div>
                        <div class="form-grup">
                           <label for="nik">Nik</label>
                           <input type="nik" class="form-control" id="nik" placeholder="nik">
                        </div>
                        <div class="form-grup">
                           <label for="nama">Nama</label>
                           <input type="nama" class="form-control" id="nik" placeholder="nama">
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
                        <div class="form-group" >
                          <div class="col-md-6">
                              <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                                  <input class="form-control" type="text" name="tgl_regis" readonly="readonly">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              </div>
                          </div>
                      </div>
                        <div class="form-grup">
                           <label for="cabangasal">Cabang Asal</label>
                           <input type="cabangasal" class="form-control" id="cabangasal" placeholder="Cabang Asal">
                        </div>
                         <div class="form-grup">
                            <label for="alamatkantor">Alamat Kantor </label>
                            <input type="alamatkantor" class="form-control" id="alamatkantor" placeholder="Alamat Kantor">
                        </div>
                        <div class="form-grup">
                           <label for="alamatrumah">Alamat Rumah</label>
                           <input type="alamatrumah" class="form-control" id="alamatrumah" placeholder="Alamat Rumah">
                        </div>
                        <div class="form-grup">
                           <label for="agama">Agama</label>
                           <input type="agama" class="form-control" id="agama" placeholder="Agama">
                        </div>
                        <div class="form-grup">
                           <label for="angkatan">Angkatan</label>
                           <input type="angkatan" class="form-control" id="angkatan" placeholder="Angkatan">
                        </div>
                         <div class="form-grup">
                            <label for="notelpkantor">No Telepon Kantor</label>
                            <input type="notelpkantor" class="form-control" id="notelpkantor" placeholder="No Telepon Kantor">
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
    <script src="js/bootstrap-min-tgl.js"></script>
    <script src="js/bootstrap-datepicker-tgl.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>

</body>

</html>
