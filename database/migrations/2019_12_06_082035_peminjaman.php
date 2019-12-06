<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Peminjaman extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'peminjaman';

    /**
     * Run the migrations.
     * @table peminjaman
     *
     * @return void
     */
     
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_device')->nullable();
            $table->integer('id_msisdn_prod')->nullable();
            $table->integer('id_msisdn_testbed')->nullable();
            $table->string('br', 20)->nullable();
            $table->string('cr', 20)->nullable();
            $table->string('project_name', 25)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('borrow_name', 30)->nullable();
            $table->string('email', 25)->nullable();
            $table->string('hp', 15)->nullable();
            $table->string('environment', 45)->nullable();
            $table->decimal('balance_before')->nullable();
            $table->decimal('topup')->nullable();
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
