<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark" >
        <div class="navbar-header" style="background-color:white;" data-logobg="skin6">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
            <a class="navbar-brand" href="/admin/home">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!-- Dark Logo icon -->
                <img src="{{ asset('assets/plugins/images/logo-klontong.png') }}" class="w-100" alt="homepage" />
              </b>
              <!--End Logo icon -->
              {{-- <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="{{ asset('assets/plugins/images/logo-text.png') }}" alt="homepage" />
              </span> --}}
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            {{-- <a class="nav-toggler waves-effect waves-light text-dark d-block md-none"
              href="javascript:void(0)"></a> --}}
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="background-color:red;">
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li>
                    <a class="profile-pic" href="#">
                        <img src="{{ asset('assets/plugins/images/users/user.jpg') }}" alt="user-img" width="36"
                        class="img-circle"><span class="text-white font-medium">{{ Auth::user()->name }}</span></a>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
