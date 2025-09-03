<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'title' => 'Placa de Video XFX Radeon RX 6750 XT ULTRA 12GB GDDR6 SPEEDSTER',
                'price' => 680000,
                'release_date' => '2022-05-10',
                'description' => 'Placa de Video XFX Radeon RX 6750 XT ULTRA 12GB GDDR6 SPEEDSTER con alto rendimiento para juegos de alta demanda.',
                'imagen' => 'rx6750xt.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Placa de Video MSI GeForce GTX 1650 4GB GDDR6 Ventus XS OC',
                'price' => 220000,
                'release_date' => '2020-04-15',
                'description' => 'Placa de Video MSI GeForce GTX 1650 4GB GDDR6 Ventus XS OC ideal para gaming de entrada con excelente rendimiento y refrigeración compacta.',
                'imagen' => 'gtx1650.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Placa de Video XFX Radeon RX 6650 XT 8GB GDDR6 Speedster',
                'price' => 430000,
                'release_date' => '2022-06-15',
                'description' => 'Placa de Video XFX Radeon RX 6650 XT 8GB GDDR6 Speedster, diseño eficiente y gran potencia para gamers exigentes.',
                'imagen' => 'rx6650xt.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Placa de Video Zotac GeForce RTX 3090 24GB GDDR6X Trinity',
                'price' => 1200000,
                'release_date' => '2020-09-24',
                'description' => 'Placa de Video Zotac GeForce RTX 3090 24GB GDDR6X Trinity, potencia extrema para gaming 4K y creadores de contenido.',
                'imagen' => 'rtx3090zotac.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Placa de Video ASUS Geforce RTX 4080 SUPER 16GB GDDR6X ROG STRIX Gaming OC',
                'price' => 1600000,
                'release_date' => '2024-01-15',
                'description' => 'Placa de Video ASUS Geforce RTX 4080 SUPER 16GB GDDR6X ROG STRIX Gaming OC, rendimiento de última generación con refrigeración avanzada.',
                'imagen' => 'rtx4080.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Procesador AMD Ryzen 7 8700G 5.1GHz AM5',
                'price' => 450000,
                'release_date' => '2024-02-01',
                'description' => 'Procesador AMD Ryzen 7 8700G 5.1GHz AM5 con gráficos integrados para alto rendimiento en juegos y multitarea.',
                'imagen' => 'amdryzen7.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Procesador AMD RYZEN 3 3200G 4.0GHz Turbo + Radeon Vega 8 AM4 Wraith Stealth Cooler',
                'price' => 100000,
                'release_date' => '2019-06-10',
                'description' => 'Procesador AMD RYZEN 3 3200G 4.0GHz Turbo con gráficos Radeon Vega 8 y cooler Wraith Stealth incluido.',
                'imagen' => 'ryzen3.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Procesador AMD RYZEN 5 3600 4.2GHz Turbo AM4 Wraith Stealth Cooler',
                'price' => 180000,
                'release_date' => '2019-07-07',
                'description' => 'Procesador AMD RYZEN 5 3600 4.2GHz Turbo con cooler Wraith Stealth, excelente relación precio/rendimiento.',
                'imagen' => 'ryzen5.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Procesador AMD Ryzen 5 8600G 5.0GHz AM5',
                'price' => 310000,
                'release_date' => '2024-02-01',
                'description' => 'Procesador AMD Ryzen 5 8600G 5.0GHz AM5 con gráficos integrados para gaming y tareas intensivas.',
                'imagen' => 'ryzen58600.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Procesador Intel Core i7 14700 5.4GHz Turbo Socket 1700 Raptor Lake',
                'price' => 520000,
                'release_date' => '2023-10-17',
                'description' => 'Procesador Intel Core i7 14700 5.4GHz Turbo Socket 1700 Raptor Lake, ideal para gaming y tareas profesionales.',
                'imagen' => 'inteli7.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Disco Rigido Seagate 4TB SkyHawk 256MB 5.4K RPM',
                'price' => 155000,
                'release_date' => '2021-03-10',
                'description' => 'Disco Rigido Seagate 4TB SkyHawk 256MB 5.4K RPM optimizado para sistemas de videovigilancia.',
                'imagen' => 'seagate4tb.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Disco Rigido WD 2TB BLUE 256MB SATA 6.0GB/s 7200RPM',
                'price' => 95000,
                'release_date' => '2020-08-01',
                'description' => 'Disco Rigido WD 2TB BLUE 256MB SATA 6.0GB/s 7200RPM, excelente para almacenamiento y rendimiento diario.',
                'imagen' => 'wd2tb.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Disco Solido SSD M.2 ADATA 256GB Legend 710 2100MB/s NVMe PCIe Gen3 x4',
                'price' => 37000,
                'release_date' => '2023-02-01',
                'description' => 'Disco Solido SSD M.2 ADATA 256GB Legend 710 2100MB/s NVMe PCIe Gen3 x4, velocidad y rendimiento confiable.',
                'imagen' => 'adata256gb.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Disco Sólido SSD Kingston 240GB A400 500MB/s',
                'price' => 30000,
                'release_date' => '2018-01-01',
                'description' => 'Disco Sólido SSD Kingston 240GB A400 500MB/s, almacenamiento rápido y accesible.',
                'imagen' => 'kingstone240gb.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Disco Solido SSD M.2 ADATA 4TB Legend 960 MAX 7400MB/s NVMe PCIe Gen4 x4',
                'price' => 720000,
                'release_date' => '2023-06-01',
                'description' => 'Disco Solido SSD M.2 ADATA 4TB Legend 960 MAX 7400MB/s NVMe PCIe Gen4 x4, velocidad extrema para profesionales.',
                'imagen' => 'adatalegend.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Fuente Cougar 750W 80 Plus Gold GEC750',
                'price' => 157000,
                'release_date' => '2022-09-15',
                'description' => 'Fuente Cougar 750W 80 Plus Gold GEC750, eficiencia y durabilidad con excelente rendimiento para PCs gamer.',
                'imagen' => 'fuentedepoder750.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Notebook Gamer Lenovo Legion 5 15ACH6A WQHD 2K 15.6" 16GB (2x8GB)',
                'price' => 1500000,
                'release_date' => '2023-05-01',
                'description' => 'Notebook Gamer Lenovo Legion 5 15ACH6A WQHD 2K 15.6" con 16GB de RAM, ideal para gaming de alto rendimiento.',
                'imagen' => 'lenovolegion.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Procesador Intel Core i5 14400F 4.7GHz Turbo Socket 1700 Raptor Lake',
                'price' => 280000,
                'release_date' => '2024-01-10',
                'description' => 'Procesador Intel Core i5 14400F 4.7GHz Turbo Socket 1700 Raptor Lake, excelente opción calidad-precio para gamers.',
                'imagen' => 'intelcore.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Monitor LG 24 24MK430H-B 75Hz IPS Full HD FreeSync HDMI',
                'price' => 120000,
                'release_date' => '2020-10-01',
                'description' => 'Monitor LG 24 24MK430H-B 75Hz IPS Full HD con tecnología FreeSync y entrada HDMI.',
                'imagen' => 'monitorlg.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Memoria Team DDR5 32GB (2x16GB) 6400MHz T-Force Delta RGB',
                'price' => 320000,
                'release_date' => '2023-11-01',
                'description' => 'Memoria Team DDR5 32GB (2x16GB) 6400MHz T-Force Delta RGB, alto rendimiento y diseño RGB atractivo.',
                'imagen' => 'ramtforce.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Gabinete Antec NX292 RGB MESH Black 3x120mm RGB Fans',
                'price' => 95000,
                'release_date' => '2021-08-01',
                'description' => 'Gabinete Antec NX292 RGB MESH Black con 3 ventiladores RGB de 120mm, excelente flujo de aire y diseño moderno.',
                'imagen' => 'gabinete1.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}