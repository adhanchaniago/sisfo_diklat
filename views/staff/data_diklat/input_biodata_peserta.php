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
                <h3><br>Input Biodata Peserta</h3>
            </div>    
        <div class="row">
            <div class="col-lg-7">
                <form></br>
                    <div class="form-grup">
                        <label for="pesertadiklat"><h4>Penaksir Madya Angkatan II Tahun 2017</h4></label>
                       <!--  <input type="pesertadiklat" class="form-control" id="pesertadiklat" placeholder="Penaksir Muda Angkatan I Tahun 2017"> -->
                    </div>
                   <div class="form-grup">
                        <label for="pilihangkatan">Pilih Angkatan</label>
                            <select name="speed" id="speed" class="form-control">
                                <option> </option>
                                <option></option>
                            </select>
                    </div>
                    <div class="form-grup">
                        <label for="nomokamar">Nomor Kamar</label>
                            <select name="speed" id="speed" class="form-control">
                                <option> </option>
                                <option>Laki-laki</option>
                            </select>
                    </div>      

                    <div class="form-grup">
                        <label for="nomorabsen">No Absen</label>
                        <input type="nomorabsen" class="form-control" id="nomorabsen" placeholder="nomor absen">
                    </div>
                     <div class="form-grup">
                        <label for="nik">Nik</label>
                        <input type="nik" class="form-control" id="nik" placeholder="nik">
                    </div>
                    <div class="form-grup">
                        <label for="namapeserta">Nama Peserta</label>
                        <input type="namapeserta" class="form-control" id="namapeserta" placeholder="nama peserta">
                    </div>                   
                     <div class="form-grup">
                        <label for="agama">Agama</label>
                        <input type="agama" class="form-control" id="agama" placeholder="agama">
                    </div>
                    <div class="form-grup">
                        <label for="tempatlahir">Tempat Lahir</label>
                        <input type="tempatlahir" class="form-control" id="tempatlahir" placeholder="tempat lahir">
                    </div>
                    <div class="form-grup">
                        <label for="tanggallahir">Tanggal Lahir</label>
                        <input type="tanggallahir" class="form-control" id="tanggallahir" placeholder="tanggal lahir">
                    </div>
                    <div class="form-grup">
                        <label for="cabangasal">Cabang Asal</label>
                        <input type="cabangasal" class="form-control" id="cabangasal" placeholder="cabang asal">
                    </div>
                    <div class="form-grup">
                        <label for="alamatkantor">Alamat Kantor</label>
                        <input type="alamatkantor" class="form-control" id="alamatkantor" placeholder="alamat kantor">
                    </div>
                    <div class="form-grup">
                        <label for="nomorteleponkantor">Nomor Telepon</label>
                        <input type="nomorteleponkantor" class="form-control" id="nomorteleponkantor" placeholder="nomorteleponkantor">
                    </div>
                    <div class="form-grup">
                        <label for="alamatrumah">Alamat Rumah</label>
                        <input type="alamatrumah" class="form-control" id="alamatrumah" placeholder="alamat rumah">
                    </div>
                    <div class="form-grup">
                        <label for="nomorhp">Nomor Hp </label>
                        <input type="nomorhp" class="form-control" id="nomorhp" placeholder="nomor hp">
                    </div>
                    <br>
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
