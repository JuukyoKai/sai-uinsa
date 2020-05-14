<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item dropdown <!?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Super Admin</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add_mhs') ?>">Tambahkan Mahasiswa</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/sakelas/add_kelas') ?>">Tambahkan Kelas</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/sadosmen/add_dosmen') ?>">Tambahkan Dosmen</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Daftar Mahasiswa</a>
            
            <a class="dropdown-item" href="<?php echo site_url('admin/sakelas') ?>">Daftar Kelas</a>
            
            <a class="dropdown-item" href="<?php echo site_url('admin/sadosmen') ?>">Daftar Dosmen</a>
        </div>
    </li>

    <li class="nav-item dropdown <!?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Dosen Mentor</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('dosmen/nilaikemajuan') ?>">Daftar Nilai Kemajuan</a>
            <a class="dropdown-item" href="<?php echo site_url('dosmen/nilaitest') ?>">Daftar Nilai Test</a>
            <a class="dropdown-item" href="<?php echo site_url('dosmen/daftarabsen') ?>">Daftar Absen</a>
        </div>
    </li>

    <li class="nav-item dropdown <!?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Mahasiswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/nilai') ?>">Nilai</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/profil') ?>">Profil</a>
        </div>
    </li>

    <li class="nav-item dropdown <!?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Prodi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('prodi/absen') ?>">Absen</a>
            <a class="dropdown-item" href="<?php echo site_url('prodi/hasil_test') ?>">Hasil Test</a>
        </div>
    </li>

 
</ul>
