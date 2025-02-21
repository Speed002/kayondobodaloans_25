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
        Schema::create('referees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->string('referee_one_name');
            $table->string('referee_one_contact');
            $table->string('referee_one_relationship');
            $table->string('referee_two_name');
            $table->string('referee_two_contact');
            $table->string('referee_two_relationship');
            $table->string('stage_chairperson_name');
            $table->string('stage_chairperson_contact');
            $table->string('lc_chairperson_name');
            $table->string('lc_chairperson_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referees');
    }
};
