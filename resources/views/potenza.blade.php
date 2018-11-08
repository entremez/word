@extends('welcome')

@section('content')
<div class="col-md-10 offset-md-1">
<table id="tabla" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>

   	@foreach ($certificados as $user)
		<tr>
            <td>{{$user->cliente}}</td>
            <td>{{$user->modelo}}</td>
        </tr>


    @endforeach
        
    </tbody>
</table>
</div>






@endsection