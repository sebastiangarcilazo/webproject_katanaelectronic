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
        Schema::create('creadores', function (Blueprint $table) {
            $table->id('creador_id');

            $table->string('name_creator', 20);
            $table->string('lastname_creator', 20);
            $table->date('release_date_creator');
            $table->text('description_creator');
            $table->unsignedInteger('subs_creator');
            $table->unsignedInteger('age_creator');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creadores');
    }
};
