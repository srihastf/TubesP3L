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
        DB::unprepared("CREATE TRIGGER `tr_kode_customer` BEFORE INSERT ON `customer`
        FOR EACH ROW begin
       if new.Id_Customer is null then
       set new.Id_Customer := (
       select concat('CST',
       lpad(ifnull(cast(max(right(Id_Customer, 3)) as unsigned integer),0) +1,4,'0')
        ) from customer
       );
       end if;
       end");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `tr_kode_customer`');
    }
}
