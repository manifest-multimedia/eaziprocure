<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('contact_first_name')->nullable(); 
            $table->string('contact_last_name')->nullable(); 
            $table->string('contact_other_names')->nullable(); 
            $table->string('contact_gender')->nullable(); 
            $table->string('contact_contact_type')->nullable(); 
            $table->string('contact_mobile')->nullable(); 
            $table->string('contact_email')->nullable(); 
            $table->string('contact_whatsapp')->nullable(); 
            $table->string('contact_sms')->nullable(); 
            $table->string('contact_organization')->nullable(); 
            $table->string('contact_additional_info')->nullable(); 
            $table->string('contact_city')->nullable(); 
            $table->string('contact_country')->nullable(); 
            $table->string('contact_address')->nullable(); 
            $table->string('contact_data1')->nullable(); 
            $table->string('contact_data2')->nullable(); 
            $table->string('contact_data3')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
