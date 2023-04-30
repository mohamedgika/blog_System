<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTagsTable extends Migration {

	public function up()
	{
		Schema::create('blog_tags', function(Blueprint $table) {
			$table->id();
            
            $table->string('name', 255);
			$table->string('slug', 255)->unique();

            $table->timestamps();
            $table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('blog_tags');
	}
}
