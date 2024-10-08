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
        Schema::create('admin_translations', function (Blueprint $table) {
            $table->id();;
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('type')->nullable();;
            $table->string('address')->nullable();;
            $table->unique(['admin_id', 'locale']);
            $table->foreignId('admin_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_translations');
    }
};
