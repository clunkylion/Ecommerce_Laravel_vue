<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductsCollection;

class ProductsController extends Controller
{
    public function _construct(){
        $this->middleware('auth',['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        \Session::remove('shopping_cart_id');
        //Muestra una colección del recurso
        $products = Product::paginate(15);

        if ($request->wantsJson()) {
            return new ProductsCollection($products);
        }
        return view('products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Es la funcion donde mostramos un formulario o nuevos productos
        $product = new Product;
        return view('products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Almacenar en BD Nuevos Productos.
        $options = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price
        ];
        if (Product::create($options)) {
            return redirect('/productos/');
        }else{
            return view('/productos/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Muestra un Solo recurso, Producto
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //Muestra un formulario para editar un producto, se debe enviar al metodo update de más abajo
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualizar un producto en especifico
        $product = Product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;

        if ($product->save()) {
            return redirect('/productos/');
        }else{
            return view('products.edit', compact('product'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Elimina un Recurso en especifico
        Product::destroy($id);
        return redirect('/productos');
    }
}
