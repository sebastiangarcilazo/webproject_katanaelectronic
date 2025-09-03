<x-layout>
    <x-slot:title>Noticias</x-slot:title>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Últimas Noticias</h1>
    </div>
    @auth
        @if(Auth::user()->role === 'admin')
    <a href="{{ route('noticias.create') }}" class="btn btn-success mb-4">Nueva Noticia</a>
     @endif
    @endauth
    @if($noticias->isEmpty())
        <div class="alert alert-info">
            No hay noticias disponibles en este momento.
        </div>
    @else
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($noticias as $noticia)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $noticia->title_noticia }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $noticia->subtitle_noticia }}</h6>
                            <p class="text-muted small mb-1">
                                Publicado el {{ \Carbon\Carbon::parse($noticia->release_date_noticia)->format('d/m/Y') }}
                            </p>
                            <p class="card-text flex-grow-1">
                                {{ Str::limit($noticia->descripcion_noticia, 100) }}
                            </p>
                            <a href="{{ route('noticias.show', $noticia->noticia_id) }}" class="btn btn-outline-primary mt-auto">
                                Leer más →
                            </a>
                        </div>
                         @auth
        @if(Auth::user()->role === 'admin')
           <div class="text-center mt-3">
                <a href="{{ route('noticias.edit', $noticia->noticia_id) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('noticias.destroy', $noticia->noticia_id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar esta noticia?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        @endif
    @endauth
                        <div class="card-footer text-end small text-muted">
                            {{ number_format($noticia->visitantes_noticia) }} visitas
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-layout>