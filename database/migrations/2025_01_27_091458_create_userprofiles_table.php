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
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->enum('gender', ['male', 'female']);
            $table->date('dob');
            $table->string('birthplace');
            $table->unsignedBigInteger('residence'); // Assuming countries table for residence
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed']);
            $table->integer('children_count');
            $table->enum('disability', ['no', 'yes']);
            $table->string('cv')->nullable();
            $table->string('cover_letter')->nullable();
            $table->string('sector');
            $table->unsignedBigInteger('job_id');
            $table->integer('experience_2');
            $table->text('experience_comments')->nullable();
            $table->string('degree');
            $table->string('institution');
            $table->string('degree_title');
            $table->year('graduation_year');
            $table->string('specialty');
            $table->string('other_degrees')->nullable();
            $table->timestamps();

            // Defining foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userprofiles');
    }
};
