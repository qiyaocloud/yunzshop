<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeletePointToImsYzGoodsSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('yz_goods_sale', function (Blueprint $table) {
            if (Schema::hasColumn('yz_goods_sale', 'point')) {
                $table->dropColumn('point');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('yz_goods_sale', function (Blueprint $table) {
            $table->dropColumn('point');
        });
    }
}
