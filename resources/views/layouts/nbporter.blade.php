    <style>
        .toggle-sidebar-btn {
            cursor: pointer;
        }

        #sidebar {
            position: fixed;
            top: 0;
            left: -250px;
            height: 100%;
            width: 250px;
            transition: all 0.3s;
        }

        #sidebar.active {
            left: 0;
        }
    </style>
    <i class="bi bi-list toggle-sidebar-btn d-lg-none"></i>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".toggle-sidebar-btn").click(function () {
                $("#sidebar").toggleClass("active");
            });
        });
    </script>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('porter') }}" class="logo d-flex align-items-center">
                <img src="{{ asset ('porterassets/img/20230705_015017.png') }}" alt="">
                <span id="Judul" class="d-none d-lg-block">TouLEOS</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown">

                    <!-- Notification Icon -->
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge badge-number"
                            style="background-color: #964B00;">{{ $unreadNotificationsCount }}</span>
                    </a>
                    <!-- Notification Dropdown -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have {{ $unreadNotificationsCount }} new notifications
                            <a href="#"><span class="badge rounded-pill p-2 ms-2"
                                    style="background-color: #964B00;">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        @foreach($notifications as $notification)
                            <li class="notification-item">
                                <i class="bi bi-exclamation-circle text-warning"></i>
                                <div>
                                    <h4>{{ $notification->data['title'] }}</h4>
                                    <p>{{ $notification->data['message'] }}</p>
                                    <p>{{ $notification->created_at->diffForHumans() }}</p>
                                    <!-- Button to trigger the modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#acceptModal{{ $notification->id }}">
                                        Accept Service
                                    </button>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <!-- Accept Modal -->
                            <div class="modal fade" id="acceptModal{{ $notification->id }}" tabindex="-1"
                                aria-labelledby="acceptModalLabel{{ $notification->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="acceptModalLabel{{ $notification->id }}">
                                                Accept Service Request</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form for accepting and setting the price -->
                                            <form
                                                action="{{ route('accRequest', ['id' => $notification->data['service_requests_id']]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="price" class="form-label">Price (Rp)</label>
                                                    <input type="number" class="form-control" id="price" name="harga"
                                                        required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Accept</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ asset('porterassets/img/foto.png') }}" alt="Profile"
                            class="rounded-circle">
                        <span id="Judulmu" class="d-none d-md-block dropdown-toggle ps-2"
                            style="color:black;">{{ auth()->user()->nama }}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->user()->nama }}</h6>
                            <span>{{ auth()->user()->role }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ route('userporter') }}">
                                <i class="bi bi-person"></i>
                                <span>Profil Anda</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ route('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Keluar</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>

    </header>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <br>
            <br>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('porter') }}">
                    <i class="bi bi-grid"></i>
                    <span id="Judulmu">Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link " href="{{ route('userporter') }}">
                    <i class="bi bi-person"></i>
                    <span id="Judulmu">Profil Anda</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link " href="{{ route('userpromot') }}">
                    <i class="bi bi-basket2"></i>
                    <span id="Judulmu">Promosi</span>
                </a>
            </li><!-- End Profile Page Promotion -->

        </ul>

    </aside><!-- End Sidebar-->
