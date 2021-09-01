<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_organisation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->references('id')->on('user');
            $table->bigInteger('organisation_id')->references('id')->on('organisation');
            $table->timestamps( );
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_organisation');
    }
}
