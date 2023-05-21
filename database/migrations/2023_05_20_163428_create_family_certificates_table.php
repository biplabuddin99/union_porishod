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
        Schema::create('family_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('form_no')->nullable();
            $table->string('apply_date')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('husband_wife')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('voter_id_no')->nullable();
            $table->string('birth_registration_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('freedom_fighter')->nullable();
            $table->string('edu_qual')->nullable();
            $table->string('source_income')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('name_head_family')->nullable();
            $table->string('comments_permanent_union')->nullable();
            $table->string('relationship_applicant')->nullable();
            $table->integer('num_male')->nullable();
            $table->integer('num_female')->nullable();
            $table->integer('num_male_vot')->nullable();
            $table->integer('num_female_vot')->nullable();
            $table->string('house_holding_number')->nullable();
            $table->string('street_nm')->nullable();
            $table->string('village_name')->nullable();
            $table->integer('ward_id')->nullable();
            $table->integer('union_id')->nullable();
            $table->integer('upazila_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('post_office')->nullable();
            $table->string('image')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('digital_birth_certificate')->nullable();
            $table->date('approval_date')->nullable();
            $table->string('cancel_reason')->nullable();
            $table->string('status')->default(0);
            $table->integer('approved_by')->nullable();
            $table->integer('chairman_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

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
        Schema::dropIfExists('family_certificates');
    }
};
