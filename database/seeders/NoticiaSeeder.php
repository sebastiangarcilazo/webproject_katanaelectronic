<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'title_noticia' => 'Lanzamiento de la nueva GPU RTX 5090',
                'subtitle_noticia' => 'Nvidia presenta su tarjeta gráfica más potente hasta la fecha',
                'release_date_noticia' => '2025-04-10',
                'descripcion_noticia' => 'Nvidia ha lanzado la RTX 5090, con mejoras significativas en rendimiento y eficiencia energética, ideal para gamers y profesionales.',
                'visitantes_noticia' => 15234,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_noticia' => 'Intel anuncia nueva generación de procesadores',
                'subtitle_noticia' => 'Los Core i9 de 14ª generación prometen un gran salto en potencia',
                'release_date_noticia' => '2025-03-20',
                'descripcion_noticia' => 'Intel ha revelado detalles de su nueva línea de procesadores Core i9, con mejoras en multi-threading y eficiencia para PCs de alta gama.',
                'visitantes_noticia' => 13452,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_noticia' => 'Tendencias en PC gaming para 2025',
                'subtitle_noticia' => 'Qué hardware y software dominarán este año',
                'release_date_noticia' => '2025-01-15',
                'descripcion_noticia' => 'Analizamos las principales tendencias en hardware y software para PC gaming que marcarán el 2025, desde GPUs hasta nuevos periféricos.',
                'visitantes_noticia' => 11200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
