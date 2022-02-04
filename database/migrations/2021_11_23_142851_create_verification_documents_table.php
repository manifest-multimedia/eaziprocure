<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verification_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_title')->nullable();
            $table->string('url')->nullable();
            $table->string('uploaded_by')->nullable(); 
            $table->string('approved_by')->nullable(); 
            $table->unsignedInteger('org_id'); 
            $table->string('status'); 
            $table->timestamps();
            $table->foreign('org_id')
                ->references('id')
                ->on('org_profiles')
                ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verification_documents');
    }
}
