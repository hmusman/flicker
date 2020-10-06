@include('seller.components.header')

@yield('extra-links')

@stack('extra-css')

@yield('content')

@include('seller.components.footer')

@yield('extra-scripts')

@stack('extra-js')