<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('org_name')->nullable(); 
            $table->string('org_email')->nullable(); 
            $table->text('org_address')->nullable(); 
            $table->string('org_city')->nullable(); 
            $table->string('org_country')->nullable(); 
            $table->string('org_logo')->nullable(); 
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
        Schema::dropIfExists('org_profiles');
    }
}
