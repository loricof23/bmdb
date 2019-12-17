@extends('MasterAdmin')
@section('cont')
<div class="manageMovie">
    <table border="1" align ="center">
        <center><h1>Manage Movie</h1></center>
        <center><button><a href="/addMovie">Add</button></center></br>
            <tr>
                <th>PostedBy</th>
                <th>Genre</th>
                <th>Title</th>
                <th>Picture</th>
                <th>Description</th>
                <th>Rating</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach($manMovie as $key=> $m)
            <tr>

                <td>{{$m->postBy}}</td>
                <td>{{$m->genre}}</td>
                <td>{{$m->title}}</td>
                <td><img src="{{ asset('image/' . $m->photo)}}" /></td>
                <td>{{$m->description}}</td>
                <td>{{$m->rating}}</td>
                <td><button><a href="/updateMovie/{{$m->id}}">Update</button></td>
                <td><button><a href="/deleteMovie/{{$m->id}}">Delete</button></td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
