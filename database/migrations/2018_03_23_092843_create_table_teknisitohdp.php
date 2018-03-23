<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTeknisitohdp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teknisitohdp', function (Blueprint $table) {
            $table->char('Id_Laporan',7);
            $table->char('Id_Layanan',7);
            $table->date('Tgl_Laporan');
            $table->char('Id_Teknisi',7);
            $table->char('Id_HelpDeskP',7);
            $table->enum('Status_Laporan',['selesai','belum_selesai']);
            $table->timestamps();

            $table->primary('Id_Laporan');
            $table->foreign('Id_Layanan')
                    ->references('Id_Layanan')->on('layanan')
                    ->onUpdate('cascade'); 
            $table->foreign('Id_Teknisi')
                    ->references('Id_Teknisi')->on('teknisi')
                    ->onUpdate('cascade'); 
            $table->foreign('Id_HelpDeskP')
                    ->references('Id_HelpDeskP')->on('helpdesk')
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
        Schema::dropIfExists('teknisitohdp');
    }
}
