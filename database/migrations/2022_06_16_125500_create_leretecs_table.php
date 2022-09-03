<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;
use Illuminate\Support\Facades\DB;

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
            $table->integer('view')->default(0);
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

        DB::table('users')->insert(
            array(
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$SW4OjXI3bQQnEPSTlrdfkuRSt7mZkTP7rnTyIoBF62g3KBvnnWIM.', //admin
                'created_at' => '2022-09-03 11:03:50',
                'updated_at' => '2022-09-03 11:03:50'
            )
        );
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
