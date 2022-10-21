<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudgementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judgements', function (Blueprint $table) {
            $table->id();
            $table->boolean('law_1')->default(True);
            $table->boolean('law_1_clear')->default(false);
            $table->boolean('law_2')->default(false);
            $table->boolean('law_2_clear')->default(false);
            $table->boolean('law_3')->default(false);
            $table->boolean('law_3_clear')->default(false);
            $table->boolean('xss_1')->default(false);
            $table->boolean('xss_1_clear')->default(false);
            $table->boolean('xss_2')->default(false);
            $table->boolean('xss_2_clear')->default(false);
            $table->boolean('xss_3')->default(false);
            $table->boolean('xss_3_clear')->default(false);
            $table->boolean('sql_1')->default(false);
            $table->boolean('sql_1_clear')->default(false);
            $table->boolean('sql_2')->default(false);
            $table->boolean('sql_2_clear')->default(false);
            $table->boolean('sql_3')->default(false);
            $table->boolean('sql_3_clear')->default(false);
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
        Schema::dropIfExists('judgements');
    }
}
