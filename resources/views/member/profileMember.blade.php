@extends('MasterMember')
@section('cont')
<div class ="profileMember">
    <table border="1"align = "center">
        @foreach($profile as $key=> $p)
        <tr>
            <td rowspan="3"><img src="{{ asset('image/' . $p->photo)}}"></td>
            <td>{{$p->name}}</td>
            <td><textarea rows="4" cols="50" name="Message">
            </textarea></td>

        </tr>
        <tr>
            <td>{{$p->email}}</td>
            <td><button>Send Message</button></td>
        </tr>
        <tr>
            <td>{{$p->address}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
