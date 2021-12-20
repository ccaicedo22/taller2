<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllProductos extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        $produc_procedure = "DROP PROCEDURE IF EXISTS `sp_allproducto`;
        CREATE  PROCEDURE `sp_allproducto`()
        BEGIN 
                SELECT * FROM `productos` ;
                 END ";
        \DB::unprepared($produc_procedure);
    }
    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produc_procedure');
    }
}
