<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodcentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloodcenters', function (Blueprint $table) {
              $table->increments('id');
            $table->string('name');
             $table->text('place');
              $table->text('email');
            $table->string('phoneno');
             $table->text('image_name');
              $table->string('description');
              $table->text('amount');
               $table->string('A+');
                $table->string('A-');
                $table->string('B+');
                $table->string('B-');
                $table->string('AB+');
                $table->string('AB-');
                $table->string('O+');
                $table->string('O-');
                $table->string('status');
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
        Schema::dropIfExists('bloodcenters');
    }
}
