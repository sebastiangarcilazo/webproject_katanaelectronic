 <x-layout>
    <x-slot:title>Galería de productos</x-slot:title>
    <main>
        <h1 id="title">Galería de productos</h1>
        <h2 id="news">Novedades</h2>
        <section class="container-fluid">
          <hr>
          <h3 class="titleproducts">
            Placas de video
          </h3>
          <div class="image-item">
            <img src="{{ asset('productos/rx6750xt.png') }}" alt="rx6750xt" class="img-fluid">
            <h4>
              Placa de Video XFX Radeon RX 6750 XT ULTRA 12GB GDDR6 SPEEDSTER
            </h4>
            <p class="price">$680.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/gtx1650.png') }}" alt="gtx10504gb" class="img-fluid">
            <h4>
              Placa de Video MSI GeForce GTX 1650 4GB GDDR6 Ventus XS OC
            </h4>
            <p class="price">$220.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/rx6650xt.png') }}" alt="rx6650xt" class="img-fluid">
            <h4>
              Placa de Video XFX Radeon RX 6650 XT 8GB GDDR6 Speedste
            </h4>
            <p class="price">$430.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/rtx3090zotac.png') }}" alt="rtx3090zotac" class="img-fluid">
            <h4>
              Placa de Video Zotac GeForce RTX 3090 24GB GDDR6X Trinity
            </h4>
            <p class="price">$1.990.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/rtx4080.png') }}" alt="rtx4080super" class="img-fluid">
            <h4>
              Placa de Video ASUS Geforce RTX 4080 SUPER 16GB GDDR6X ROG STRIX Gaming OC
            </h4>
            <p class="price">$1.880.000</p>
          </div>
          <hr>
          <h3 class="titleproducts">Microprocesadores</h3>
          <div class="image-item">
            <img src="{{ asset('productos/ryzen7.png') }}" alt="ryzen7" class="img-fluid">
            <h4>
              Procesador AMD Ryzen 7 8700G 5.1GHz AM5
            </h4>
            <p class="price">$400.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/ryzen3.png') }}" alt="ryzen3" class="img-fluid">
            <h4>
              Procesador AMD RYZEN 3 3200G 4.0GHz Turbo + Radeon Vega 8 AM4 Wraith Stealth Cooler
            </h4>
            <p class="price">$85.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/ryzen5.png') }}" alt="ryzen5" class="img-fluid">
            <h4>
              Procesador AMD RYZEN 5 3600 4.2GHz Turbo AM4 Wraith Stealth Cooler
            </h4>
            <p class="price">$150.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/ryzen58600.png') }}" alt="ryzen58600" class="img-fluid">
            <h4>
              Procesador AMD Ryzen 5 8600G 5.0GHz AM5
            </h4>
            <p class="price">$272.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/inteli7.png') }}" alt="inteli7" class="img-fluid">
            <h4>
              Procesador Intel Core i7 14700 5.4GHz Turbo Socket 1700 Raptor Lake
            </h4>
            <p class="price">$585.000</p>
          </div>
          <hr>
          <h3 class="titleproducts">Almacenamiento</h3>
          <div class="image-item">
            <img src="{{ asset('productos/seagate4tb.png') }}" alt="seagate4tb" class="img-fluid">
            <h4>
              Disco Rigido Seagate 4TB SkyHawk 256MB 5.4K RPM
            </h4>
            <p class="price">$119.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/wd2tb.png') }}" alt="wd2tbblue" class="img-fluid">
            <h4>
              Disco Rigido WD 2TB BLUE 256MB SATA 6.0GB/s 7200RPM
            </h4>
            <p class="price">$96.600</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/adata256gb.png') }}" alt="m2adata256gb" class="img-fluid">
            <h4>
              Disco Solido SSD M.2 ADATA 256GB Legend 710 2100MB/s NVMe PCIe Gen3 x4
            </h4>
            <p class="price">$64.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/kingstone240gb.png') }}" alt="ssdkingstone240gb" class="img-fluid">
            <h4>
              Disco Sólido SSD Kingston 240GB A400 500MB/s
            </h4>
            <p class="price">$64.000</p>
          </div>
          <div class="image-item">
            <img src="{{ asset('productos/adatalegend.png') }}" alt="ssdlegend4tb" class="img-fluid">
            <h4>
              Disco Solido SSD M.2 ADATA 4TB Legend 960 MAX 7400MB/s NVMe PCIe Gen4 x4
            </h4>
            <p class="price">$64.000</p>
          </div>
        </section>
      </main>
</x-layout>