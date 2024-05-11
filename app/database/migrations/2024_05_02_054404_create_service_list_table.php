<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {




        Schema::create('service_list', function (Blueprint $table) {
            $table->id();
            $table->text('service_id');
            $table->text('service_name');
            $table->text('service_desc');
            $table->text('service_postman');
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_list');
    }
};
