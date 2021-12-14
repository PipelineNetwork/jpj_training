<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLesensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("kelas")->nullable();
            $table->string("ic")->nullable();
            $table->string("tarikh_lulus")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesens');
    }
}
