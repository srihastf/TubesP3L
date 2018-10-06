<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKeluhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluhan', function (Blueprint $table) {
            $table->char('Id_Keluhan',7);
            $table->text('Detail_Keluhan');
            $table->char('Id_Customer',7);
            $table->char('Id_WorkOrder',7);
            $table->timestamps();

            $table->primary('Id_Keluhan');
            $table->foreign('Id_Customer')
                    ->references('Id_Customer')->on('customer')
                    ->onUpdate('cascade'); 
            $table->foreign('Id_WorkOrder')
                    ->references('Id_WorkOrder')->on('workorder')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluhan');
    }
}
