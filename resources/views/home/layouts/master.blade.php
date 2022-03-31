<!DOCTYPE html>
<html lang="en">
    @include('home.layouts.heading')
<body class="w-full h-screen overflow-hidden" x-data="{ showInfo: true, showSearch: false }">
    @include('home.layouts.navbar')


    @yield('content')

    @include('home.layouts.scripts')
</body>
</html>
