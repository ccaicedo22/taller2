<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEliminarProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $elimi_procedure = "DROP PROCEDURE IF EXISTS `sp_eliminarproducto`;
        CREATE  PROCEDURE `sp_eliminarproducto`(id INT)
        BEGIN 
                DELETE  FROM `productos` WHERE productos.id = id;
                 END ";
        \DB::unprepared($elimi_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elimi_procedure');
    }
}
