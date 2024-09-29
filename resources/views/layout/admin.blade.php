<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('css')
    @include('layout.admin.header_css')
 <!-- Bootstrap CSS -->
 <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
 {{-- kết thúc  --}}
</head>
<body>
    <div class="container">
        @include('layout.admin.header')
        <div class="allContent">
            @include('layout.admin.nav')
        </div>
        @yield('content')
    </div>
    @include('layout.admin.footer_js')
    @stack('js')
</body>
</html>
