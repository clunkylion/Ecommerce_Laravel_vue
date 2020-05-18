@extends('layouts.app')

@section('content')
    <div class="container">
        <products-components></products-components>
        <div class="mt-3 text-center">
            {{$products->links()}}
        </div>
    </div>
@endsection