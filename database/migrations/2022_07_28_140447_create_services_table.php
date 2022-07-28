<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable(); 
            $table->string('description')->nullable();
            $table->string('category_id')->nullable();
            $table->string('owner')->nullable();
            $table->string('billing_type')->nullable();
            $table->string('cost')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('status')->nullable();
            $table->string('custom_data1')->nullable();
            $table->string('custom_data2')->nullable();
            $table->string('custom_data3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
