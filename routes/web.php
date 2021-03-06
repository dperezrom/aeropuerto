<?php
//Ruta Usuarios
use App\Http\Controllers\UsuariosController;

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

//Rutas Usuarios
Route::get('/login', [UsuariosController::class, 'loginForm']);
Route::post('/login', [UsuariosController::class, 'login']);
Route::post('/logout', [UsuariosController::class, 'logout']);


/*
GET /depart   => index (select global)
GET /depart/create => create (formulario en blanco para INSERT)
POST /depart  => store (graba la información)
GET /depart/{id} => show (select de una fila)
GET /depart/{id}/edit => edit (formalario para modificar una fila)
PUT/PATCH /depart/{id} => update (update de una fila)
DELETE /depart/{id} => destroy (delete de la fila)
*/
