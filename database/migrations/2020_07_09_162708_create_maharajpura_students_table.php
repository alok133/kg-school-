<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaharajpuraStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maharajpura_students', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->String('email',150);
            $table->String('dob');
            $table->String('SC_ST');
            $table->String('caste');

            $table->String('mother_name');
            $table->String('father_name');
            $table->String('monthly_income');
            $table->String('father_occupdation');
            $table->String('father_designation');
            $table->String('designation_transfer');

            $table->String('department');
            $table->String('local_guardian');
            $table->String('guardian_relation');
            $table->String('local_address');
            $table->String('phone_number');

            $table->String('permanent_address');
            $table->String('bonafide_residence');
            $table->String('previous_school');
            $table->String('last_class');
            $table->String('session');
            $table->String('result');


            $table->String('medium');
            $table->String('enrollment_number');
            $table->String('next_class');
            $table->String('next_medium');
            $table->String('subject');

            $table->String('sssm_id');
            $table->String('aadhar_number');
            $table->String('bank_account');

            $table->String('number_of_document');
            $table->String('tc_number');
            $table->String('mark_Sheet');
            $table->String('conveyance');
            $table->String('image');

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
        Schema::dropIfExists('maharajpura_students');
    }
}
