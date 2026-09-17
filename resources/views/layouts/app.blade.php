<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Task List App</title>
    @yield('styles')
</head>

<body
    style="background-color: rgb(172, 229, 229) ; display:flex ; flex-direction:column ; justify-content:center ; align-items: center; 
    margin: 0;">
    <h1>@yield('title')</h1>

    <div>
        @if(session()->has('success'))
        <div>{{ session('success') }}</div>
        @endif

        @yield('content')


    </div>

</body>

</html>
