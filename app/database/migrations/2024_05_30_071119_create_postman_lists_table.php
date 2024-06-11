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
        Schema::create('postman_lists', function (Blueprint $table) {
            $table->id('no_postman');
            $table->foreignId('service_name')->references('service_name')->on('service_list')->S();
            $table->text('file_postman'); //pke longblob kl g muats
            $table->text('service_id');
            //tambahin yg download
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postman_lists');
    }
};
