@extends('MasterAdmin')
@section('cont')
<div class="manageGenre">
    <table border="1" align ="center">
        <center><h1>Manage Genre</h1></center>
        <center><button><a href="/addGenre">Add</button></center></br>
            <tr>
                <th>Name</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach($manGenre as $key=> $m)
            <tr>
                <td>{{$m->genre}}</td>
                <td><button><a href="/updateGenre/{{$m->id}}">Update</button></td>
                <td><button><a href="/deleteGenre/{{$m->id}}">Delete</button></td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
