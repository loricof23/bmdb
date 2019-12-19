@extends('MasterGuest')
@section('cont')
<div class ="guest">

        <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin:5px;
        }
        </style>

        <form action="/guest/process" method="get">
            <input type="text" name="search" placeholder="Search by Movie or Genre" value="{{ old('search') }}">
            <button type="input">Seach</button>

        @foreach($movies as $key=> $m)
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
                Page : {{ $movies->currentPage() }} <br/>
                the Amount of Data: {{ $movies->total() }} <br/>
                Data per Page : {{ $movies->perPage() }} <br/>

                {{ $movies->links()}}
            </div>
            @endsection
