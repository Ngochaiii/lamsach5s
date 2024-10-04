@extends('layout.admin')

@section('content')
<div class="banner-list-container">
    <h1>Banners</h1>
    <a href="{{ route('banners.create') }}" class="btn btn-primary">Create New Banner</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Images</th>
                <th>Active</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td>{{ $banner->title }}</td>
                    <td>
                        <div class="banner-images">
                            @foreach(json_decode($banner->images) as $image)
                                <img src="{{ asset('storage/' . $image) }}" alt="{{ $banner->title }}" class="banner-thumb">
                            @endforeach
                        </div>
                    </td>
                    <td>{{ $banner->is_active ? 'Yes' : 'No' }}</td>
                    <td>{{ $banner->order }}</td>
                    <td>
                        <a href="{{ route('banners.edit', $banner) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('banners.destroy', $banner) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this banner?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .allContent {
        flex-basis: 0px !important;
    }
    .banner-list-container {
        padding: 20px;
    }
    .banner-images {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .banner-thumb {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
    }
    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-warning {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }
    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }
    .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
    }
    .mt-3 {
        margin-top: 1rem;
    }
    .d-inline {
        display: inline-block;
    }
</style>
@endsection
