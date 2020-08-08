<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCategorieId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sous_cats', function (Blueprint $table) {
            //
            $table->integer("categorie_id")->unsigned()->after("libelle");
            $table->foreign("categorie_id")->references("id")->on("categories");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sous_cats', function (Blueprint $table) {
            //
            $table->dropForeign(["categorie_id"]);
            $table->dropColumn("categorie_id");
        });
    }
}
