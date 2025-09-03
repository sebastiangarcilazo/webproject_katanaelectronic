<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('creadores')->insert([
           [
                'name_creator' => 'Linus',
                'lastname_creator' => 'Sebastian',
                'release_date_creator' => '2008-11-24',
                'description_creator' => 'Fundador de Linus Tech Tips, canal de tecnología centrado en análisis de hardware y entretenimiento.',
                'subs_creator' => 15800000, 
                'age_creator' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_creator' => 'Juan',
                'lastname_creator' => 'Morel',
                'release_date_creator' => '2015-06-15',
                'description_creator' => 'Suprapixel crea contenido sobre tecnología, análisis de productos y reseñas desde una perspectiva honesta.',
                'subs_creator' => 850000, 
                'age_creator' => 33, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_creator' => 'Nate',
                'lastname_creator' => 'Gentile',
                'release_date_creator' => '2016-04-20',
                'description_creator' => 'Especialista en tecnología y hardware, conocido por sus comparativas de PC y contenido educativo sobre componentes.',
                'subs_creator' => 2000000,
                'age_creator' => 30, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
