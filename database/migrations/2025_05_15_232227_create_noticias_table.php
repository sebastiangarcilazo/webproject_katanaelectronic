<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id('noticia_id');

            $table->string('title_noticia', 50);
            $table->string('subtitle_noticia');
            $table->date('release_date_noticia');
            $table->text('descripcion_noticia');
            $table->unsignedInteger('visitantes_noticia');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
