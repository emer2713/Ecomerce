<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('type')                      ->nullable();
            $table->integer ('branchoffice_id')       ->unsigned()->nullable();
            $table->integer ('user_id')       ->unsigned()->nullable();
            $table->string('job', 128)                   ->nullable();
            $table->string('salary_day', 128)                   ->nullable();
            $table->string('salary_week', 128)                   ->nullable();

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
        Schema::dropIfExists('employees');
    }
}
