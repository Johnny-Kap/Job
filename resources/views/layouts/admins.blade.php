@include('includes.head')

@include('includes.styles')

@stack('style')

@yield('styles')

</head>
<body>

@include('includes.navigation')

@include('includes.flash-message')

@yield('content')

@include('includes.footer')

@include('includes.scripts')

@stack('scripts')

</body>
</html>
