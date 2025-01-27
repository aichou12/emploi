<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/xxxx_xx_xx_create_user_data_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('gender');
            $table->date('dob');
            $table->string('birthplace');
            $table->string('residence');
            $table->string('marital_status');
            $table->integer('children_count');
            $table->string('disability');
            $table->string('cv');
            $table->string('cover_letter');
            $table->text('experience');
            $table->integer('years_of_experience');
            $table->string('sector');
            $table->string('job_id');
            $table->string('education');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_data');
    }
}

};
