<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('post', function(Blueprint $table) {
            $table->id('id')->primary();
            $table->string('username')->nullable(false);
            $table->string('image')->nullable(true);
            $table->text('title')->nullable(false);
            $table->text('description')->nullable(false);
            $table->date('create_at')->default(now());
          });
    }
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
