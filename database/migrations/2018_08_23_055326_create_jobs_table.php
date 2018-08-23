<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('salary');
            $table->string('preferred_gender')->nullable();
            $table->boolean('salary_negotiable')->nullable();
            $table->date('deadline')->nullable();
            $table->string('type')->nullable();
            $table->longText('specification')->nullable();
            $table->longText('education_description')->nullable();
            $table->boolean('status')->nullable();
            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('jobs');
    }
}
