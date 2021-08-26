<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table){
            $table->bigInteger('id_producto');
            $table->string('nombre');
            $table->text('descripccion')->nullable();
            $table->string('precio');
            $table->string('cantidad');
            $table->string('barra',20);
            $table->integer('estado');
            $table->integer('papelera')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producto');
    }
}
