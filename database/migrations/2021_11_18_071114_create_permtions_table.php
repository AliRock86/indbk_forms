<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermtionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $table = 'permtions';

    /**
     * Run the migrations.
     * موافقة اولية , موافقة نهائية , انشاء طلب , تعديل , حذف , موافقة ثانوية , تقديم الطلب
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('permtion_name');
            $table->string('permtion_name_ar');
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
        Schema::dropIfExists($this->table);
    }
}
