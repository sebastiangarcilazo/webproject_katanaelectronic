<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
             [
        'cliente_id' => 1,
        'name_cliente' => 'Juan',
        'lastname_cliente' => 'Pérez',
        'domicilio_cliente' => 'Av. Leon 123',
        'release_date_cliente' => '2022-01-15',
        'compras_cliente' => 'RTX 2060 8GB, Gabinete Asus, Monitor LG 144hz',
        'dni_cliente' => '30123456',
        'telefono_cliente' => '1156781234',
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'cliente_id' => 2,
        'name_cliente' => 'María',
        'lastname_cliente' => 'Gómez',
        'domicilio_cliente' => 'Calle del diablo 666',
        'release_date_cliente' => '2023-03-22',
        'compras_cliente' => 'Fuente de poder Gigabyte 1000w, Gabinete Thermaltake, RamTForce 16gb 3200mhz',
        'dni_cliente' => '28987654',
        'telefono_cliente' => '1145678910',
         'user_id' => 2,
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'cliente_id' => 3,
        'name_cliente' => 'Carlos',
        'lastname_cliente' => 'López',
        'domicilio_cliente' => 'Pasaje La Paz 789',
        'release_date_cliente' => '2021-10-09',
        'compras_cliente' => 'RX 580 8GB, Monitor Zowie 240hz, Mouse Pad Generico Negro',
        'dni_cliente' => '31234567',
        'telefono_cliente' => '1134567890',
         'user_id' => 3,
        'created_at' => now(),
        'updated_at' => now()
    ],
]);
    }
}
