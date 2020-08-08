<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProduitRimaId extends Migration
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
             $table->integer("produit_id")->nullable()->unsigned()->after("id");
            $table->foreign("produit_id")->references("id")->on("produits");
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
            $table->dropForeign(["produit_id"]);
            $table->dropColumn("produit_id");
        });
    }
}
