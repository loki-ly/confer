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
        Schema::create('discusses', function (Blueprint $table) {
            $table->id();
            $table->string('paper_id')-> default('$paper'); $id;
            $table->string('userid')-> default('$userid'); auth()->id();
            $table->string('name');
            $table->string('email');
            $table->longText('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discusses');
    }
};
