
<!DOCTYPE html>


<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>PROJEKT</title>
    <link rel="apple-touch-icon" sizes="57x57" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://coreui.io/demo/4.0/free/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://coreui.io/demo/4.0/free/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://coreui.io/demo/4.0/free/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://coreui.io/demo/4.0/free/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://coreui.io/demo/4.0/free/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://coreui.io/demo/4.0/free/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://coreui.io/demo/4.0/free/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://coreui.io/demo/4.0/free/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="https://coreui.io/demo/4.0/free/css/vendors/simplebar.css">

    <link href="https://coreui.io/demo/4.0/free/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="https://coreui.io/demo/4.0/free/css/examples.css" rel="stylesheet">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-118965717-1');
    </script>
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    @include('partials.sidebar')
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    @include('partials.header')

    @yield('content')

{{--    <footer class="footer">--}}
{{--        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2021 creativeLabs.</div>--}}
{{--        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components</a></div>--}}
{{--    </footer>--}}
</div>

<script src="https://coreui.io/demo/4.0/free/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="https://coreui.io/demo/4.0/free/vendors/simplebar/js/simplebar.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>

<script src="https://coreui.io/demo/4.0/free/vendors/chart.js/js/chart.min.js"></script>
<script src="https://coreui.io/demo/4.0/free/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
<script src="https://coreui.io/demo/4.0/free/vendors/@coreui/utils/js/coreui-utils.js"></script>
<script src="https://coreui.io/demo/4.0/free/js/main.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

@yield('scripts')

</body>
</html>
