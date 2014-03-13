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
			$table->string('og-sitename')->nullable();
			$table->text('og-description')->nullable();
			$table->string('og-url')->nullable();
			$table->string('og-title')->nullable();
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
			$table->dropColumn('og-sitename');
			$table->dropColumn('og-description');
			$table->dropColumn('og-url');
			$table->dropColumn('og-title');
		});
	}

}
