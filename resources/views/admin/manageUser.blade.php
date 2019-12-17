@extends('MasterAdmin')
@section('cont')
<div class="manageUser">
    <table border="1" align ="center">
        <center><h1>Manage User</h1></center>
        <center><button><a href="/addUser">Add</button></center></br>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Role</th>
                <th>Gender</th>
                <th>Address</th>
                <th>ProfilePicture</th>
                <th>DoB</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach($manUser as $key=> $m)
            <tr>

                <td>{{$m->name}}</td>
                <td>{{$m->email}}</td>
                <td>{{$m->role}}</td>
                <td>{{$m->gender}}</td>
                <td>{{$m->address}}</td>
                <td><img src="{{ asset('image/' . $m->photo)}}" /></td>
                <td>{{$m->birthday}}</td>
                <td><button><a href="/updateUser/{{$m->id}}">Update</button></td>
                <td><button><a href="/deleteUser/{{$m->id}}">Delete</button></td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
