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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');       // Cột tiêu đề bài viết
            $table->string('slug')->unique();  // Cột slug duy nhất
            $table->string('image');       // Cột lưu đường dẫn hình ảnh
            $table->string('description'); // Mô tả ngắn dành cho Seo
            $table->string('type');        // Cột loại bài viết (để nhận biết kiểu)
            $table->longText('content');       // Cột nội dung bài viết
            $table->timestamps();          // Cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
