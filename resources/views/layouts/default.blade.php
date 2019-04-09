<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    @include('includes.nav')
    <main role="main">
        @yield('content')
    </main>

    @include('includes.jsfooter')
    @include('includes.footer')

</body>
</html>