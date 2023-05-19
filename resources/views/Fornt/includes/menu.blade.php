<div class="header_meta header_meta_one">
    <div class="container">
        <div class="row">
            <ul class="social">
                <li><a href="blog.html#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="blog.html#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="blog.html#"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="blog.html#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="blog.html#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="blog.html#"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <nav class="meta-login">
                <ul>
                    <li class="clock"><i class="lnr lnr-clock"></i>Mon - Fri : 8:00 - 12:00</li>
                    <li class="call"><i class="lnr lnr-smartphone"></i>Call Us +731 234 5678</li>

                    @auth

                        <li><a href="" class="fancybox">{{auth()->user()->name}}</a></li>

                        <li><a class="fancybox" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="#">Logout</a>
                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                        </li>


                    @else

                        <li><a href="{{route('login')}}" class="fancybox">Login</a></li>
                        <li><a href="{{route('register')}}" class="fancybox">Signup</a></li>

                    @endauth


                </ul>
            </nav>
        </div>
    </div>
</div>

<header class="site-header home-one" id="masthead">
    <div class="container">
        <div class="row">

            <div class="site-branding col-xs-12 col-sm-3"> <a href="blog.html#"><img alt="educationpress" class="brand" src="images/logo5.png" /></a> </div>


            <nav class="main-navigation navbar navbar-default" id="site-navigation">
                <div class="navbar-header">
                    <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">

                        @auth


                            <li class="">

                            <a class="" data-toggle="" role="button" aria-haspopup="" aria-expanded="" href="{{route('home')}}">
                                Home <span class=""></span></a>

                            </li>




                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">
                                User <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{route('user.profile.create')}}">profile</a></li>
                            </ul>
                        </li>



                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{{route('home')}}">
                                    Blogs <span class="caret"></span></a>




                                @php
                                    $categories = \App\Models\Admin\Category::where('status',1)->latest()->get()
                                @endphp
                                <ul class=" dropdown-menu" role="menu">



                                    @foreach($categories as $category)
                                        <li><a href="{{ route('pageOne',$category->slug ?? '') }}">{{ $category->name ?? '' }}</a></li>
                                    @endforeach
                                    {{--                                <li><a href="home-2.html">Home Page 2</a></li>--}}
                                </ul>
                            </li>

                        @else


                            <li class="">

                                <a class="" data-toggle="" role="button" aria-haspopup="" aria-expanded="" href="{{route('home')}}">
                                    Home <span class=""></span></a>

                            </li>


                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{{route('home')}}">
                                Blogs <span class="caret"></span></a>




                            @php
                                $categories = \App\Models\Admin\Category::where('status',1)->latest()->get()
                            @endphp
                            <ul class=" dropdown-menu" role="menu">



                                @foreach($categories as $category)
                                    <li><a href="{{ route('pageOne',$category->slug ?? '') }}">{{ $category->name ?? '' }}</a></li>
                                @endforeach
{{--                                <li><a href="home-2.html">Home Page 2</a></li>--}}
                            </ul>
                        </li>




                        @endauth




                        <li class="pull-right"><a title="View your cart" href="shopping-cart.html" class="menu-cart"><i class="lnr lnr-cart"></i> <span>0</span></a></li>
                    </ul>
                </div>
            </nav>

        </div>

    </div>

</header>
