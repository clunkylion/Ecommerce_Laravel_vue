
    {{-- los !! significan que el resultado de la expresion es html y se debe imprimir como tal --}}
    {{!! Form::open(['route' => [$product->url(), $product->id],'method' => $product->method(), 'class' => 'app-form']) !!}}
        <div class="container">
            <div>
                {!! Form::label('title', 'Título del producto') !!}
                {!! Form::text('title',$product->title,['class' => 'form-control']) !!}
            </div>
            <div>
                {!! Form::label('description', 'Descripción del Producto', ['class' => 'mt-2']) !!}
                {!! Form::textarea('description',$product->description,['class' => 'form-control']) !!}
            </div>
            <div>
                {!! Form::label('price', 'Título del producto', ['class' => 'mt-2']) !!}
                {!! Form::number('price',$product->price,['class' => 'form-control']) !!}
            </div>
            <div>
                <input type="submit" name="Guardar" class="mt-3 btn btn-primary" value="Guardar">
            </div>
        </div>
        
    {{ Form::close() }}