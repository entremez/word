
@extends('welcome')

@section('content')
<div class="col-md-10 offset-md-1">

	<div class="links">
	    <form method="post" action="{{url('importar')}}" enctype="multipart/form-data">
	        {{csrf_field()}}
	        <input type="file" name="excel">
	        <br><br>
	        <input type="submit" value="Enviar" style="padding: 10px 20px;">
	    </form>
	</div>

</div>

@endsection