@extends('MasterGuest')

@section ('cont')
<div class="login">
    <center><h1>LOGIN</h1></center>
    <form action="/login/process"method="post">
        @csrf
        <table align = "center">
            <tr>
                <td>
                    Email
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit">Login</button>
                </td>
            </tr>
            <tr>
            <td>Remember me</td>
            <td><input type="checkbox" name="check" id=""></td>
        </tr>
        </table>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</div>
@endsection
