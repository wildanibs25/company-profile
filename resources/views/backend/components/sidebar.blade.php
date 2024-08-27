<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/dashboard" class="text-nowrap logo-img d-flex align-items-center">
                <img src="{{ Storage::url($about->school_logo) }}" class="img-fluid "
                    style="width:40px; height:40px; object-fit:contain; object-position:center;" alt="">
                    <span class="ms-2 text-dark fs-3 fw-bold">{{ $about->school_name }}</span>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Isi</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/about-profile" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Tentang Sekolah</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/major" aria-expanded="false">
                        <span>
                            <i class="ti ti-star"></i>
                        </span>
                        <span class="hide-menu">Jurusan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/teacher" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-description"></i>
                        </span>
                        <span class="hide-menu">Guru</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/headmaster" aria-expanded="false">
                        <span>
                            <i class="ti ti-crown"></i>
                        </span>
                        <span class="hide-menu">Kepala Sekolah</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/visi-mission" aria-expanded="false">
                        <span>
                            <i class="ti ti-pencil"></i>
                        </span>
                        <span class="hide-menu">Visi Misi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/announcement" aria-expanded="false">
                        <span>
                            <i class="ti ti-check"></i>
                        </span>
                        <span class="hide-menu">Pengumuman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/user" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Pengguna</span>
                    </a>
                </li>
                 <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Notifikasi</span>
                </li>
                 <li class="sidebar-item">
                    <a class="sidebar-link" href="/get-register" aria-expanded="false">
                        <span>
                            <i class="ti ti-bookmark"></i>
                        </span>
                        <span class="hide-menu">Registrasi</span>
                    </a>
                </li>
                 <li class="sidebar-item">
                    <a class="sidebar-link" href="/get-contact" aria-expanded="false">
                        <span>
                            <i class="ti ti-briefcase"></i>
                        </span>
                        <span class="hide-menu">Pesan</span>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
