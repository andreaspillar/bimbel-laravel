<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('layouts.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('layouts.nav')
<div class="content-wrapper">
@yield('apps')
@include('layouts.footer')
</div>
</body>
@include('layouts.scripts')
</html>