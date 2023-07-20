<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">

    {{-- Site Title --}}
    <title>AmFit</title>

    <!-- Links CSS -->
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/prismjs/themes/prism-okaidia.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

    {{-- parsley js --}}
    <link rel="stylesheet" href="{{ asset('assets/css/parsley.css') }}">

    {{-- jquery --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    {{-- parsley js --}}
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <!-- endbuild -->
</head>

<body class="bg-light">

    <div id="db-wrapper">
        @include('layouts.side-navbar')
        @include('layouts.header')

        @yield('content')
    </div>
    </div>



    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/dist/icons.json') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/dist/icons/feather.min.js') }}"></script>



    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarMenu.js') }}"></script>
    <!-- endbuild -->

    {{-- push script here --}}
    @stack('script')
</body>

</html>
