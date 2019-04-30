<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveReqestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_reqests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('startdate');
            $table->string('enddate');
            $table->integer('duration');
            $table->integer('leave_type_id')->unsigned();
            $table->foreign('leave_type_id')
                  ->references('id')
                  ->on('leave_types')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave_reqests');
    }
}
