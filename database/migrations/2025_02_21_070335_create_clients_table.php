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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');//each client is attached to the user who created them and they will still exist even if the use is deleted
            $table->string('name');
            $table->string('nin');
            $table->date('dob');
            $table->string('contact');
            $table->string('occupation');
            $table->string('residence');
            $table->string('stage_name');
            $table->string('father_name');
            $table->string('father_contact');
            $table->string('mother_name');
            $table->string('mother_contact');
            $table->date('date_of_agreement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
