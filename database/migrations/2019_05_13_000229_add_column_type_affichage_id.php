<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTypeAffichageId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produits', function (Blueprint $table) {
            //
            $table->integer("type_affichage_id")->nullable()->unsigned()->after("type");
            $table->foreign("type_affichage_id")->references("id")->on("type_affichages");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produits', function (Blueprint $table) {
            //
            $table->dropForeign(["type_affichage_id"]);
            $table->dropColumn("type_affichage_id");
        });
    }
}
