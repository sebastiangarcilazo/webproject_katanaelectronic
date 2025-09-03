<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class ProductoController extends Controller
{
   public function index(Request $request)
{
    $search = $request->input('search');

    $query = producto::query();

    if ($search) {
        $productos = $query->where('title', 'like', '%' . $search . '%')->paginate(10);
    } else {
        $productos = $query->get();
    }

    return view('productos.index', compact('productos', 'search'));
}

    public function view(int $id)
    {
        return view('productos.view', [
            'producto' => producto::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('productos.create');
    }

   public function store(Request $request)
    {
    $request->validate([
        'title'         => 'required|min:2',
        'price'         => 'required|numeric',
        'release_date'  => 'required',
        'description'   => 'required',
        'imagen'        => 'nullable|image|max:2048', 
    ], [
        'title.required'    => 'el Nombre debe tener un valor',
        'title.min'         => 'El titulo debe tener al menos :min caracteres',
        'price.required'    => 'el precio debe tener un valor',
        'price.numeric'     => 'el precio debe ser un valor numerico',
    ]);

    $input = $request->all();

    if ($request->hasFile('imagen')) {
        $file = $request->file('imagen');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('productos/'), $filename);
        $input['imagen'] = $filename;
    }

    producto::create($input);

    return redirect()
        ->route('productos.index')
        ->with('feedback.message', 'El producto '. e($input['title']) .' se guardó exitosamente');
}

    public function delete(int $id)
    {
        return view('productos.delete', [
            'producto' => producto::findOrFail($id)
        ]);
    }

    public function destroy(int $id)
    {
        $producto = producto::findOrFail($id);
        $producto->delete($id);

        return redirect()
            ->route('productos.index')
            ->with('feedback.message', 'La producto <b> '. e($producto->title) .' </b> se elimino exitosamente');


    }

    public function edit(int $id)
    {
        return view('productos.edit', [
            'producto' => producto::findOrFail($id)
        ]);
    }

   public function update(Request $request, int $id)
{
    $request->validate([
        'title'         => 'required|min:2',
        'price'         => 'required|numeric',
        'release_date'  => 'required',
        'description'   => 'required',
        'imagen'        => 'nullable|image|max:2048',
    ]);

    $producto = producto::findOrFail($id);
    $input = $request->all();

    if ($request->hasFile('imagen')) {
        if ($producto->imagen && file_exists(public_path('productos/' . $producto->imagen))) {
            unlink(public_path('productos/' . $producto->imagen));
        }

        $file = $request->file('imagen');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('productos/'), $filename);
        $input['imagen'] = $filename;
    }

    $producto->update($input);

    return redirect()
        ->route('productos.index')
        ->with('feedback.message', 'El producto '. e($producto->title) .' se actualizó exitosamente');
}



}
