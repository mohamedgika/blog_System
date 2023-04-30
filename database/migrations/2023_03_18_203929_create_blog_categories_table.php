<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('blog_categories', function(Blueprint $table) {

			$table->id();

            //category table
            $table->string('title', 255);
			$table->string('slug', 255)->unique();
			$table->string('content', 255)->nullable();
            $table->string('image')->nullable();

            $table->timestamps();
            $table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('blog_categories');
	}
}
