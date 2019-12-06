<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Merk extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'merk';

    /**
     * Run the migrations.
     * @table merk
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('merk', 45)->nullable()->comment('Samsung 
Iphone
Xiaomi
Realme
LG
');
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
