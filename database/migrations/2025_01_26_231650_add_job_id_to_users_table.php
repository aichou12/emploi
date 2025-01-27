<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJobIdToUsersTable extends Migration
{
    /**
     * Exécuter la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Ajouter la colonne job_id (unsigned big integer)
            $table->unsignedBigInteger('job_id')->nullable();

            // Ajouter la contrainte de clé étrangère
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('set null');
        });
    }

    /**
     * Annuler la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Supprimer la contrainte de clé étrangère et la colonne
            $table->dropForeign(['job_id']);
            $table->dropColumn('job_id');
        });
    }
}
