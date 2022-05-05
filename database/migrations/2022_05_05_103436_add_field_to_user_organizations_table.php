<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUserOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_organizations', function (Blueprint $table) {
            /*
            | We'd setup user privileges for organizations
            | 0=staff
            | 1=administrator
            | 2=admin
            | 3=finance
            | 4=hr
            | 5=procurement
            | 6=sales
            | Newly created accounts with no existing organizations would be assigned
            admin roles! 
            | Invited Users would be assigned roles given them at invitation.
            */
            $table->string('user_privilege')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_organizations', function (Blueprint $table) {
            //
        });
    }
}
