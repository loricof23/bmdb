<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Guest</title>
</head>
<body>
    <div class ="header">
        <ul>
            <li>
                <section>BMDb</section>
            </li>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/login">Login</a>
            </li>
            <li>
                <a href="/register">Register</a>
            </li>
            
        </ul>
    </div>
    <div class ="content">
        @yield('cont')
    </div>
    <div class ="footer">
        &copy 2019 copyright <a href="">BMDb</a>
    </div>

</body>
</html>
