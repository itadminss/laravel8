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
        Schema::create('quiz05s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //week05
            $table->integer('item');
            $table->string('fishname');
            $table->float('weight');
            $table->date('saledate');
            $table->text('remark');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz05s');
    }
};
