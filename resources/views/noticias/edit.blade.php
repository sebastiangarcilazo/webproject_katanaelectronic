<x-layout>
    <x-slot:title>Editar Noticia</x-slot:title>

    <h1>Editar Noticia</h1>

    <form method="POST" action="{{ route('noticias.update', $noticia->noticia_id) }}">
        @csrf
        @method('PUT')

        @include('noticias.partials.form', ['noticia' => $noticia]) {{-- 👈 Aquí ya está el botón --}}

       
    </form>
     <a href="{{ route('noticias.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
</x-layout>