@extends('welcome')

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Digitación de certificados</h2>
                <div class="form-group">
                    <label>Cliente</label>
                    <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>IPC, QR, CA o CT</label>
                    <input type="text" name="query" class="form-control" id="search">
                </div>  
<input type="text" name="country" id="autocomplete"/>             
            </div> 
        </div>
        <div class="row d-flex justify-content-center">
            <div class="btn btn-primary">Buscar</div>
        </div>
    </div>

@endsection    