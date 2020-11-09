<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id');
            $table->integer('section_id');
            $table->string('regi_no');
            $table->string('admn_no');
            $table->string('admnfno');
            $table->date('doadmn');
            $table->integer('type');
            $table->integer('session_id');
            $table->integer('rollno');
            $table->string('name');
            $table->string('fname');
            $table->string('cnic');
            $table->integer('profession_id');
            $table->date('dob');
            $table->string('pre_address');
            $table->integer('llno');
            $table->integer('cell1');
            $table->integer('cell2');
            $table->string('address');
            $table->string('gname');
            $table->string('gaddress');
            $table->integer('gphone');
            $table->string('sex',7);
            $table->integer('religion_id');
            $table->integer('cost_id');
            $table->integer('contry_id');
            $table->integer('tongue_id');
            $table->string('lastschool');
            $table->integer('status');
            $table->integer('admnby');
            $table->string('picture',191);
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
        Schema::dropIfExists('students');
    }
}
