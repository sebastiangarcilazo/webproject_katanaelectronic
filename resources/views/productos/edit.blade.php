<x-layout>

    <x-slot:title>Editar el producto {{ $producto->title }}</x-slot:title>

    <h1 class="mb-3"> Editar {{ $producto->title }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            La informacion ingresada contiene errores.
            Por favor, revisa los campos y prueba de nuevo
        </div>
    @endif

    <form action="{{ route('productos.update', ['id' => $producto->producto_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Nombre</label>
            <input
                type="text"
                id="title"
                name="title"
                class="form-control @error('title') is-invalid @enderror"
                @error('title') aria-invalid="true" aria-errormessage="error-title" @enderror
                value="{{ old('title', $producto->title) }}"
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
                value="{{ old('price', $producto->price) }}"
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
                value="{{ old('release_date', $producto->release_date) }}"
            >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción del producto</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $producto->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">
                Imagen del producto <span class="small" >(Opcional)</span>
            </label>
            <input type="file" name="imagen" id="imagen" class="form-control">
        </div>

        <div class="mb-3">
            <label for="imagen_description" class="form-label">
                Descripcion de la Imagen del producto <span class="small" >(Opcional)</span>
            </label>
            <input type="text" name="imagen_description" id="imagen_description" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Aplicar Cambios</button>

    </form>


</x-layout>
