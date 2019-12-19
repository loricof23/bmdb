@extends('MasterAdmin')
@section('cont')
<div class="profileAdmin">
    <table border="1" align ="center">
        @foreach($profile as $key=> $p)
        <tr>
            <td rowspan="3"><img src="{{ asset('image/' . $p->photo)}}"></td>
            <td>{{$p->name}}</td>
            <td><button><a href="/updateProfile/{{$p->id}}">Update</button></td>
        </tr>
        <tr>
            <td>{{$p->email}}</td>
        </tr>
        <tr>
            <td>{{$p->address}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
