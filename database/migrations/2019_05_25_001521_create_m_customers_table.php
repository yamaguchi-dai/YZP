<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name',20);
            $table->string('customer_kana_name',20);
            $table->string('tel_no1',5);
            $table->string('tel_no2',5);
            $table->string('tel_no3',5);
            $table->string('fax_no1',5);
            $table->string('fax_no2',5);
            $table->string('fax_no3',5);
            $table->string('post_no',7);
            $table->string('prefectures',6);
            $table->string('address1',25);
            $table->string('address2',25);
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
        Schema::dropIfExists('m_customers');
    }
}
