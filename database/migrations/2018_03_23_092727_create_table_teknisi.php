<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTeknisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teknisi', function (Blueprint $table) {
            $table->char('Id_Teknisi',7);
            $table->string('Nama_Teknisi',50);
            $table->enum('Status',['teknisi']);
            $table->char('Id_HelpDeskP',7);
            $table->char('Id_Layanan',7);
            $table->timestamps();

            $table->primary('Id_Teknisi');
            $table->foreign('Id_HelpDeskP')
                    ->references('Id_HelpDeskP')->on('helpdesk')
                    ->onUpdate('cascade'); 
            $table->foreign('Id_Layanan')
                    ->references('Id_Layanan')->on('layanan')
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
        Schema::dropIfExists('teknisi');
    }
}
