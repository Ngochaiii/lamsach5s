@extends('layout.admin')
@section('content')
    <div class="container bg-white mb-5">
        <header class="header" style="display: flex; justify-content: center; align-items: center;">
            <h1 id="title" class="text-center">Tạo Bài Viết</h1>
        </header>
        <div class="form-wrap">
            <form method="POST" action="{{ route('admin.post.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Tiêu Đề</label>
                            <input type="text" name="name" id="name" placeholder="Nhập tiêu đề của bài viết"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả ngắn</label>
                            <input type="text" name="description" id="description" placeholder="Nhập mô tả của bài viết"
                                class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Loại bài viết</label>
                            <select id="post_type" name="post_type" class="form-control" required>
                                <option value="" disabled selected>Chọn loại bài viết</option>
                                <option value="service">Dịch vụ</option>
                                <option value="blog">Blog làm sạch</option>
                                <option value="recruitment">Tuyển dụng</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="category_section" style="display: none;">
                    <div class="col">
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select id="category" name="category" class="form-control">
                                <option value="" disabled selected>Chọn danh mục</option>
                                @foreach ($types as $type)
                                    @if ($type->position_id == 2)
                                        <!-- Assuming 2 is for "Blog làm sạch" -->
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Các phần còn lại của form giữ nguyên -->

                <div class="row justify-content-center">
                    <label class="picture" for="picture__input" tabIndex="0">
                        <span class="picture__image"></span>
                    </label>
                    <input type="file" name="picture_inputs" id="picture__input">
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="editor" class="form-control" name="content" placeholder="Nhập nội dung bài viết ở đây..."
                                style="min-height: 100vh; resize: vertical;"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-5">
                    <div class="col-md-4">
                        <button type="submit" id="submit" class="btn btn-primary btn-block">Đăng bài</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

    <!-- CKEditor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap');


        .container {
            max-width: 1230px;
            width: 100%;
        }

        h1 {
            font-weight: 700;
            font-size: 45px;
            font-family: 'Roboto', sans-serif;
        }

        .header {
            margin-bottom: 80px;
        }

        #description {
            font-size: 24px;
        }

        .form-wrap {
            background: rgba(255, 255, 255, 1);
            width: 100%;
            max-width: 850px;
            padding: 50px;
            margin: 0 auto;
            position: relative;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
        }

        .form-wrap:before {
            content: "";
            width: 90%;
            height: calc(100% + 60px);
            left: 0;
            right: 0;
            margin: 0 auto;
            position: absolute;
            top: -30px;
            background: #00bcd9;
            z-index: -1;
            opacity: 0.8;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group>label {
            display: block;
            font-size: 18px;
            color: #000;
        }

        .custom-control-label {
            color: #000;
            font-size: 16px;
        }

        .form-control {
            height: 50px;
            background: #ecf0f4;
            border-color: transparent;
            padding: 0 15px;
            font-size: 16px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #00bcd9;
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        }

        textarea.form-control {
            height: 160px;
            padding-top: 15px;
            resize: none;
        }

        .btn {
            padding: .657rem .75rem;
            font-size: 18px;
            letter-spacing: 0.050em;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary {
            color: #fff;
            background-color: #00bcd9;
            border-color: #00bcd9;
        }

        .btn-primary:hover {
            color: #00bcd9;
            background-color: #ffffff;
            border-color: #00bcd9;
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        }

        .btn-primary:focus,
        .btn-primary.focus {
            color: #00bcd9;
            background-color: #ffffff;
            border-color: #00bcd9;
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        }

        .btn-primary:not(:disabled):not(.disabled):active,
        .btn-primary:not(:disabled):not(.disabled).active,
        .show>.btn-primary.dropdown-toggle {
            color: #00bcd9;
            background-color: #ffffff;
            border-color: #00bcd9;
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
        }
    </style>
    <style>
        #picture__input {
            display: none;
        }

        .picture {
            width: 400px;
            aspect-ratio: 16/9;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            border: 2px dashed currentcolor;
            cursor: pointer;
            font-family: sans-serif;
            transition: color 300ms ease-in-out, background 300ms ease-in-out;
            outline: none;
            overflow: hidden;
        }

        .picture:hover {
            color: #777;
            background: #ccc;
        }

        .picture:active {
            border-color: turquoise;
            color: turquoise;
            background: #eee;
        }

        .picture:focus {
            color: #777;
            background: #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .picture__img {
            max-width: 100%;
        }
    </style>
    <script>
        const inputFile = document.querySelector("#picture__input");
        const pictureImage = document.querySelector(".picture__image");
        const pictureImageTxt = "Choose an image";
        pictureImage.innerHTML = pictureImageTxt;

        inputFile.addEventListener("change", function(e) {
            const inputTarget = e.target;
            const file = inputTarget.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener("load", function(e) {
                    const readerTarget = e.target;

                    const img = document.createElement("img");
                    img.src = readerTarget.result;
                    img.classList.add("picture__img");

                    pictureImage.innerHTML = "";
                    pictureImage.appendChild(img);
                });

                reader.readAsDataURL(file);
            } else {
                pictureImage.innerHTML = pictureImageTxt;
            }
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#comments'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const postTypeSelect = document.getElementById('post_type');
            const categorySection = document.getElementById('category_section');
            const categorySelect = document.getElementById('category');

            postTypeSelect.addEventListener('change', function() {
                if (this.value === 'blog') {
                    categorySection.style.display = 'block';
                    categorySelect.required = true;
                } else {
                    categorySection.style.display = 'none';
                    categorySelect.required = false;
                }
            });
        });
    </script>
@endsection
