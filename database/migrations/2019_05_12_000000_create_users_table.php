<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('startdate');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments')
                  ->onDelete('cascade');
            $table->integer('position_id')->unsigned(); 
            $table->foreign('position_id')
                  ->references('id')
                  ->on('positions')
                  ->onDelete('cascade');
        });

        //Insert the default admin user
        DB::table('users')->insert(
            array(
                'id' => 1,
                'name' => 'HR',
                'email' => 'hr@gmail.com',
                'password' => bcrypt('hr'),
                'startdate' => '21/05/2019',
                'department_id'=> 1,
                'position_id' => 1,
                'remember_token' => str_random(10)
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
