<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteConfigsTable extends Migration
{
    public function up()
    {
        Schema::create('site_configs', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('company_name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('hotline')->nullable();
            $table->string('email')->nullable();
            $table->string('zalo_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('working_hours')->nullable();
            $table->text('google_map_iframe')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('site_configs');
    }
}
