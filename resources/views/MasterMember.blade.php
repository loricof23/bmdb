<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Member</title>
</head>
<body>
    <div class ="header">
        <ul>
            <li>
                <section>BMDb</section>
            </li>
            <li>
                <a href = "/member">Home</a>
            </li>
            <li>
                <a href = "/profileMember">Profile</a>
            </li>
            <li>
                <a href = "/login">Logout</a>
            </li>
            <li>
                <a href = "/saved">Saved</a>
            </li>

            <li>
                <a href = "/inboxMember">Inbox</a>
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
