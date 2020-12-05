<!doctype html>
<html lang="en">
<head>
@include('admin.layouts.partials._meta')
</head>
<body>
@include('admin.layouts.base._sidebar')
<div class="page">
    @include('admin.layouts.base.navbar')

    @yield('content')

</div>


@include('admin.layouts.partials._scripts')
</body>
</html>