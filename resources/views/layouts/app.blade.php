@include('includes.head')
<div id="app">
    @include('includes.nav')

    <main class="py-4">
        @yield('content')
    </main>
</div>
@include('includes.jsfooter')
@include('includes.footer')
