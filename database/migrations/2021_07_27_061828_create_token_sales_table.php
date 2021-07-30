<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_sales', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->text('description');
            $table->string('name');
            $table->string('symbol');
            $table->string('blockchain');
            $table->string('standard');
            $table->string('type');
            $table->integer('total');
            $table->integer('percent');
            $table->integer('exchange');
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
        Schema::dropIfExists('token_sales');
    }
}
