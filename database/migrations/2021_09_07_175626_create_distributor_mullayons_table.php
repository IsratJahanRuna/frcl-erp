<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorMullayonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributor_mullayons', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('distributor_division')->nullable();
            $table->string('distributor_zone')->nullable();
            $table->string('distributor_base')->nullable();

            $table->string('business_details')->nullable();
            $table->string('business_place')->nullable();
            $table->string('godown_size')->nullable();
            $table->string('have_godown')->nullable();
            $table->integer('mechanical_number')->nullable();
            $table->integer('non_mechanical_number')->nullable();
            $table->longText('mechanical_details')->nullable();
            $table->longText('nonMechanical_details')->nullable();
            $table->string('is_office')->nullable();
            $table->string('business_money_amount')->nullable();
            $table->string('business_own_money')->nullable();
            $table->string('business_bank_money')->nullable();
            $table->string('electric_business_experience_year')->nullable();
            $table->string('electric_business_experience_month')->nullable();
            $table->string('other_business_experience_year')->nullable();
            $table->string('other_business_experience_month')->nullable();
            $table->string('ownership_type')->nullable();

            $table->string('partnership_distibutor_name')->nullable();
            $table->string('partnership_distibutor_address')->nullable();
            $table->string('partnership_distibutor_percentage')->nullable();

            $table->string('before_electrical_distributorship_name')->nullable();
            $table->string('before_electrical_distributorship_duration')->nullable();

            $table->string('probability_business_duration_withFirstrays')->nullable();

            $table->string('partnership_distibutor_representative_name')->nullable();
            $table->string('partnership_distibutor_representative_address')->nullable();
            $table->string('partnership_distibutor_representative_mobile')->nullable();

            $table->string('assessment_person_image')->nullable();
            $table->string('assessment_person_name')->nullable();
            $table->string('assessment_person_designation')->nullable();
            $table->string('assessment_person_nid')->nullable();

            $table->string('applicant_person_image')->nullable();
            $table->string('applicant_person_name')->nullable();
            $table->string('applicant_person_mobile')->nullable();
            $table->string('applicant_person_area')->nullable();
            $table->string('applicant_person_division')->nullable();


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
        Schema::dropIfExists('distributor_mullayons');
    }
}
