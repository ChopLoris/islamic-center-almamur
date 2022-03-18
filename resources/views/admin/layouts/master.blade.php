<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
>

    @include('admin.layouts.style')

    <body>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                @include('admin.layouts.sidebar')

                <div class="layout-page">
                    @include('admin.layouts.navbar')

                    <div class="content-wrapper">
                        @yield('content')

                        @include('admin.layouts.footer')
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.scripts')
    </body>
</html>
