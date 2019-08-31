<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTEstimateAddIsFixed extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('t_estimates', function (Blueprint $blueprint) {
            $blueprint->boolean('is_fixed')->default('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('t_estimates', function (Blueprint $blueprint) {
            $blueprint->dropColumn('is_fixed');
        });
    }
}
