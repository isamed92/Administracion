<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //agrega - migrate
        Schema::table('provincias',function(Blueprint $table){
            $table->boolean('habilitado')->default('true');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //elimina - rollback
        Schema::table('provincias',function(Blueprint $table){
            $table->dropColumn('habilitado');
        });
    }
}
