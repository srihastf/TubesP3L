<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHelpdesk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpdesk', function (Blueprint $table) {
            $table->char('Id_HelpDeskP',7);
            $table->string('Nama_HelpDeskP',50);
            $table->enum('Status',['helpDeskP']);
            $table->char('Id_Layanan',7);
            $table->char('Id_Keluhan',7);
            $table->char('Id_CSLeader',7);
            $table->timestamps();

            $table->primary('Id_HelpDeskP');
            $table->foreign('Id_Layanan')
                    ->references('Id_Layanan')->on('layanan')
                    ->onUpdate('cascade'); 
            $table->foreign('Id_Keluhan')
                    ->references('Id_Keluhan')->on('keluhan')
                    ->onUpdate('cascade'); 
            $table->foreign('Id_CSLeader')
                    ->references('Id_CSLeader')->on('csleader')
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
        Schema::dropIfExists('helpdesk');
    }
}
