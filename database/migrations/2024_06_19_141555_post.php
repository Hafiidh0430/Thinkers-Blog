<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('post', function(Blueprint $table) {
            $table->id('id');
            $table->string('username');
            $table->text('title');
            $table->text('description');
            $table->timestamp('create_at')->useCurrent()->useCurrentOnUpdate();

            // $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade')->onUpdate('cascade');
          });
    }
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
