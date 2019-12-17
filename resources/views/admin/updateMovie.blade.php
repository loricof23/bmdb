@extends('MasterAdmin')
@section ('cont')
<div class="update">
    <center><h1>Edit Movie</h1></center>
    <form action="/updateMovie/{{$movie->id}}/process"method="post">
        @csrf
        <table align = "center">
            <tr>
                <td>
                    Movie Name
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="title" value ="{{$movie->title}}">
                </td>
            </tr>
            <tr>
                <td>
                    Genre
                </td>
                <td>
                    :
                </td>
                <td>
                    <select name="genre">
                        @if($movie->genre == 'Fantasy')
                        <option selected value="Fantasy">Fantasy</option>
                        @else
                        <option value="Fantasy">Fantasy</option>
                        @endif

                        @if($movie->genre == 'Comedy')
                        <option selected value="Comedy">Comedy</option>
                        @else
                        <option value="Comedy">Comedy</option>
                        @endif

                        @if($movie->genre == 'Thriller')
                        <option selection value="Thriller">Thriller</option>
                        @else
                        <option value="Thriller">Thriller</option>
                        @endif

                        @if($movie->genre == 'Horror')
                        <option selecion value="Horror">Horror</option>
                        @else
                        <option value="Horror">Horror</option>
                        @endif

                        @if($movie->genre == 'Action')
                        <option selection value="Action">Action</option>
                        @else
                        <option value="Action">Action</option>
                        @endif
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Description
                </td>
                <td>
                    :
                </td>
                <td>
                    <textarea rows="4" cols="50" name="desc" value="{{$movie->description}}">
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Rating
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="rating" value="{{$movie->rating}}">
                </td>
            </tr>
            <tr>
                <td>
                    Upload Image
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="file" name="file_upload" value="{{$movie->photo}}">
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
