<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <title>Crowfunding</title>

</head>

<body>

    <div id="app">
        {{ $slot }}
    </div>

    <x-footer />


    <!-- Public js -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://js.stripe.com/v3/"></script>

    <script src="https://kit.fontawesome.com/a40f49bdca.js" crossorigin="anonymous"></script>

</body>

</html>