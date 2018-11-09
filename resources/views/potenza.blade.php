@extends('welcome')

@section('content')
<div class="col-md-10 offset-md-1">
<table id="tabla" class="display">
    <thead>
        <tr>
            <th>OSE</th>
            <th>OCP</th>
            <th>Cliente</th>
            <th>Modelo</th>
            <th>Lote</th>
            <th>Certificado</th>
            <th>Sol.</th>
            <th>Cert.</th>
        </tr>
    </thead>
    <tbody>

   	@foreach ($oses as $user)
		<tr>
            <td>{{$user->oti}}</td>
            <td>{{utf8_decode($user->direccion_empresa)}}</td>
            <td>{{$user->solicitante}}</td>
            <td>{{$user->rut_empresa}}</td>
            <td>{asdasd</td>
            <td>asdasd</td>
            <td class="text-center"><a href="{{ route('toWord', $user->id)}}"><i class="far fa-file-word"></i></a></td>
            <td class="text-center"><a href="{{ route('toWord', $user->id)}}"><i class="far fa-file-word"></i></a></td>
        </tr>


    @endforeach
        
    </tbody>
</table>
</div>

@endsection