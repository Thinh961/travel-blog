<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReelTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reel_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reel_id');
            $table->string('locale');
            $table->string('name');
            $table->unique(['reel_id', 'locale']);
            $table->foreign('reel_id')->references('id')->on('reels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reel_translations');
    }
}
