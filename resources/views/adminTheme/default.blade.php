<!DOCTYPE html>
<html>

<head>
    <title>AdminLTE 2 | Dashboard</title>

    <!-- style -->
    @include('adminTheme.style')

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- header part -->
        @include('adminTheme.header')

        <!-- left side bar -->
        @include('adminTheme.SideBar')

        <!-- content part -->
        @yield('content')

        <!-- footer part -->
        @include('adminTheme.footer')

    </div>
    <!-- ./wrapper -->

    <!-- script -->
    @include('adminTheme.script')

</body>

</html>