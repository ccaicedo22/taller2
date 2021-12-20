<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrearProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $creap_procedure = "DROP PROCEDURE IF EXISTS `sp_crearproducto`;
        CREATE  PROCEDURE `sp_crearproducto`(
            `title` VARCHAR(150),
            `description` VARCHAR(150),
            `slug` VARCHAR(150), 
            `categoria_id` int
        )    
        
        BEGIN
        INSERT INTO `productos`(title,description,slug,categoria_id)
            VALUES (`title`,`description`,`slug`,`categoria_id`);
        
        END ";

        DB::unprepared($creap_procedure);

               
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creap_procedure');
    }
}
