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
        Schema::create('pins', function (Blueprint $table) {
            $table->id();
            //foreign id of the user (pin creator)
            $table->unsignedBigInteger('user_id');
//            $table->foreignIdFor(App\Models\User::class);
            $table->string('event_type');
            $table->string('lng');
            $table->string('lat');
            $table->string('body');
            $table->boolean('disregard')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pins');
    }
};
