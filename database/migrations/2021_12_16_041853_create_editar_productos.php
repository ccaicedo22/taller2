<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditarProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $edit_procedure = "DROP PROCEDURE IF EXISTS `sp_editarproductos`;
        CREATE  PROCEDURE `sp_editarproductos`
        (title varchar(150),description varchar(150),slug varchar(150),categoria_id INT,id INT)
        BEGIN 
                UPDATE  `productos` SET productos.title= title, 
                                        productos.description= description,
                                        productos.slug= slug,
                                        productos.categoria_id=categoria_id
                WHERE productos.id = id;
                 END ";
        \DB::unprepared($edit_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edit_procedure');
    }
}
