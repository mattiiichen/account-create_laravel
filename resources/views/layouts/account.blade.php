<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Create</title>
</head>
<body>
<main>
    @if(session()->has('notice'))
        <div>
            {{ session()->get('notice')}}
        </div>
    @endif
    @yield('main')
</main>
</body>
</html>