<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnFormaBoitierId extends Migration
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
            $table->integer("forma_boitier_id")->nullable()->unsigned()->after("type");
            $table->foreign("forma_boitier_id")->references("id")->on("forma_boitiers");
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
            $table->dropForeign(["forma_boitier_id"]);
            $table->dropColumn("forma_boitier_id");
        });
    }
}
