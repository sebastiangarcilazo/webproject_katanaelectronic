<x-layout>

    <x-slot:title>Añadir un nuevo producto</x-slot:title>

    <h1 class="mb-3"> Añadir un nuevo producto</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            La informacion ingresada contiene errores.
            Por favor, revisa los campos y prueba de nuevo
        </div>
    @endif

    <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nombre</label>
            <input
                type="text"
                id="title"
                name="title"
                class="form-control @error('title') is-invalid @enderror"
                @error('title') aria-invalid="true" aria-errormessage="error-title" @enderror
                value="{{ old('title') }}"
            >
            @error('title')
                <div id="error-title" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input
                type="text"
                id="price"
                name="price"
                class="form-control @error('price') is-invalid @enderror"
                @error('price') aria-invalid="true" aria-errormessage="error-price" @enderror
                value="{{ old('price') }}"
            >
            @error('price')
                <div id="error-price" class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Fecha de Salida</label>
            <input
                type="date"
                id="release_date"
                name="release_date"
                class="form-control"
                value="{{ old('release_date') }}"
            >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción del producto</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label">
                Imagen del producto <span class="small" >(Opcional)</span>
            </label>
            <input type="file" name="imagen" id="imagen" class="form-control">
        </div>

        <div class="mb-3">
            <label for="cover_description" class="form-label">
                Descripcion de la Imagen del producto <span class="small" >(Opcional)</span>
            </label>
            <input type="text" name="cover_description" id="imagen_description" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Añadir</button>

    </form>


</x-layout>
