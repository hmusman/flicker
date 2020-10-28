@include('admin.components.header')

@yield('extra-links')

@stack('extra-css')

@yield('content')

@include('admin.components.footer')

@yield('extra-scripts')

@stack('extra-js')