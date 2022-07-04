<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(); 
            $table->string('org_id')->nullable(); 
            $table->string('first_name')->nullable(); 
            $table->string('last_name')->nullable(); 
            $table->string('other_name')->nullable(); 
            $table->string('date_of_birth')->nullable(); 
            $table->string('mobile_number')->nullable(); 
            $table->string('country')->nullable(); 
            $table->string('city')->nullable(); 
            $table->string('state')->nullable(); 
            $table->string('postal_address')->nullable(); 
            $table->string('occupation')->nullable(); 
            $table->string('company')->nullable(); 
            $table->string('email')->nullable(); 
            $table->string('website')->nullable(); 
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
        Schema::dropIfExists('contacts');
    }
}
