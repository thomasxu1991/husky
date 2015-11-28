<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelArticleTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rel_article_tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->integer('article_id',false,true);
            $table->integer('tag_id',false,true);
            $table->index('article_id');
            $table->index('tag_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rel_article_tags');
	}

}
