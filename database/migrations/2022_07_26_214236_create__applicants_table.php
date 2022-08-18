<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename')->nullable(true);
            $table->date('birthday');
            $table->integer('age');
            $table->string('birthplace');
            $table->string('gender');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('address');
            $table->string('postalcode');
            $table->string('password');
            $table->integer('agreement');  
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
        Schema::dropIfExists('_applicants');
    }
}
