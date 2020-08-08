<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnRemisRimaId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produit_remis', function (Blueprint $table) {
            //
             $table->integer("remi_id")->nullable()->unsigned()->after("id");
            $table->foreign("remi_id")->references("id")->on("remis");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produit_remis', function (Blueprint $table) {
            //
            $table->dropForeign(["remi_id"]);
            $table->dropColumn("remi_id");
        });
    }
}
