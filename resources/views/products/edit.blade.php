@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card padding" style="text-align: center;">
            <header>
                <h4 class="">Editar Producto</h4>
                <p><b>{{$product->title}}</b></p>
            </header>
            <div class="card-body">
                @include('products.form')
            </div>
        </div>
    </div>
@endsection