<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostTagTable extends Migration {

	public function up()
	{
		Schema::create('blog_post_tag', function(Blueprint $table) {
			$table->id();

			$table->tinyInteger('tag_id')->unsigned()->index();
			$table->tinyInteger('post_id')->unsigned()->index();

            $table->softDeletes();


		});
	}

	public function down()
	{
		Schema::drop('blog_post_tag');
	}
}
