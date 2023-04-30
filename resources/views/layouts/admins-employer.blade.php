@include('includes.head')

@include('includes.styles')

@yield('styles')

</head>
<body>

@include('includes.navigation-employer')

@include('includes.flash-message')

@yield('content')

@include('includes.footer')

@include('includes.scripts')

</body>
</html>
