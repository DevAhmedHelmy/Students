<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('doctor_id')->unsigned();
            $table->timestamps();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
        Schema::create('student_subject', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('student_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            
            $table->primary(['student_id','subject_id']);
        });
        Schema::table('student_subject', function(Blueprint $table){

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('student_subject');
         DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
