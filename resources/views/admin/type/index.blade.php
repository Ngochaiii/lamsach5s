@extends('layout.index')
@section('content')
    <div class="container py-5 mb-5">
        <!-- For demo purpose -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-6">Nhập danh mục bài viết </h1>
            </div>
        </div> <!-- End -->
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <!-- Credit card form content -->
                        <div class="tab-content">
                            <!-- credit card info-->
                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                <form action="{{ route('admin.type.add') }}" method="POST">
                                    @csrf
                                    <div class="form-group"> <label for="username">
                                            <h6>Danh mục bài viết mới</h6>
                                        </label> <input type="text" name="name" placeholder="Tên danh mục" required
                                            class="form-control ">
                                    </div>

                                    <div class="card-footer"> <button type="submit"
                                            class="subscribe btn btn-primary btn-block shadow-sm"> Tọa mới </button>
                                </form>
                            </div>
                        </div> <!-- End -->
                    </div>
                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    @endsection
    @push('css')
        <style>
            body {
                background: #f5f5f5
            }

            .rounded {
                border-radius: 1rem
            }

            .nav-pills .nav-link {
                color: #555
            }

            .nav-pills .nav-link.active {
                color: white}input[type="radio"] {
                    margin-right: 5px
                }

                .bold {
                    font-weight: bold
                }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    @endpush
    @push('js')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @endpush
