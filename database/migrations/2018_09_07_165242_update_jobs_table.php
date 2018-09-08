<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function(Blueprint $table){
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('salary_range')->nullable();
            $table->string('skills_required')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function(Blueprint $table){
            $table->dropColumn([
                'experience',
                'education',
                'salary_range',
                'skills_required'
            ]);
        });
    }
}
