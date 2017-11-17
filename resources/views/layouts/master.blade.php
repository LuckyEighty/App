<html>
<head lang="{{ app()->getLocale() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container" style="margin-top: 20px; background: #fafafa">
        <div class="row">
            <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
                <navbar></navbar>
            </div>
            <div class="col-xs-8 col-sm-10 col-md-10 col-lg-10">
                <contant></contant>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>

