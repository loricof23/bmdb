@extends('MasterAdmin')
@section('cont')
<div class ="admin">


    <style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;

    }
    </style>
    <form action="/admin/process" method="get">
        <input type="text" name="search" placeholder="Search by Movie or Genre">
        <button type="input">Seach</button>
        @foreach($movie as $key=> $m)
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
                Page : {{ $movie->currentPage() }} <br/>
                the Amount of Data: {{ $movie->total() }} <br/>
                Data per Page : {{ $movie->perPage() }} <br/>

                {{ $movie->links()}}
            </div>
            @endsection
