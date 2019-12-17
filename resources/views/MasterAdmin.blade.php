<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Admin</title>
</head>
<body>
    <div class ="header">
        <ul>
            <li>
                <section>BMDb</section>
            </li>
            <li>
                <a href = "/admin">Home</a>
            </li>
            <li>
                <a href = "/profileAdmin">Profile</a>
            </li>
            <li>
                <a href = "/inboxAdmin">Inbox</a>
            </li>
            <li>
                <a href = "/login">Logout</a>
            </li>
            <li>
                <a href = "/manageUser">Manage User</a>
            </li>
            <li>
                <a href = "/manageMovie">Manage Movie</a>
            </li>
            <li>
                <a href = "/manageGenre">Manage Genre </a>
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
