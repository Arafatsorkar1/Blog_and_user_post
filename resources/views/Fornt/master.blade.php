<!DOCTYPE html>
<html lang="en">

<!--blog23:54  -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>


    @include('Fornt.includes.css')
</head>
<body>

@include('Fornt.includes.menu')



@yield('body')

@include('Fornt.includes.footer')

@include('Fornt.includes.js')
</body>

<!--blog23:55  -->
</html>
