<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClienteController;

Route::get('productos/Añadir', [\App\Http\Controllers\productoController::class, 'create'])
    ->name('productos.create')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::post('productos/Añadir', [\App\Http\Controllers\productoController::class, 'store'])
    ->name('productos.store')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::get('productos/{id}/eliminar', [\App\Http\Controllers\productoController::class, 'delete'])
    ->name('productos.delete')
    ->whereNumber('id')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::delete('productos/{id}/eliminar', [\App\Http\Controllers\productoController::class, 'destroy'])
    ->name('productos.destroy')
    ->whereNumber('id')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::get('productos/editar/{id}', [\App\Http\Controllers\productoController::class, 'edit'])
    ->name('productos.edit')
    ->whereNumber('id')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::put('productos/editar/{id}', [\App\Http\Controllers\productoController::class, 'update'])
    ->name('productos.update')
    ->whereNumber('id')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::get('usuarios/listado', [\App\Http\Controllers\UsuarioController::class, 'index'])
    ->name('usuarios.index')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::get('usuarios/{id}', [\App\Http\Controllers\UsuarioController::class, 'show'])
    ->name('usuarios.show')
    ->whereNumber('id')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');
    
Route::get('/noticias/crear', [NoticiaController::class, 'create'])
    ->name('noticias.create')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::post('/noticias', [NoticiaController::class, 'store'])
    ->name('noticias.store')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');
    
Route::get('/noticias/{id}/editar', [NoticiaController::class, 'edit'])
    ->name('noticias.edit')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::put('/noticias/{id}', [NoticiaController::class, 'update'])
    ->name('noticias.update')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::delete('/noticias/{id}', [NoticiaController::class, 'destroy'])
    ->name('noticias.destroy')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::get('/admin/mensajes', [ContactoController::class, 'mensajes'])
    ->name('admin.mensajes')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::post('/admin/mensajes', [ContactoController::class, 'acciones'])
    ->name('admin.mensajes.acciones')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');

Route::get('/clientes', [\App\Http\Controllers\ClienteController::class, 'index'])
    ->name('clientes.index')
    ->middleware(\App\Http\Middleware\RoleMiddleware::class . ':admin');


Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/contacto', [\App\Http\Controllers\HomeController::class, 'contacto'])
    ->name('contacto');

Route::get('/ayuda', [\App\Http\Controllers\HomeController::class, 'ayuda'])
    ->name('ayuda');

Route::get('/creadores', [\App\Http\Controllers\HomeController::class, 'creadores'])
    ->name('creadores_de_contenido');

Route::get('/galeria', [\App\Http\Controllers\HomeController::class, 'galeria'])
    ->name('galeria');

Route::get('productos/listado', [\App\Http\Controllers\productoController::class, 'index'])
    ->name('productos.index');

Route::get('productos/{id}', [\App\Http\Controllers\productoController::class, 'view'])
    ->name('productos.view')
    ->whereNumber('id');
    
Route::get('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('auth.login');

Route::post('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'authenticate'])
    ->name('auth.authenticate');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout');

Route::get('registrarse', [\App\Http\Controllers\AuthController::class, 'register'])
    ->name('auth.register');

Route::post('registrarse', [\App\Http\Controllers\AuthController::class, 'store'])
    ->name('auth.store');

Route::get('/noticias', [\App\Http\Controllers\NoticiaController::class, 'index'])
    ->name('noticias.index');

Route::get('/noticias/{id}', [\App\Http\Controllers\NoticiaController::class, 'show'])
    ->whereNumber('id')
    ->name('noticias.show');

Route::get('/contacto', [\App\Http\Controllers\ContactoController::class, 'form'])
    ->name('contacto');

Route::post('/contacto', [\App\Http\Controllers\ContactoController::class, 'enviar'])
    ->name('contacto.enviar');

 Route::post('/cart/add/{producto_id}', [\App\Http\Controllers\CartController::class, 'add'])
     ->name('cart.add');

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])
    ->name('cart.index');

Route::post('/cart/remove/{producto_id}', [\App\Http\Controllers\CartController::class, 'remove'])
    ->name('cart.remove');

Route::post('/cart/update/{producto_id}', [\App\Http\Controllers\CartController::class, 'update'])
    ->name('cart.update');
