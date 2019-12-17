@extends('MasterAdmin')
@section ('cont')
<div class="update">
    <center><h1>Edit User</h1></center>
    <form action="/updateUser/{{$user->id}}/process"method="post">
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
                    <input type="text" name="name" value="{{$user->name}}">
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
                    <input type="text" name="email" value="{{$user->email}}">
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
                        @if($user->role =="Member")
                        <option selected value="Member">Member</option>
                        @else
                        <option selected ="Member">Member</option>
                        @endif
                        @if($user->role =="Admin")
                        <option selected value="Admin">Admin</option>
                        @else
                        <option value="Admin">Admin</option>
                        @endif
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
                    <input type="password" name="password" value="{{$user->password}}">
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
                    <input type="password" name="confpassword" value="{{$user->password}}">
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
                    @if($user->gender =="M")
                    <input type="radio" name="sex" checked value="M"> Male
                    @else
                    <input type="radio" name="sex" value="M"> Male
                    @endif
                    @if($user->gender =="F")
                    <input type="radio" name="sex" checked value="F"> Female
                    @else
                    <input type="radio" name="sex" value="F"> Female
                    @endif
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
                    <input type="date" name="bday" value="{{$user->birthday}}">
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
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>

</div>
@endsection
