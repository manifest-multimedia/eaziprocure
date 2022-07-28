<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenders', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->longText('details')->nullable();
            $table->string('summary')->nullable();
            $table->string('opening_date')->nullable();
            $table->string('closing_date')->nullable();
            $table->string('org_id')->nullable();
            $table->string('created_by')->nullable();
            $table->string('stage')->nullable();
            $table->string('status')->nullable();
            $table->string('custom_data1')->nullable();
            $table->string('custom_data2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenders', function (Blueprint $table) {
            //
        });
    }
}
