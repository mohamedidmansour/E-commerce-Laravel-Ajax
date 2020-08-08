<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCompteCmdId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cmds', function (Blueprint $table) {
            //
            $table->integer("compte_id")->nullable()->unsigned()->after("user_id");
            $table->foreign("compte_id")->references("id")->on("comptes");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cmds', function (Blueprint $table) {
            //
            $table->dropForeign(["compte_id"]);
            $table->dropColumn("compte_id");
        });
    }
}
