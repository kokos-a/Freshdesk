<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuzzleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guzzle_models', function (Blueprint $table) {
            $table->id();
            $table->string('Ticket_id');
            $table->string('Description');
            $table->string('Status');
            $table->string('Priority');
            $table->string('Agent_ID');
            $table->string('Agent_Name');
            $table->string('Agent_Email');
            $table->string('Contact_ID');
            $table->string('Contact Name');
            $table->string('Contact_Email');
            $table->string('Group_ID');
            $table->string('Group_Name');
            $table->string('Company_ID');
            $table->string('Company_Name');
            $table->text('Comments');
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
        Schema::dropIfExists('guzzle_models');
    }
}
