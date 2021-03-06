<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImsYzMemberFavoriteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('yz_member_favorite')) {
            Schema::create('yz_member_favorite', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('member_id');
                $table->integer('uniacid');
                $table->integer('goods_id');
                $table->integer('created_at');
                $table->boolean('deleted');
            });
        }
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('yz_member_favorite');
	}

}
