<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCheckinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_checkins', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default('1');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('branchoffice_id')->nullable();
            $table->unsignedBigInteger('table_id')->nullable();
            $table->string('folio')->nullable();
            $table->string('invoice_path')->nullable();
            $table->string('invoice')->nullable();
            $table->string('total')->nullable();
            $table->string('cart')->nullable();
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
        Schema::dropIfExists('user_checkins');
    }
}
