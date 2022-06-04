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
        Schema::create('a_users', function (Blueprint $table) {
            $table->id('adminId');
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string("email", 255)->nullable();
            $table->enum("gender", ["M","F","O"]);
            $table->string("country", 255);
            $table->string("image")->nullable();
            $table->string("password")->nullable();
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
        Schema::dropIfExists('a_users');
    }
};
