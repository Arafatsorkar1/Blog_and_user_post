<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->




    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{route('categories.index')}}">
                    <i class="bi bi-circle"></i><span>Add</span>
                </a>
            </li>
            <li>
                <a href="{{route('categories.create')}}">
                    <i class="bi bi-circle"></i><span>Details</span>
                </a>
            </li>

        </ul>
    </li><!-- End Components Nav -->




    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ff-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="ff-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{route('products.create')}}">
                    <i class="bi bi-circle"></i><span>Add</span>
                </a>
            </li>
            <li>
                <a href="{{route('products.index')}}">
                    <i class="bi bi-circle"></i><span>Details</span>
                </a>
            </li>

        </ul>
    </li><!-- End Components Nav -->




    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#fff-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="fff-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="components-alerts.html">
                    <i class="bi bi-circle"></i><span>Alerts</span>
                </a>
            </li>
            <li>
                <a href="components-accordion.html">
                    <i class="bi bi-circle"></i><span>Accordion</span>
                </a>
            </li>

        </ul>
    </li><!-- End Components Nav -->


















    {{--    <li class="nav-heading">Pages</li>--}}

    {{--    <li class="nav-item">--}}
    {{--        <a class="nav-link collapsed" href="users-profile.html">--}}
    {{--            <i class="bi bi-person"></i>--}}
    {{--            <span>Profile</span>--}}
    {{--        </a>--}}
    {{--    </li><!-- End Profile Page Nav -->--}}

    {{--    <li class="nav-item">--}}
    {{--        <a class="nav-link collapsed" href="pages-faq.html">--}}
    {{--            <i class="bi bi-question-circle"></i>--}}
    {{--            <span>F.A.Q</span>--}}
    {{--        </a>--}}
    {{--    </li><!-- End F.A.Q Page Nav -->--}}

    {{--    <li class="nav-item">--}}
    {{--        <a class="nav-link collapsed" href="pages-contact.html">--}}
    {{--            <i class="bi bi-envelope"></i>--}}
    {{--            <span>Contact</span>--}}
    {{--        </a>--}}
    {{--    </li><!-- End Contact Page Nav -->--}}

    {{--    <li class="nav-item">--}}
    {{--        <a class="nav-link collapsed" href="pages-register.html">--}}
    {{--            <i class="bi bi-card-list"></i>--}}
    {{--            <span>Register</span>--}}
    {{--        </a>--}}
    {{--    </li><!-- End Register Page Nav -->--}}

    {{--    <li class="nav-item">--}}
    {{--        <a class="nav-link collapsed" href="pages-login.html">--}}
    {{--            <i class="bi bi-box-arrow-in-right"></i>--}}
    {{--            <span>Login</span>--}}
    {{--        </a>--}}
    {{--    </li><!-- End Login Page Nav -->--}}

    {{--    <li class="nav-item">--}}
    {{--        <a class="nav-link collapsed" href="pages-error-404.html">--}}
    {{--            <i class="bi bi-dash-circle"></i>--}}
    {{--            <span>Error 404</span>--}}
    {{--        </a>--}}
    {{--    </li><!-- End Error 404 Page Nav -->--}}

    {{--    <li class="nav-item">--}}
    {{--        <a class="nav-link collapsed" href="pages-blank.html">--}}
    {{--            <i class="bi bi-file-earmark"></i>--}}
    {{--            <span>Blank</span>--}}
    {{--        </a>--}}
    {{--    </li><!-- End Blank Page Nav -->--}}

</ul>
