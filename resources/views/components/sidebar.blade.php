<aside id="sidebar" class="sidebar bg-body-tertiary">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="">Rumah Singgah</a>
        </div>
        <button class="close-btn d-md-none"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <ul class="sidebar-nav p-0 mt-5">
        <li class="sidebar-item">
            <a href="" class="sidebar-link">
                <i class="fa-regular fa-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="sidebar-header">
            Menu
        </li>
        {{-- <li class="sidebar-item">
            <a href="" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="true" aria-controls="auth">
                <i class="fa-regular fa-user"></i>
                <span>Auth</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="fa-regular fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </li> --}}
        <li class="sidebar-item">
            <a href="" class="sidebar-link">
                <i class="fa-solid fa-chart-column"></i>
                <span>Beranda</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('pendaftaran') }}" class="sidebar-link">
                <i class="fa-regular fa-newspaper"></i>
                <span>Pendaftar</span>
            </a>
        </li>
    </ul>

    <div class="sidebar-footer">
        <a href="" class="sidebar-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
