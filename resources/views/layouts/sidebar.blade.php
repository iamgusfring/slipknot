<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/home') }}" class="brand-link">
        <img src="{{ asset('img/admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            {{ config('app.name', 'Laravel') }}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ asset('/home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/dashboardfacebook') }}" class="nav-link">
                        <i class="nav-icon fab fa-facebook"></i>
                        <p>
                            Facebook
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/dashboardinstagram') }}" class="nav-link">
                        <i class="nav-icon fab fa-instagram"></i>
                        <p>
                            Instagram
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/dashboardtwitter') }}" class="nav-link">
                        <i class="nav-icon fab fa-twitter"></i>
                        <p>
                            Twitter
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/dashboardlinkedin') }}" class="nav-link">
                        <i class="nav-icon fab fa-linkedin"></i>
                        <p>
                            Linkedin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/dashboardpaypal') }}" class="nav-link">
                        <i class="nav-icon fab fa-paypal"></i>
                        <p>
                            Paypal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/dashboardmkt') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-store"></i>
                        <p>
                            Diunsa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/dashboardvisitor') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-users"></i>
                        <p>
                            Visitor
                        </p>
                    </a>
                </li>
            
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>