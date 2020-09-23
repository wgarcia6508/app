
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <style>
    .active a {

        color: red;
        text-decoration: none;
    }

    .active2 a {

        color: green;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <pre>

      <!-- {{dump(request()->url())}} -->
      {{dump(request()->url())}}
</pre>
    <h1>HOME</h1>
    execelente {{$nombre ??"INVITADO"}}
    @include('partials.nav')

    @yield('content')

</body>

</html>