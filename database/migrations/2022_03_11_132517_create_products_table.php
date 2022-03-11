<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); 
            $table->string('description')->nullable(); 
            $table->string('category_id')->nullable(); 
            $table->string('owner')->nullable();
            $table->string('cost')->nullable(); 
            $table->string('price')->nullable(); 
            $table->string('stock')->nullable(); 
            $table->string('supplier_id')->nullable(); 
            $table->string('status')->nullable(); 
            $table->string('customer_data1')->nullable(); 
            $table->string('customer_data2')->nullable(); 
            $table->string('customer_data3')->nullable(); 
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
        Schema::dropIfExists('products');
    }
}
