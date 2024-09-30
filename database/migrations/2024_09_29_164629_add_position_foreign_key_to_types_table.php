<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('types', function (Blueprint $table) {
            // Thêm khóa ngoại cho cột 'position_id'
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('types', function (Blueprint $table) {
            // Xóa khóa ngoại nếu rollback
            $table->dropForeign(['position_id']);
        });
    }
};

