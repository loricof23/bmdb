@extends('MasterGuest')

@section ('cont')
<div class="register">
    <center><h1>Register</h1></center>
    <form action="/register/process"method="post">
        @csrf
        <table align = "center">
            <tr>
                <td>
                    Fullname
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
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
                    Confirm Password
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="password" name="confpassword">
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="radio" name="sex" value="M"> Male
                    <input type="radio" name="sex" value="F"> Female

                </td>
            </tr>
            <tr>
                <td>
                    Address
                </td>
                <td>
                    :
                </td>
                <td>
                    <textarea rows="4" cols="50" name="address">
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>
                    DoB
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="date" name="bday">
                </td>
            </tr>
            <tr>
                <td>
                    Upload Image
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="file" name="file_upload">
                </td>
            </tr>


            <tr>
                <td>
                    <button type="submit">Register</button>
                </td>
            </tr>
        </table>
    </form>

</div>
@endsection
