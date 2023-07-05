<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references(  'id')->on(  'jobs');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('year');
            $table->integer('created_by')->nullable();
            $table->integer('update_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->dateTime('ceated_at')->nullable();
            $table->dateTime('update_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
