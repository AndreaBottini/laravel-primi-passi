@include('partials._header')

<div class="container">
    <header>
        @yield('header')
    </header>
    
    <main>
        @yield('content')

    </main>
</div>

@include('partials._footer')
