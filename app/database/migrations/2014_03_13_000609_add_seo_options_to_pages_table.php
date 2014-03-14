<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSeoOptionsToPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pages', function(Blueprint $table) {
			$table->string('canonical')->nullable();
			$table->text('og_description')->nullable();
			$table->string('og_url')->nullable();
			$table->string('og_title')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pages', function(Blueprint $table) {
			$table->dropColumn('canonical');
			$table->dropColumn('og_description');
			$table->dropColumn('og_url');
			$table->dropColumn('og_title');
		});
	}

}
