Table name: migration  Migration File: 2019_12_05_000000_create_migration_table.php

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Coba extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'migration';

    /**
     * Run the migrations.
     * @table migration
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 45)->nullable();
            $table->string('slug', 45)->nullable();
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
