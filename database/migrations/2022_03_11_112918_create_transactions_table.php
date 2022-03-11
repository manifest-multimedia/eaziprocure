<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(); 
            $table->string('amount')->nullable(); 
            $table->string('customer_id')->nullable(); 
            $table->string('status')->nullable();
            $table->string('transaction_date')->nullable(); 
            $table->string('remarks')->nullable();
            $table->string('custom_data_1')->nullable(); 
            $table->string('custom_data_2')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
