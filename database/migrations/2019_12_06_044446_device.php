<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Device extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'device';

    /**
     * Run the migrations.
     * @table device
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 20)->nullable()->comment('Samsung J7 Core
Samsung A8
Samsung Galaxy S10+
Iphone xs');
            $table->integer('id_merk')->unsigned()->comment('Samsung
Iphone
LG
Xiaomi
');
            $table->string('type', 8)->nullable()->comment('Android
IOS
Mac OS
');
            $table->integer('id_os')->unsigned()->comment('Android - Lollipop (5)
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
            $table->integer('imei1')->nullable();
            $table->integer('imei2')->nullable();
            $table->string('card_slot', 8)->nullable();
            $table->string('card_type', 6)->nullable();
            $table->string('owner', 10)->nullable()->comment('Equipment, ITQA-Sigma');
            $table->string('project_name', 30)->nullable();
            $table->integer('status_mark')->nullable();

            $table->index(["id_merk"], 'fk_device_merk1_idx');

            $table->index(["id_os"], 'fk_device_OS1_idx');


            $table->foreign('id_merk', 'fk_device_merk1_idx')
                ->references('id')->on('merk')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_os', 'fk_device_OS1_idx')
                ->references('id')->on('OS')
                ->onDelete('no action')
                ->onUpdate('no action');
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
