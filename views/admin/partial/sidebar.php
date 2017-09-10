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
                <a href="#"><i class="fa fa-male fa-fw"></i>&nbsp;Admin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-admin">Tambah Admin</a>
                        <a href="?page=lihat-admin">Lihat Admin</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-male fa-fw"></i>&nbsp;Asisten Manajer<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-asmen">Input Asisten Manajer</a>
                        <a href="?page=lihat-asmen">Lihat Asisten Manajer</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-male fa-fw"></i>&nbsp;Staff<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-staff">Input Staff</a>
                        <a href="?page=lihat-staff">Lihat Staff</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-male fa-fw"></i>&nbsp;Instruktur<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-instruktur">Input Instruktur </a>
                        <a href="?page=lihat-instruktur">Lihat Instruktur </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-male fa-fw"></i>&nbsp;Peserta<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-peserta">Input Peserta </a>
                        <a href="?page=lihat-peserta">Lihat Peserta</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-code-fork fa-fw"></i>&nbsp;Angkatan Diklat<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-angkatan">Input Angkatan Diklat</a>
                        <a href="?page=lihat-angkatan">Lihat Angkatan Diklat</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-clipboard fa-fw"></i>&nbsp;Mata Pelajaran<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-mapel">Input Mata Pelajaran </a>
                        <a href="?page=lihat-mapel">Lihat Mata Pelajaran</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-book fa-fw"></i>&nbsp;Jadwal Diklat<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=input-jadwal">Input Jadwal Diklat </a>
                        <a href="?page=lihat-jadwal">Lihat Jadwal Diklat</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-male fa-fw"></i>&nbsp;Rekap Nilai<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Lihat Nilai Peserta</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>