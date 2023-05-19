<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('back.Dashboard.include.css')


</head>

<body>

@include('back.Dashboard.include.header')

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    @include('back.Dashboard.include.menu')

</aside><!-- End Sidebar-->

<main id="main" class="main">

    @yield('body')

</main><!-- End #main -->

@include('back.Dashboard.include.footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('back.Dashboard.include.js')

</body>

</html>
