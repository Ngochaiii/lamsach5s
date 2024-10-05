@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class="page-title">Danh Sách Bài Đăng</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="post-categories">
        @php
            $postTypes = ['service' => 'Dịch vụ', 'blog' => 'Blog', 'recruitment' => 'Tuyển dụng', 'introduce' => 'Giới thiệu', 'commitment' => 'Cam kết'];
        @endphp

        @foreach($postTypes as $type => $label)
            <div class="post-category">
                <h2 class="category-title">{{ $label }}</h2>
                <div class="post-list">
                    @forelse($posts->where('type', $type) as $post)
                        <div class="post-item">
                            <div class="post-info">
                                <span class="post-id">#{{ $post->id }}</span>
                                <span class="post-title">{{ $post->title }}</span>
                            </div>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" onclick="return confirm('Bạn có chắc chắn muốn xóa bài đăng này?')">Xóa</button>
                            </form>
                        </div>
                    @empty
                        <p class="no-posts">Không có bài đăng nào.</p>
                    @endforelse
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .container {
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
    }
    .page-title {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
        font-size: 2.5em;
    }
    .post-categories {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .post-category {
        flex: 1 1 calc(50% - 10px);
        min-width: 300px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    .category-title {
        background-color: #4a90e2;
        color: white;
        padding: 15px;
        margin: 0;
        font-size: 1.2em;
    }
    .post-list {
        padding: 15px;
    }
    .post-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #eee;
    }
    .post-item:last-child {
        border-bottom: none;
    }
    .post-info {
        display: flex;
        align-items: center;
    }
    .post-id {
        background-color: #f0f0f0;
        color: #666;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 0.9em;
        margin-right: 10px;
    }
    .post-title {
        color: #333;
        font-weight: 500;
    }
    .btn-delete {
        background-color: #e74c3c;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .btn-delete:hover {
        background-color: #c0392b;
    }
    .no-posts {
        color: #666;
        font-style: italic;
    }
    .alert-success {
        background-color: #2ecc71;
        color: white;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 4px;
        text-align: center;
    }
</style>
@endsection
