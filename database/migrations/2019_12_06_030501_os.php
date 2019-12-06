<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Os extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'OS';

    /**
     * Run the migrations.
     * @table OS
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('os', 15)->nullable()->comment('Android - Lollipop (5)
Android - Marsmallow (6)
Android - Nougat (7)
Android - Oreo (8)
Android - Pie (9)
IOS 11
IOS 12
IOS 13
Mac OS (Catalina)
Mac OS (Mojave)
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