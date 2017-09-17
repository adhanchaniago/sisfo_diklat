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
            <li>
                <a href="#"><i class="fa fa-id-badge fa-fw"></i>&nbsp;Administrator<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-admin"><i class="fa fa-angle-right"></i> Input Administrator</a>
                    </li>
                    <li>
                        <a href="?page=lihat-admin"><i class="fa fa-angle-right"></i> Data Administrator</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-id-badge fa-fw"></i>&nbsp;Asisten Manajer<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-asmen"><i class="fa fa-angle-right"></i> Input Asisten Manajer</a>
                    </li>
                    <li>
                        <a href="?page=lihat-asmen"><i class="fa fa-angle-right"></i> Data Asisten Manajer</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-id-badge fa-fw"></i>&nbsp;Staff<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-staff"><i class="fa fa-angle-right"></i> Input Staff</a>
                    </li>
                    <li>
                        <a href="?page=lihat-staff"><i class="fa fa-angle-right"></i> Data Staff</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-id-badge fa-fw"></i>&nbsp;Instruktur<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-instruktur"><i class="fa fa-angle-right"></i> Input Instruktur </a>
                    </li>
                    <li>
                        <a href="?page=lihat-instruktur"><i class="fa fa-angle-right"></i> Data Instruktur </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-id-badge fa-fw"></i>&nbsp;Peserta<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-peserta"><i class="fa fa-angle-right"></i> Input Peserta </a>
                    </li>
                    <li>
                        <a href="?page=pilih-angkatan&show=peserta"><i class="fa fa-angle-right"></i> Data Peserta</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-code-fork fa-fw"></i>&nbsp;Angkatan Diklat<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-angkatan"><i class="fa fa-angle-right"></i> Input Angkatan Diklat</a>
                    </li>
                    <li>
                        <a href="?page=lihat-angkatan"><i class="fa fa-angle-right"></i> Data Angkatan Diklat</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-clipboard fa-fw"></i>&nbsp;Mata Pelajaran<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-mapel">Input Mata Pelajaran </a>
                    </li>
                    <li>
                        <a href="?page=lihat-mapel">Lihat Mata Pelajaran</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-clipboard fa-fw"></i>&nbsp;Kamar<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-kamar">Input Kamar</a>
                    </li>
                    <li>
                        <a href="?page=lihat-kamar">Lihat Kamar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-book fa-fw"></i>&nbsp;Jadwal Diklat<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-jadwal">Input Jadwal Diklat </a>
                    </li>
                    <li>
                        <a href="?page=lihat-jadwal">Lihat Jadwal Diklat</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-id-badge fa-fw"></i>&nbsp;Rekap Nilai<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Lihat Nilai Peserta</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>