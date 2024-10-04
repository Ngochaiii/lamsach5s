@extends('layout.admin')

@section('content')
    <div class="main-content">
        <div class="blog-services-management">
            <h1>Quản Lý Dịch Vụ Blog</h1>
            <div class="action-buttons">
                <a href="{{ route('blog-services.create') }}" class="btn btn-add">Thêm Dịch Vụ Mới</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Hình ảnh</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->title }}</td>
                                <td><img src="{{ asset('storage/' . $service->image) }}" width="100"
                                        alt="{{ $service->title }}"></td>
                                <td>
                                    <a href="{{ route('blog-services.edit', $service->id) }}"
                                        class="btn btn-sm btn-info">Sửa</a>
                                    <form action="{{ route('blog-services.destroy', $service->id) }}" method="POST"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        <styl>.content-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding: 20px;
        }

        .dashboard-header {
            margin-bottom: 30px;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .blog-services-management {
            width: 100%;
            max-width: 1200px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .blog-services-management h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .action-buttons {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table th {
            background-color: #f8f9fa;
        }

        .btn-add {
            background-color: #007bff;
            color: white;
        }

        .btn-add:hover {
            background-color: #0056b3;
        }

        .allContent {
            flex-basis: 0px !important;
        }
    </style>
@endsection
