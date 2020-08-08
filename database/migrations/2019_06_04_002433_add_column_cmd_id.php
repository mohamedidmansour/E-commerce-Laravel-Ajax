<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCmdId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lign_cmds', function (Blueprint $table) {
            //
            $table->integer("cmd_id")->nullable()->unsigned()->after("id");
            $table->foreign("cmd_id")->references("id")->on("cmds");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lign_cmds', function (Blueprint $table) {
            //
            $table->dropForeign(["cmd_id"]);
            $table->dropColumn("cmd_id");
        });
    }
}
