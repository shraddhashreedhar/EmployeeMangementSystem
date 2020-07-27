<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaveapp', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Ename');
            $table->string('Eid');
            $table->string('Type');
            $table->string('From');
            $table->string('To');
            $table->string('Description');

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
        Schema::dropIfExists('leaveapp');
    }
}
