<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <div class="user-section">
                    <!-- <div class="user-section-inner">
                        <img src="../../assets/vendor/siminta/img/user.jpg" alt="foto-profil">
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
            <li>
                <a href="#"><i class="fa fa-book fa-fw"></i>&nbsp;Jadwal<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=lihat-jadwal"><i class="fa fa-angle-right"></i> Lihat Jadwal</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-book fa-fw"></i>&nbsp;Materi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=lihat-materi"><i class="fa fa-angle-right"></i> Lihat Materi</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-book fa-fw"></i>&nbsp;Nilai<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=lihat-nilai"><i class="fa fa-angle-right"></i> Lihat Nilai</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>