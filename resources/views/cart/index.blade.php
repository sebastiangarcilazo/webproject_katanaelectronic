<x-layout>
<main>
    <div class="container my-5">
        <h1 id="title">Carrito de Compras</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($items->isEmpty())
            <p>Tu carrito está vacío.</p>
        @else
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Producto</th>
                        <th>Precio unitario</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($items as $item)
                        @php
                            $subtotal = $item['producto']->price * $item['cantidad'];
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td>{{ $item['producto']->title }}</td>
                            <td>${{ number_format($item['producto']->price, 2, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.update', $item['producto']->producto_id) }}" method="POST" class="d-flex align-items-center">
                                    @csrf
                                    <input type="number" name="cantidad" value="{{ $item['cantidad'] }}" min="1" class="form-control me-2" style="width: 80px;">
                                    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                                </form>
                            </td>
                            <td>${{ number_format($subtotal, 2, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item['producto']->producto_id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Eliminar este producto del carrito?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-end fw-bold">Total:</td>
                        <td colspan="2" class="fw-bold">${{ number_format($total, 2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        @endif
    </div>

    <aside class="d-sm-none d-md-block d-none d-sm-block">
        <div class="container">
            <h3 class="text-center" id="asidetitle">Productos Populares</h3>
            <img src="{{ asset('productos/geforcertc4060.png') }}" alt="rx6750xt" class="img-fluid mb-2">
            <h4>Placa de Video MSI GeForce RTX 4060 8GB GDDR6 Ventus 2X Black OC</h4>
            <p class="price">$455.200</p>
            <img src="{{ asset('productos/ryzen7.png') }}" alt="ryzen7" class="img-fluid mb-2">
            <h4>Procesador AMD Ryzen 7 5700G 4.6GHz Turbo + Wraith Stealth Cooler</h4>
            <p class="price">255.250</p>
            <img src="{{ asset('productos/ssdadata.png') }}" alt="ssdadata4tb" class="img-fluid mb-2">
            <h4>Disco Solido SSD M.2 ADATA 4TB Legend 960 MAX 7400MB/s NVMe PCIe Gen4</h4>
            <p class="price">$433.000</p>
        </div>
    </aside>
</main>
</x-layout>