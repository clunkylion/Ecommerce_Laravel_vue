<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Esté metodo define las rutas de los metodos de autenticación.
Auth::routes();
//

Route::get('/carrito', 'ShoppingCartController@show')->name('shoppingCart.show');
Route::get('/carrito/productos', 'ShoppingCartController@products')->name('shoppingCart.products');
Route::get('/pagar', 'PaymentsController@pay')->name('payments.pay');
Route::get('/pagar/completar', 'PaymentsController@execute')->name('payments.execute');




Route::resource('productos', 'ProductsController');


Route::resource('in_shopping_carts', 'ProductInShoppingCartsController',[
    'only' => ['store', 'destroy']
]);

Route::get('/home', 'HomeController@index')->name('home');
