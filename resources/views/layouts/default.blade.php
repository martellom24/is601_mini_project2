<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">


    @yield('content')

    @include('includes.jsfooter')
    @include('includes.footer')
</div>
</body>
</html>