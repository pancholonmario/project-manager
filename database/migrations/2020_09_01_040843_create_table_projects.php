<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_city');
            $table->foreign("id_city")->references("id")->on("cities");

            $table->unsignedBigInteger('id_company');
            $table->foreign("id_company")->references("id")->on("companies");

            $table->unsignedBigInteger('id_user');
            $table->foreign("id_user")->references("id")->on("users");
            
            //nullable es para indicarle que tiene como null el campo de la base de datos

            $table->integer('budget')->nullable();
            $table->string('name', 30);
            $table->date('execution_date')->nullable();
            $table->tinyInteger('is_active');

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
        Schema::dropIfExists('projects');
    }
}
