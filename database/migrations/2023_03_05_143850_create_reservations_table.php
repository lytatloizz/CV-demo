<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->string('reservation_name');
            $table->string('reservation_email');
            $table->date('reservation_date');
            $table->time('reservation_time');
            $table->unsignedBigInteger('table_id');
            $table->timestamps();
            //create foreign-key
            $table->foreign('table_id')->references('table_id')->on('tables')->onDelete('cascade')->onUpdate('cascade');
        });

        // // Change the date format to DD/MM/YYYY
        // DB::statement("ALTER TABLE reservations MODIFY reservation_date DATE FORMAT 'DD/MM/YYYY'");
        // // Change the time format to HH:MM AM/PM
        // DB::statement("ALTER TABLE reservations MODIFY reservation_time TIME FORMAT 'HH:MI AM'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
