@extends('MasterAdmin')
@section ('cont')
<div class="update">
    <center><h1>Edit Genre</h1></center>
    <form action="/updateGenre/{{$genre->id}}/process"method="post">
        @csrf
        <table align = "center">
            <tr>
                <td>
                    Genre
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="genre" value="{{$genre->genre}}">
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
