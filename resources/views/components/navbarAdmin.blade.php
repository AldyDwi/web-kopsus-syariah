<div class="sidebar">
    <div class="logo-details">
        <img src="{{ asset('gambar/logo3.png') }}" alt="logo" class="logo3 icon"/>
        <div class="logo_name">Kopsus Syariah</div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="/admin/admin">
            <i class="bx bx-user"></i>
            <span class="links_name">Admin</span>
            </a>
            <span class="tooltip">Admin</span>
        </li>
        <li>
            <a href="/admin/jabatan">
            <i class="bx bx-sitemap"></i>
            <span class="links_name">Jabatan</span>
            </a>
            <span class="tooltip">Jabatan</span>
        </li>
        <li>
            <a href="/admin/pegawai">
            <i class="bx bx-group"></i>
            <span class="links_name">Pegawai</span>
            </a>
            <span class="tooltip">Pegawai</span>
        </li>
        <li>
            <a href="/admin/berita">
            <i class="bx bx-news"></i>
            <span class="links_name">News</span>
            </a>
            <span class="tooltip">News</span>
        </li>
        <li>
            <a href="{{ route('logout') }}" id="logout">
            <i class="bx bx-log-out" id="log_out"></i>
            <span class="links_name">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
        </li>
    </ul>
  </div>