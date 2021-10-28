<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('categories', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('parent_id')->nullable()->unsigned();
			$table->string('name', 64);
			$table->string('slug', 64)->nullable();
			$table->string('description', 255)->nullable();
			$table->string('icon', 64)->nullable();
			$table->timestamps();

			$table->unique(['parent_id', 'slug'], 'category');
		});

		Schema::create('categorables', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('category_id')->unsigned();
			$table->morphs('categorable');
			$table->timestamps();

			$table->unique(['category_id', 'categorable_type', 'categorable_id'], 'categorable');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('categorables');
		Schema::dropIfExists('categories');
	}
}
