<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondments', function (Blueprint $table) {
            $table->id();
            $table->integer('idEmp');
            $table->foreignId('employerOther_id');
            $table->integer('typeSecondment');
            $table->integer('year');
            $table->date('dateSecondment');

            $table->integer('noOther');
            $table->date('dateOther');
            $table->integer('onCouncil');
            $table->integer('onSecretary');
            $table->date('dateSecretary');
            $table->integer('onCollege');
            $table->date('dateCollege');
            $table->integer('college_id');

            $table->foreignId('user_id');
            $table->string('decision');
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
        Schema::dropIfExists('secondments');
    }
}
