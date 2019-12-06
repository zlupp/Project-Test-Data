<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MsisdnTestbed extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'msisdn_testbed';

    /**
     * Run the migrations.
     * @table msisdn_testbed
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('msisdn', 45);
            $table->integer('id_brand')->nullable();
            $table->string('status', 45);
            $table->string('type', 45);
            $table->string('location', 45);
            $table->string('balance', 45);
            $table->integer('brand_id');
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
