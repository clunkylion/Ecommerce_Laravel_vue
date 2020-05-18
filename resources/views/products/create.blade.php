@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card padding" style="text-align: center;">
            <header>
                <h4 class="">Crear Nuevo Producto</h4>
            </header>
        </div>
        <div class="card-body">
            @include('products.form')
        </div>
    </div>
@endsection
