<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::orderByDesc('release_date_noticia')->get();
        return view('noticias.index', compact('noticias'));
    }

    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('noticias.show', compact('noticia'));
    }
  public function create()
    {
        return view('noticias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_noticia' => 'required|max:50',
            'subtitle_noticia' => 'required',
            'release_date_noticia' => 'required|date',
            'descripcion_noticia' => 'required',
            'visitantes_noticia' => 'required|integer|min:0',
        ]);

        Noticia::create($request->all());
        return redirect()->route('noticias.index')->with('success', 'Noticia creada correctamente');
    }

    public function edit($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('noticias.edit', compact('noticia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title_noticia' => 'required|max:50',
            'subtitle_noticia' => 'required',
            'release_date_noticia' => 'required|date',
            'descripcion_noticia' => 'required',
            'visitantes_noticia' => 'required|integer|min:0',
        ]);

        $noticia = Noticia::findOrFail($id);
        $noticia->update($request->all());

        return redirect()->route('noticias.index')->with('success', 'Noticia actualizada correctamente');
    }

    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();

        return redirect()->route('noticias.index')->with('success', 'Noticia eliminada');
    }
}
