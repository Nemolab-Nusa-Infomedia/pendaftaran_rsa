<nav class="navbar navbar-expand border-bottom">
    <div class="">
        <button type="button" class="toggler-btn">
            <i class="fa-solid fa-bars toggler-icon"></i>
        </button>
    </div>

    <div class="ms-auto">
        <div class="d-flex gap-3 align-items-center">
            <div class="form-group">
                <input type="search" placeholder="search" class="form-control">
            </div>
            <a href="" class="text-dark fs-5"><i class="fa-solid fa-bell"></i></a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/vindra.jpeg') }}" class="rounded-3" width="40px" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end rounded">
                        <a href="#" class="dropdown-item">
                            <i class="fa-regular fa-user"></i>
                            <span>Profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
