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
        //
        Schema::create('file_regulations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('regulationid');
            $table->foreign('regulationid')->references('id')->on('regulations');
            $table->string('filename');
            $table->string('pathfile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('file_regulations');
    }
};
