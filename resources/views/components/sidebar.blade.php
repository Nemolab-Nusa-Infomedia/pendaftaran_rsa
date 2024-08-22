<aside id="sidebar" class="sidebar bg-body-tertiary">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="">Rumah Singgah</a>
        </div>
        <button class="close-btn d-md-none"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <ul class="sidebar-nav p-0 mt-5">
        <li class="sidebar-header">
            Menu
        </li>
        <li class="sidebar-item">
            <a href="{{ route('pendaftaran') }}" class="sidebar-link">
                <i class="fa-regular fa-newspaper"></i>
                <span>Pasien</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('data-donasi') }}" class="sidebar-link">
                <i class="fa-solid fa-hand-holding-medical"></i>
                <span>Donasi</span>
            </a>
        </li>
    </ul>

    <div class="sidebar-footer">
        <a href="{{ route('logout') }}" class="sidebar-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
