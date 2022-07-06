<!DOCTYPE html>
<html lang="en">
@include('layouts/head')
<body>
    @include('layouts/sidebar')
    @include('layouts/navbar')
    @yield('content')
    @include('layouts/footer')
    @include('layouts/javascript')
</body>
</html>