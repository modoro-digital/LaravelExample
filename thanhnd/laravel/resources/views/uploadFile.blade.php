<form action="{{route('UploadFile')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="file" name="myfile"><br>
<input type="submit">
</form>
