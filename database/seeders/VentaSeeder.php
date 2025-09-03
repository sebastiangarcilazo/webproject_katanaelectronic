<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ventas')->insert([
            [
                'cliente_id' => 1,
                'producto_id' => 1,
                'fecha_venta' => '2025-06-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cliente_id' => 2,
                'producto_id' => 2,
                'fecha_venta' => '2025-06-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cliente_id' => 3,
                'producto_id' => 3,
                'fecha_venta' => '2025-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
