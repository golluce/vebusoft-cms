<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();
            $table->string('model_type'); // Örn: App\Models\Page
            $table->unsignedBigInteger('model_id'); // Örn: 12
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longText('content')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->timestamps(); // created_at = revizyon tarihi
        });
    }

    public function down()
    {
        Schema::dropIfExists('revisions');
    }
};
