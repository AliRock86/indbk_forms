<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $table = 'tickets';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject')->default(null);
            $table->integer('material_no')->default(0);
            $table->integer('number')->default(1);
            $table->boolean('case_type')->default(false);// false = normal , true = critical
            $table->text('description')->default(null);
            $table->text('description_by_chief')->default(null);
            $table->unsignedBigInteger('sub_category_id');// type of service
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->unsignedBigInteger('branch_secion_id');// employee section
            $table->foreign('branch_secion_id')->references('id')->on('branche_secions')->onDelete('cascade');
            $table->unsignedBigInteger('ticket_type_id');// ticket type
            $table->foreign('ticket_type_id')->references('id')->on('ticket_types')->onDelete('cascade');
            $table->unsignedBigInteger('create_by_user_id');// the user, who create this request
            $table->foreign('create_by_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
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
