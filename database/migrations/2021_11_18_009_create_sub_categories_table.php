<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $table = 'sub_categories';

    /**
     * Run the migrations.
     *ضمن الطلبات اكو طلب شراء او طلب خدمات
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sub_category_name');
            $table->string('sub_category_name_ar');
            $table->unsignedBigInteger('category_type_id');
            $table->foreign('category_type_id')->references('id')->on('categories')->onDelete('cascade');
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
