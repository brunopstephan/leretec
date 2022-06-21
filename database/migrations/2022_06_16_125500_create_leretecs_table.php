<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->date('date');
            $table->string('name_aluno');
            $table->string('class_aluno');
            $table->string('grade_aluno');
            $table->string('title_historia');
            $table->mediumtext('cover_historia')->nullable();
            $table->longtext('sinopse_historia');
            $table->longtext('historia');
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
