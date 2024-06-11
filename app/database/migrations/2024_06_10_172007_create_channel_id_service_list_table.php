<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ChannelId;
use App\Models\serviceList;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('channel_id_service_list', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ChannelId::class);
            $table->foreignIdFor(serviceList::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channel_id_service_list');
    }
};
