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
        Schema::create('blog_posts', function (Blueprint $table) {

			$table->id();

            // Relation With Categories Table
            $table->foreignId('category')->references('id')->on('blog_categories')->cascadeOnDelete();

            // Relation With Sub Categories Table
            $table->foreignId('subcategory')->references('id')->on('blog_sub_categories')->cascadeOnDelete();

            //Post Table
            $table->string('title', 255);
			$table->string('slug', 255)->unique();
            $table->text('content');
			$table->string('description', 255)->nullable();
            $table->text('summary');
            $table->string('image')->nullable();
            $table->text('comments')->nullable();
			$table->enum('status', ['writer', 'admin'])->index();
			$table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
