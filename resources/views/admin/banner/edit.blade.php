@extends('layout.admin')

@section('content')
<div class="banner-form-container">
    <h1 class="form-title">{{ isset($banner) ? 'Edit Banner' : 'Create Banner' }}</h1>

    <form class="banner-form" action="{{ isset($banner) ? route('banners.update', $banner) : route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($banner))
            @method('PUT')
        @endif

        <div class="form-field">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $banner->title ?? old('title') }}" required>
        </div>

        <div class="form-field">
            <label for="images">Banner Images</label>
            <input type="file" id="images" name="images[]" accept="image/*" multiple>
            <div id="image-preview" class="image-preview-container"></div>
            @if(isset($banner) && $banner->images)
                <div class="current-images">
                    <h4>Current Images:</h4>
                    @foreach(json_decode($banner->images) as $image)
                        <div class="current-image">
                            <img src="{{ asset('storage/' . $image) }}" alt="Banner Image" style="max-width: 200px; margin-top: 10px;">
                            <p>{{ basename($image) }}</p>
                            <label>
                                <input type="checkbox" name="remove_images[]" value="{{ $image }}"> Remove
                            </label>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="form-field">
            <label for="link">Link</label>
            <input type="url" id="link" name="link" value="{{ $banner->link ?? old('link') }}">
        </div>

        <div class="form-field checkbox">
            <input type="checkbox" id="is_active" name="is_active" value="1" {{ (isset($banner) && $banner->is_active) || old('is_active', true) ? 'checked' : '' }}>
            <label for="is_active">Is Active</label>
        </div>

        <div class="form-field">
            <label for="order">Order</label>
            <input type="number" id="order" name="order" value="{{ $banner->order ?? old('order', 0) }}">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">{{ isset($banner) ? 'Update' : 'Create' }}</button>
        </div>
    </form>
</div>

<style>
    .banner-form-container {
        max-width: 100%;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .form-title {
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }
    .banner-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .form-field {
        display: flex;
        flex-direction: column;
    }
    .form-field label {
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }
    .form-field input[type="text"],
    .form-field input[type="url"],
    .form-field input[type="number"] {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }
    .form-field.checkbox {
        flex-direction: row;
        align-items: center;
        gap: 10px;
    }
    .form-field.checkbox input {
        margin: 0;
    }
    .form-actions {
        margin-top: 20px;
    }
    .btn {
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    .btn-primary {
        background-color: #007bff;
        color: white;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .image-preview-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 10px;
    }

    .image-preview {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .current-images {
        margin-top: 20px;
    }

    .current-image {
        display: inline-block;
        margin-right: 20px;
        margin-bottom: 20px;
        text-align: center;
    }
</style>
<script>
    document.getElementById('images').addEventListener('change', function(event) {
        var preview = document.getElementById('image-preview');
        preview.innerHTML = '';

        for (var i = 0; i < event.target.files.length; i++) {
            var file = event.target.files[i];
            var reader = new FileReader();

            reader.onload = (function(file) {
                return function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('image-preview');
                    preview.appendChild(img);
                };
            })(file);

            reader.readAsDataURL(file);
        }
    });
    </script>
@endsection
