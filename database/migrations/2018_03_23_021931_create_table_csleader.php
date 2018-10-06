<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCsleader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csleader', function (Blueprint $table) {
            $table->char('Id_CSLeader',7);
            $table->string('Nama_CSLeader',50);
            $table->text('Alamat_CSLeader');
            $table->string('Email',30);
            $table->enum('Status',['CSLeader']);
            $table->timestamps();

            $table->primary('Id_CSLeader');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csleader');
    }
}
