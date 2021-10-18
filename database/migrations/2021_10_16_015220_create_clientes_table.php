<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('tp_doc',100);
            $table->string('num_doc',100);
            $table->string('nombres',200);
            $table->string('apellidos',200);
            $table->string('tel',200);
            $table->string('direccion',200);
            $table->string('telefono',200);
            $table->string('email',200);
            $table->char('edo',1);
         
     
           
            
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
        Schema::dropIfExists('clientes');
    }
}
