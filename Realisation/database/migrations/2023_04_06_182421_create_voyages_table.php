<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->time('dateDepart');
            $table->time('dateDariver');
            $table->date('dateVoyage');
            $table->string('prix');
            $table->foreignId('societe_id')->constrained('societes');
            $table->foreignId('transport_id')->constrained('transports');
            $table->string('villeDepart');
            $table->string('villeArriver');
            $table->integer('maxPlace');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
