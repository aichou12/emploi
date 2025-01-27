<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('last_name');
        $table->string('first_name');
        $table->string('gender');
        $table->string('birthplace');
        $table->string('residence');
        $table->string('marital_status');
        $table->integer('children_count');
        $table->string('disability');
        $table->string('cv')->nullable();
        $table->string('cover_letter')->nullable();
        $table->string('sector');
        $table->string('education');
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn([
            'last_name', 'first_name', 'dob', 'gender', 'birthplace', 
            'residence', 'marital_status', 'children_count', 'disability', 
            'cv', 'cover_letter', 'sector', 'education'
        ]);
    });
}


   
};
