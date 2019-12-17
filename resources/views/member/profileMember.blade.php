@extends('MasterMember')
@section('cont')
<div class ="profileMember">
    <table border="1"align = "center">
        <tr>
            <th>profile</th>
            <th>name</th>
            <th>email</th>
            <th>address</th>
        </tr>
        @foreach($profile as $key=> $p)
        <tr>
            <td><img src="{{ asset('image/'. $p->photo)}}" /></td>

            <td>{{$p->name}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->address}}</td>

        </tr>
        @endforeach
    </table>
</div>
@endsection
