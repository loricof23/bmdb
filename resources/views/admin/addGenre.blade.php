@extends('MasterAdmin')
@section ('cont')
<div class="add">
    <center><h1>Create Genre</h1></center>
    <form action="/addGenre/process"method="post">
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
                    <input type="text" name="genre">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Add</button>
                </td>
            </tr>
        </table>
    </form>

</div>
@endsection
