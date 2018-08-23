<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('address');
            $table->string('mobile_number');
            $table->string('gender');
            $table->longText('education')->nullable();
            $table->longText('skills')->nullable();
            $table->longText('categories');
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
            $table->dropColumn('address');
            $table->dropColumn('mobile_number');
            $table->dropColumn('gender');
            $table->dropColumn('education');
            $table->dropColumn('skills');
            $table->dropColumn('categories');
        });
    }
}
