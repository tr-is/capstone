<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable002 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('preferred_location')->nullable();
            $table->string('experience')->nullable();
            $table->string('field_of_experience')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('preferred_distance_to_work')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn([
                'preferred_location',
                'experience',
                'field_of_experience',
                'expected_salary',
                'preferred_distance_to_work'
            ]);
        });
    }
}
