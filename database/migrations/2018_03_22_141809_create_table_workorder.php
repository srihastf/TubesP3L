<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWorkorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorder', function (Blueprint $table) {
            $table->char('Id_WorkOrder',7);
            $table->string('Nama_WorkOrder',50);
            $table->enum('Status',['workOrder']);
            $table->timestamps();

            $table->primary('Id_WorkOrder');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workorder');
    }
}
