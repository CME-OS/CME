<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampaignQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campaign_queue', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->integer('campaign_id')->nullable();
			$table->integer('time')->nullable();
			$table->string('locked_by', 225)->nullable();
			$table->integer('processed')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('campaign_queue');
	}

}
