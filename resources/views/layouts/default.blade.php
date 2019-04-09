<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    @include('includes.nav')

    @yield('content')

    @include('includes.jsfooter')
    @include('includes.footer')

</body>
</html>