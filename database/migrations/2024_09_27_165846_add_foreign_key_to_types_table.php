<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTypesTable extends Migration
{
    public function up()
    {
        Schema::table('types', function (Blueprint $table) {
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('types', function (Blueprint $table) {
            $table->dropForeign(['position_id']);
        });
    }
}
