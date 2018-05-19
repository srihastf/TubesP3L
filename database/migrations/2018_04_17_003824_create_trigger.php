<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE TRIGGER `tr_kode_customer` BEFORE INSERT ON `users`
        FOR EACH ROW begin
       if new.charID is null then
       set new.charID := (
       select concat('CST',
       lpad(ifnull(cast(max(right(charID, 3)) as unsigned integer),0) +1,4,'0')
        ) from users
       );
       end if;
       end");

       DB::unprepared("CREATE TRIGGER `tr_kode_customer2` BEFORE INSERT ON `customer`
       FOR EACH ROW begin
       if new.Id_Customer is null then
       set new.Id_Customer := (
       select charID from users where users.name = new.Nama_Customer
       );
       end if;
       end");
/*
        DB::unprepared("CREATE TRIGGER `tr_kode_keluhan` BEFORE INSERT ON `keluhan`
        FOR EACH ROW begin
        if new.Id_Keluhan is null then
        set new.Id_Keluhan := (
        select concat('KLH',
        lpad(ifnull(cast(max(right(Id_Keluhan, 3)) as unsigned integer),0) +1,4,'0')
        ) from keluhan
        );
        end if;
        end");*/
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // DB::unprepared('DROP TRIGGER `tr_kode_customer`');
        DB::unprepared('DROP TRIGGER `tr_kode_customer2`');
        DB::unprepared('DROP TRIGGER `tr_kode_keluhan`');
    }
}
