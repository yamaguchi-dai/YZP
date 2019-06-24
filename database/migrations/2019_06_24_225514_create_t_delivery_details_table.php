<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTDeliveryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_delivery_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('t_delivery_id');
            $table->integer('m_tax_id');
            $table->integer('m_item_id');
            $table->integer('item_price');
            $table->integer('item_count');
            $table->integer('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_delivery_details');
    }
}
