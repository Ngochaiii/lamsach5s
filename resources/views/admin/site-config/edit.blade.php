@extends('layout.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Cấu hình Website</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.site-config.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo:</label>
                            <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                            @if($config->logo)
                                <img src="{{ asset($config->logo) }}" alt="Current Logo" class="mt-2" style="max-width: 200px;">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="company_name" class="form-label">Tên công ty:</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $config->company_name }}">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ:</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $config->address }}">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại:</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $config->phone }}">
                        </div>

                        <div class="mb-3">
                            <label for="hotline" class="form-label">Hotline:</label>
                            <input type="text" class="form-control" id="hotline" name="hotline" value="{{ $config->hotline }}">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $config->email }}">
                        </div>

                        <div class="mb-3">
                            <label for="zalo_link" class="form-label">Link Zalo:</label>
                            <input type="text" class="form-control" id="zalo_link" name="zalo_link" value="{{ $config->zalo_link }}">
                        </div>

                        <div class="mb-3">
                            <label for="facebook_link" class="form-label">Link Facebook:</label>
                            <input type="text" class="form-control" id="facebook_link" name="facebook_link" value="{{ $config->facebook_link }}">
                        </div>

                        <div class="mb-3">
                            <label for="working_hours" class="form-label">Giờ làm việc:</label>
                            <input type="text" class="form-control" id="working_hours" name="working_hours" value="{{ $config->working_hours }}">
                        </div>

                        <div class="mb-3">
                            <label for="google_map_iframe" class="form-label">Google Map iframe:</label>
                            <textarea class="form-control" id="google_map_iframe" name="google_map_iframe" rows="3">{{ $config->google_map_iframe }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        margin-top: 20px;
    }
    .card-header {
        font-size: 1.25rem;
    }
    .form-label {
        font-weight: bold;
    }
</style>
@endpush
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
