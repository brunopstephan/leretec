<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leretecs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class');
            $table->string('grade');
            $table->string('history_title');
            $table->string('history_synopsis');
            $table->string('history_cover');
            $table->string('history');
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
        Schema::dropIfExists('leretecs');
    }
};
