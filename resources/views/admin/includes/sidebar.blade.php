<div class="sidebar">
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('admin/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::guard('admin')->user()->name }}
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Pengguna & Toko</h4>
                </li>
                <li class="nav-item {{ request()->is('admin/pengguna') ? 'active' : '' }}">
                    <a href="{{ route('admin.pengguna.index') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/profil-toko') ? 'active' : '' }}">
                    <a href="{{ route('admin.profil-toko.index') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Profil Toko</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Produk</h4>
                </li>
                <li class="nav-item {{ request()->is('admin/kategori', 'admin/sub-kategori') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Kategori</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->is('admin/kategori', 'admin/sub-kategori') ? 'show' : '' }}" id="forms">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('admin/kategori') ? 'active' : '' }}">
                                <a href="{{ route('admin.kategori.index') }}">
                                    <span class="sub-item">Kategori</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/sub-kategori') ? 'active' : '' }}">
                                <a href="{{ route('admin.sub-kategori.index') }}">
                                    <span class="sub-item">Sub Kategori</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('admin/produk') ? 'active' : '' }}">
                    <a href="{{ route('admin.produk.index') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Artikel</h4>
                </li>
                <li class="nav-item {{ request()->is('admin/artikel') ? 'active' : '' }}">
                    <a href="{{ route('admin.artikel.index') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Transaksi</h4>
                </li>
                <li class="nav-item {{ request()->is('admin/transaksi') ? 'active' : '' }}">
                    <a href="{{ route('admin.transaksi.index') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
