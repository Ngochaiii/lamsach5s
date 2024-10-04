@extends('layout.admin')
@section('content')
<div class="blog-service-form-container">
    <h1>{{ isset($blogService) ? 'Chỉnh sửa' : 'Thêm mới' }} Dịch vụ Blog</h1>

    <form action="{{ isset($blogService) ? route('blog-services.update', $blogService->id) : route('blog-services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($blogService))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $blogService->title ?? old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description">{{ $blogService->description ?? old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image" {{ isset($blogService) ? '' : 'required' }}>
                <label class="custom-file-label" for="image">Chọn file</label>
            </div>
            @if(isset($blogService) && $blogService->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $blogService->image) }}" alt="Current Image" style="max-width: 200px; height: auto;">
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="link">Liên kết</label>
            <input type="url" class="form-control" id="link" name="link" value="{{ $blogService->link ?? old('link') }}">
        </div>

        <div class="text-center">
            <button type="submit" class="btn-submit">
                {{ isset($blogService) ? 'Cập nhật' : 'Thêm mới' }}
            </button>
        </div>
    </form>
</div>
<style>
    .blog-service-form-container {
        max-width: 100%;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    .blog-service-form-container h1 {
        color: #333;
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 30px;
        text-align: center;
    }
    .form-group {
        margin-bottom: 25px;
    }
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #555;
    }
    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
        outline: none;
    }
    textarea.form-control {
        min-height: 120px;
    }
    .custom-file-input {
        cursor: pointer;
    }
    .custom-file-label {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .btn-submit {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: 500;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>
<script>
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
@endsection

