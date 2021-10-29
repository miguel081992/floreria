<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
        
        CREATE TRIGGER act_cantidad_insumo 
        AFTER INSERT ON productos
            FOR EACH ROW 
            BEGIN
                UPDATE insumos
                SET  insumos.cantidad = insumos.cantidad - new.cantidadInsumo 
                WHERE insumos.id = new.insumo_id;
            END
            
        
        ');
    }
}
