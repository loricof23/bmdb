@extends('MasterAdmin')
@section ('cont')
<div class="add">
    <center><h1>Create User</h1></center>
    <form action="/addUser/process"method="post">
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
                    Role
                </td>
                <td>
                    :
                </td>
                <td>
                    <select name="role">
                        <option selected value="Member">Member</option>
                        <option value="Admin">Admin</option>
                    </select>
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
                    <button type="submit">Add</button>
                </td>
            </tr>
        </table>
    </form>

</div>
@endsection
