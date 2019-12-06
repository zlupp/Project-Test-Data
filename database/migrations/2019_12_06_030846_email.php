<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Email extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'email';

    /**
     * Run the migrations.
     * @table email
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_device');
            $table->string('email', 30)->nullable();
            $table->string('password_email', 30)->nullable();
            $table->string('password_fb', 30)->nullable();
            $table->string('password_appleid', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}