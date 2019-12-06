<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MsisdnProd extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'msisdn_prod';

    /**
     * Run the migrations.
     * @table msisdn_prod
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('msisdn', 15);
            $table->string('name', 30)->nullable()->comment('nama diambil dari dsc');
            $table->integer('id_brand')->comment('Simpati,Kartu As, Loop, Kartu Halo, XL, Im3, Axis, 3(Three), Smartfren
');
            $table->string('status', 9)->nullable()->comment('Aktif, Non-Aktif');
            $table->decimal('balance_cls')->nullable();
            $table->date('exp_date')->nullable()->comment('tanggal expired dan billing cycle');
            $table->string('type', 8)->nullable()->comment('Prepaid, Postpaid');
            $table->string('sub_type', 15)->nullable();
            $table->decimal('link_aja')->nullable();
            $table->string('project_name', 30)->nullable();
            $table->integer('status_mark')->nullable();
            $table->integer('brand_id');

            $table->index(["id"], 'id');

            $table->unique(["id"], 'id_UNIQUE');
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
