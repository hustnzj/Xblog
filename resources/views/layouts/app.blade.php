<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Stay Hungry.Stay Foolish.">
    <meta name="Keywords" content="Php,Android,Laravel,Spring,Java">
    <meta property="og:type" content="website">
    <meta property="og:title" content="lufficc-聪聪">
    <meta property="og:site_name" content="lufficc-聪聪">
    <meta property="og:description" content="Stay Hungry.Stay Foolish.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="lufficc">
    <meta name="twitter:description" content="Stay Hungry.Stay Foolish.">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>lufficc-聪聪 @yield('title')</title>

    <!-- Styles -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600|Roboto Mono' rel='stylesheet' type='text/css'>
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
@yield('css')
<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-81713716-2', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<body>
@include('layouts.header')
<section id="app" class="content-wrap" style="margin-top: 35px">
    <div class="container">
        @include('partials.errors')
        @include('partials.success')
        @yield('content')
    </div>
</section>

@include('layouts.footer')
<script src="//cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/vue/2.0.0-rc.1/vue.min.js"></script>
@yield('script')
</body>
</html>
