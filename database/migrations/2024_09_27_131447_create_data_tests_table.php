<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_tests', function (Blueprint $table) {
            $table->id();
            $table->string('favorite_app_flag')->nullable();
            $table->string('ecom_category')->nullable();
            $table->string('search_type')->nullable();
            $table->string('platform')->nullable();
            $table->string('category')->nullable();
            $table->string('tag_ids')->nullable();
            $table->string('ad_positions')->nullable();
            $table->string('ads_ai_category')->nullable();
            $table->string('video_duration_type')->nullable();
            $table->string('os')->nullable();
            $table->string('ads_promote_type')->nullable();
            $table->string('geo')->nullable();
            $table->string('exclude_geo')->nullable();
            $table->string('audience_sex')->nullable();
            $table->string('audience_age')->nullable();
            $table->string('game_play')->nullable();
            $table->string('game_style')->nullable();
            $table->string('type')->nullable();
            $table->string('page')->nullable();
            $table->string('industry')->nullable();
            $table->string('language')->nullable();
            $table->string('keyword')->nullable();
            $table->string('sort_field')->nullable();
            $table->string('region')->nullable();
            $table->string('seen_begin')->nullable();
            $table->string('seen_end')->nullable();
            $table->string('original_flag')->nullable();
            $table->string('is_preorder')->nullable();
            $table->string('resume_or_new_ads')->nullable();
            $table->string('is_real_person')->nullable();
            $table->string('theme')->nullable();
            $table->string('text_md5')->nullable();
            $table->string('ads_size')->nullable();
            $table->string('size')->nullable();
            $table->string('ads_format')->nullable();
            $table->string('exclude_keyword')->nullable();
            $table->string('cod_flag')->nullable();
            $table->string('is_theater')->nullable();
            $table->string('is_ai_app')->nullable();
            $table->string('landing_page')->nullable();
            $table->string('cta_type')->nullable();
            $table->string('new_ads_flag')->nullable();
            $table->string('like_begin')->nullable();
            $table->string('like_end')->nullable();
            $table->string('comment_begin')->nullable();
            $table->string('comment_end')->nullable();
            $table->string('share_begin')->nullable();
            $table->string('share_end')->nullable();
            $table->string('position')->nullable();
            $table->string('is_hide_advertiser')->nullable();
            $table->string('advertiser_key')->nullable();
            $table->string('dynamic')->nullable();
            $table->string('shopping')->nullable();
            $table->string('duplicate')->nullable();
            $table->string('software_types')->nullable();
            $table->string('ecom_types')->nullable();
            $table->string('social_account')->nullable();
            $table->string('modules')->nullable();
            $table->string('page_id')->nullable();
            $table->string('landing_type')->nullable();
            $table->string('is_first')->nullable();
            $table->string('page_load_more')->nullable();
            $table->string('source_app')->nullable();
            $table->string('redirect_filter_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tests');
    }
};
