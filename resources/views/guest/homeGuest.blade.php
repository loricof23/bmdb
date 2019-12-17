@extends('MasterGuest')
@section('cont')
<div class ="guest">
    <form action="/process" method="get">
        <input type="text" name="search" placeholder="Cari title.." value="{{ old('search') }}">
		<input type="submit" value="CARI">
        <!-- <input type="text" name="search" value ="search movie title or genre"> -->
    </form>
    @foreach($listMovies as $key=> $m)
    <table>
        <tr>
            <td rowspan="4"> <img src="{{ asset('image/' .$m->photo)}}"/></td>
            <td><t>{{$m->title}}<t></td>
            </tr>
            <tr>
                <td><g>{{$m->genre}}<g></td>
                </tr>
                <tr>
                    <td>{{$m->description}}</td>
                </tr>
                <tr>
                    <td>{{$m->rating}}</td>
                </tr>
            </table>
            @endforeach

        </div>
        @endsection
