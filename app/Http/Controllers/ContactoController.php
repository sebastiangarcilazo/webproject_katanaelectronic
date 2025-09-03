<?php

namespace App\Http\Controllers;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use App\Mail\ContactoRecibido;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function form()
    {
        return view('contacto');
    }

   public function enviar(Request $request)
{
    $validated = $request->validate([
        'nombre' => 'required|string|max:100',
        'apellido' => 'required|string|max:100',
        'email' => 'required|email',
        'telefono' => 'required|string|max:20',
        'reason' => 'required|string',
        'mensaje' => 'required|string',
        'alt' => 'nullable|string|max:255',
        'archivo' => 'nullable|image|max:2048',
    ]);

    $archivo_path = null;
    if ($request->hasFile('archivo')) {
        $archivo_path = $request->file('archivo')->store('contact_files');
    }

    ContactMessage::create([
        'nombre' => $validated['nombre'],
        'apellido' => $validated['apellido'],
        'email' => $validated['email'],
        'telefono' => $validated['telefono'],
        'reason' => $validated['reason'],
        'mensaje' => $validated['mensaje'],
        'archivo' => $archivo_path,
    ]);

    Mail::to('9a00cb0496-5e0ba2+1@inbox.mailtrap.io')->send(new ContactoRecibido($validated));

    return redirect()->route('contacto')->with('success', 'Gracias por tu mensaje, te contactaremos lo antes posible!');
}
public function mensajes()
{
    $mensajes = \App\Models\ContactMessage::latest()->paginate(10);
    return view('admin.mensajes', compact('mensajes'));
}
public function acciones(Request $request)
{
    $ids = $request->input('seleccionados', []);
    $accion = $request->input('accion');

     if (empty($ids)) {
        return redirect()->route('admin.mensajes')
            ->with('error', 'No seleccionaste ningún mensaje.');
    }

    if ($accion === 'responder') {
        ContactMessage::whereIn('id', $ids)->update(['respondido' => true]);
        return redirect()->back()->with('success', 'Mensajes marcados como respondidos.');
    }

    if ($accion === 'eliminar') {
        ContactMessage::whereIn('id', $ids)->delete();
        return redirect()->back()->with('success', 'Mensajes eliminados correctamente.');
    }

    return redirect()->back()->with('error', 'Acción no válida.');
}
    
}
