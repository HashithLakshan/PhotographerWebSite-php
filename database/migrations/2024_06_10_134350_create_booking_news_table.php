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
        Schema::create('booking_news', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('package_id');
            $table->date('date');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_news');
    }
};
