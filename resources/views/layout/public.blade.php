<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title') - CinéStar</title>
    @include('bootstrap_css_and_js')
</head>
<body>
    @include('public.partials.nav-bar')
    <div class="container" style="margin-top: 100px">
        @yield('content')
    </div>
</body>
</html>