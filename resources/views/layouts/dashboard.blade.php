<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.dashboard.style')
    @stack('addon-style')
</head>

<body>
    {{-- Navbar --}}
    @include('includes.dashboard.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.dashboard.footer')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.dashboard.script')
    @stack('addon-script')

</body>

</html>
