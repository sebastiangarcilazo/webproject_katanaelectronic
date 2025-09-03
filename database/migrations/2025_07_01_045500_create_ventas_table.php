<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('ventas', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('cliente_id');
        $table->unsignedBigInteger('producto_id');
        $table->date('fecha_venta');
        $table->timestamps();
        $table->foreign('cliente_id')->references('cliente_id')->on('clientes')->onDelete('cascade');
        $table->foreign('producto_id')->references('producto_id')->on('productos')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('ventas');
}
};
