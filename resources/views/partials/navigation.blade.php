  <!-- Navigation Bar-->
<header id="topnav">
<!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>

              <!--chuong thong bao doan code lưu tại word ngoài destop-->
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">

                          <i class="mdi mdi-chevron-down"></i>Admin
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                Welcome !
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{ route('dang-xuat') }}" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ route('trang-chu')}}" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo-dark.png')}}" alt="" height="26">
                        <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="{{ asset('images/logo-sm.png')}}" alt="" height="28">
                    </span>
                </a>
            </div>


            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{route('trang-chu')}}">
                            <i class=" la la-home"></i>Trang chủ <div class="arrow-down">
                                </div>
                            </a>

                    </li>

                    <li class="has-submenu">
                        <a href="{{route('linh-vuc.danh-sach')}}">
                            <i class=" icon-layers"></i>Lĩnh vực <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('linh-vuc.danh-sach')}}">Danh Sách Lĩnh Vực</a>
                            </li>
                            <li>
                                <a href="{{route('linh-vuc.them-moi')}}">Thêm Lĩnh Vực</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('goi_credit.danh-sach')}}"><i class=" la la-diamond"></i>Danh sách Credit <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('goi_credit.danh-sach')}}">Danh Sách Credit</a>
                            </li>
                            <li>
                                <a href="{{route('goi_credit.them-moi')}}">Thêm Gói Credit</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('luot-choi.danh-sach')}}"> <i class=" icon-game-controller"></i>Lượt chơi <div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <a href="{{route('luot-choi.danh-sach')}}">Danh Sách Lượt Chơi</a>
                            </li>
                        </ul>
                    </li>


                    <li class="has-submenu">
                        <a href="{{route('cau_hoi.ds_cau_hoi')}}"> <i class="icon-question"></i>Câu hỏi <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('cau_hoi.ds_cau_hoi')}}">Danh Sách Câu Hỏi</a>
                            </li>
                            <li>
                                <a href="{{route('cau_hoi.them_moi')}}">Thêm Câu Hỏi</a>
                            </li>
                            <li>
                                <a href="{{route('cau_hoi.thung_rac_cau_hoi')}}">Thùng Rác Câu Hỏi</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('nguoi_choi.ds_nguoi_choi')}}"> <i class="icon-user"></i>Người Chơi <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('nguoi_choi.ds_nguoi_choi')}}">Danh Sách Người Chơi</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('ds_lichsumuacredit')}}"> <i class=" icon-book-open"></i> Lịch Sử Mua Credit <div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="{{route('ds_lichsumuacredit')}}">Danh Sách Mua Credit</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
<!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->

