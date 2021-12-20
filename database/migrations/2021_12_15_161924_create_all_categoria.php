<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "DROP PROCEDURE IF EXISTS `sp_consultacategoriaid`;
        
        CREATE PROCEDURE `sp_consultacategoriaid`( IN descripcion INT  )
            BEGIN
                select
                    productos.id,
                    productos.title,
                    description,
                    slug,
                    categorias.descripcion as categoria_id
                    from
                    productos
                    INNER join
                    categorias On categorias.id = productos.categoria_id
                    where
                    categorias.id = descripcion;
                    
            END ";



            
            DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $procedure = "DROP PROCEDURE IF EXISTS `sp_consultacategoriaid`";
        DB::unprepared($procedure);
    }
}
