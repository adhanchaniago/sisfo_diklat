<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <div class="user-section">
                    <!-- <div class="user-section-inner">
                        <img src="../../assets/vendor/siminta/img/user.jpg" alt="">
                    </div> -->
                    <div class="user-info">
                        <div>
                            <strong>NIK : </strong> <br> &nbsp;
                            <?php echo $_SESSION["username"] ?>
                        </div>
                        <div>
                            <strong>NAMA : </strong> <br> &nbsp;
                            <?php echo strtoupper($_SESSION["nama"]) ?>
                        </div>
                        <div>
                            <strong>STATUS : </strong> <br> &nbsp;
                            <?php echo strtoupper($_SESSION["hak_akses"]) ?>
                        </div>
                    </div>
                </div>
            </li>
            <li class="">
                <a href="?page=home"><i class="fa fa-home fa-fw"></i>&nbsp;Beranda</a>
            </li>
            <li class="">
                <a href="?page=pilih-angkatan&show=jadwal"><i class="fa fa-book fa-fw"></i>&nbsp;Data Jadwal</a>
            </li>
            <li class="">
                <a href="?page=pilih-angkatan&show=peserta"><i class="fa fa-book fa-fw"></i>&nbsp;Data Peserta</a>
            </li>
            <li class="">
                <a href="?page=pilih-angkatan&show=nilai"><i class="fa fa-book fa-fw"></i>&nbsp;Data Nilai</a>
            </li>
        </ul>
    </div>
</nav>