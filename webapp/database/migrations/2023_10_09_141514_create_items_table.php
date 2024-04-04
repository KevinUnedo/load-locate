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
        Schema::create('items', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->default(2);
            $table->string('name');
            $table->date('date');
            $table->string('category');
            $table->string('location');
            $table->text('more_information');
            $table->string('image')->nullable();
            $table->boolean('information')->default(false);  // lost item is false, and found item is true
            $table->boolean('is_claimed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('item__founds', function (Blueprint $table) {
            $table->dropForeign(['username']);
        });

        Schema::dropIfExists('item__founds');
    }
};