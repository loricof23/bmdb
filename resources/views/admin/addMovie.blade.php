@extends('MasterAdmin')
@section ('cont')
<div class="add">
    <center><h1>Create Movie</h1></center>
    <form action="/addMovie/process"method="post">
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
                    <input type="text" name="title">
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
                        <option selected value="Fantasy">Fantasy</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Thriller">Thriller</option>
                        <option value="Horror">Horror</option>
                        <option value="Action">Action</option>
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
                    <textarea rows="4" cols="50" name="desc">
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
                    <input type="text" name="rating">
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
                    <input type="file" name="file_upload">
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
