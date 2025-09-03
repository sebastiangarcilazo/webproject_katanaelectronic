<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $productos = Producto::whereIn('producto_id', array_keys($cart))->get();


        $items = $productos->map(function($producto) use ($cart) {
            return [
                'producto' => $producto,
                'cantidad' => $cart[$producto->producto_id],
            ];
        });

        return view('cart.index', compact('items'));
    }

    public function add(Request $request, $producto_id)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1'
        ]);

        $cantidad = $request->input('cantidad');
        $cart = $request->session()->get('cart', []);

        if (isset($cart[$producto_id])) {
            $cart[$producto_id] += $cantidad;
        } else {
            $cart[$producto_id] = $cantidad;
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Producto agregado al carrito.');
    }

    public function remove(Request $request, $producto_id)
    {
        $cart = $request->session()->get('cart', []);
        if(isset($cart[$producto_id])){
            unset($cart[$producto_id]);
            $request->session()->put('cart', $cart);
        }
        return redirect()->route('cart.index')->with('success', 'Producto eliminado del carrito.');
    }

    public function update(Request $request, $producto_id)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1'
        ]);

        $cantidad = $request->input('cantidad');
        $cart = $request->session()->get('cart', []);

        if(isset($cart[$producto_id])){
            $cart[$producto_id] = $cantidad;
            $request->session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Cantidad actualizada.');
    }
}