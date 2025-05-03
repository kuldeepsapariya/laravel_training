<!DOCTYPE html>
<html lang="en">
<head>

    <title>Index - Yummy Bootstrap Template</title>
    
    <!-- style -->
    @include('frontTheme.style')
</head>

<body class="index-page">

    <!-- header part -->
    @include('frontTheme.header')

    @yield('content')

    <!-- footer part -->
    @include('frontTheme.footer')

    <!-- script -->
    @include('frontTheme.script')

</body>

</html>