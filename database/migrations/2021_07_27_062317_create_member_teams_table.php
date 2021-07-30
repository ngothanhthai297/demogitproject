<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->text('content');
            $table->text('description');
            $table->integer('experces_id');
            $table->text('photo');
            $table->enum('status',['teams','advisors'])->default('teams');
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
        Schema::dropIfExists('member_teams');
    }
}
