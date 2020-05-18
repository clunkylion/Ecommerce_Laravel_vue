@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card padding">
            <header>
                <h2>Mi Carrito de Compras</h2>
            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <products-shopping-component></products-shopping-component>
                    </div>
                    <div class="col-12 col-md-6 align-content-center">
                        <b><p>Paga con cualquier medio de pago, a través de PayPal</p></b>
                        <img src="/images/cards_logo.png" alt="" width="200">
                        <div>
                            <a href="/pagar" class="btn btn-primary btn-lg btn-block">Proceder a Pagar</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection