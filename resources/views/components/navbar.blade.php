<nav class="navbar navbar-expand border-bottom">
    <div class="">
        <button type="button" class="toggler-btn">
            <i class="fa-solid fa-bars toggler-icon"></i>
        </button>
    </div>

    <div class="ms-auto">
        <div class="d-flex gap-4 align-items-center">
            <div class="form-group">
                <input type="search" placeholder="search" class="form-control">
            </div>

            <a href="{{ route('notification') }}" class="text-dark fs-5 position-relative">
                <i class="fa-solid fa-bell"></i>
                @if($pendingPatientCount > 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 9px">
                        {{ $pendingPatientCount > 99 ? '99+' : $pendingPatientCount }}
                        <span class="visually-hidden">unread messages</span>
                    </span>
                @endif
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/profil-dummy.jpg') }}" class="rounded-3" width="40px" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end rounded">
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
