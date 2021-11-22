<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTypesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $table = 'ticket_types';

    /**
     * Run the migrations.
     * استمارة طلب شراء او خدمات
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ticket_type_name');
            $table->string('ticket_type_name_ar');
            $table->unsignedBigInteger('specific_to_branche_id');
            $table->foreign('specific_to_branche_id')->references('id')->on('branches')->onDelete('cascade');
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
