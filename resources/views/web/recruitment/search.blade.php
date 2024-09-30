@extends('layout.default')
@section('content')
<div class="content-wrapper">
    <div class="kc-elm kc-css-585439 kc_col-sm-8 kc_column kc_col-sm-8">
        <div class="kc-elm kc-css-563013 vnt_title">
            <h1 class="type">Kết quả tìm kiếm :{{ $keyword }}</h1>
        </div>
        <div class="kc-elm kc-css-674790 vnt_archive">
            @if($results->isEmpty())
                <p>Không tìm thấy kết quả phù hợp.</p>
            @else
                @foreach ($results as $post)
                    <div class="kc-elm item item_1 odd">
                        <a class="kc-elm thumb" href="{{ route('post.detail', $post->slug) }}"
                            title="{{ $post->title }}"><img src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                        </a>
                        <div class="col">
                            <div class="kc-elm title"><a href="{{ route('post.detail', $post->slug) }}"
                                    title="{{ $post->title }}">{{ $post->title }}</a></div>
                            <div class="kc-elm desc">{{ $post->description }}&hellip;</div>
                            <div class="more"><a href="{{ route('post.detail', $post->slug) }}"
                                    title="{{ $post->title }}">Xem chi tiết</a></div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
@push('css')
    <style type="text/css">
    .content-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;

    padding: 20px; /* Tạo khoảng trống xung quanh */
    box-sizing: border-box;
}
.kc-col-sm-8 {
    max-width: 800px; /* Điều chỉnh độ rộng tối đa */
    width: 100%;
}
        .kc-elm.vnt_pagenavi {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .kc-elm.vnt_pagenavi .page-numbers {
            padding: 8px 12px;
            border: 1px solid #ccc;
            text-decoration: none;
        }

        .kc-elm.vnt_pagenavi .page-numbers.current {
            background-color: #007bff;
            color: white;
        }

        .kc-elm.vnt_pagenavi .next,
        .kc-elm.vnt_pagenavi .prev {
            font-size: 1.2em;
        }

        @media only screen and (min-width: 1000px) and (max-width: 5000px) {
            body.kc-css-system .kc-css-675907 {
                width: 30%;
            }

            body.kc-css-system .kc-css-585439 {
                width: 70%;
            }
        }

        body.kc-css-system .kc-css-711401 {
            background: linear-gradient(#f9f9f9, #ffffff, #f9f9f9);
            padding-top: 25px;
            padding-bottom: 50px;
        }

        body.kc-css-system .kc-css-711401>.kc-container {
            display: block;
            padding-right: 0px;
            padding-left: 0px;
        }

        body.kc-css-system .kc-css-675907 {
            position: -webkit-sticky;
            position: sticky;
            top: 120px;
        }

        body.kc-css-system .kc-css-389257 .type {
            width: 100%;
            color: #0f5291;
            font-size: 22px;
            line-height: 36px;
            font-weight: 600;
        }

        body.kc-css-system .kc-css-389257 .sub {
            width: 30px;
            height: 3px;
            background: #1ab6c1;
        }

        body.kc-css-system .kc-css-389257 {
            display: flex;
            flex-flow: wrap;
        }

        body.kc-css-system .kc-css-611337 .thumb {
            width: 80px;
            margin-right: 15px;
        }

        body.kc-css-system .kc-css-611337 .title {
            font-size: 16px;
            line-height: 24px;
            font-weight: 600;
            flex: 1;
        }

        body.kc-css-system .kc-css-611337 .item {
            display: flex;
            border-bottom: 1px solid #dcdcdc;
            ;
            padding-bottom: 10px;
            margin-bottom: 10px;
            flex-flow: wrap;
            align-items: center;
        }

        body.kc-css-system .kc-css-611337 {
            margin-top: 25px;
        }

        body.kc-css-system .kc-css-563013 .type {
            color: #0f5291;
            font-size: 36px;
            line-height: 42px;
            font-weight: 600;
            text-align: center;
        }

        body.kc-css-system .kc-css-674790 .thumb {
            width: 300px;
        }

        body.kc-css-system .kc-css-674790 .title {
            font-size: 24px;
            line-height: 30px;
            font-weight: 600;
        }

        body.kc-css-system .kc-css-674790 .desc {
            margin-top: 10px;
        }

        body.kc-css-system .kc-css-674790 .more {
            width: 100%;
            display: flex;
            float: left;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            margin-top: 10px;
        }

        body.kc-css-system .kc-css-674790 .more a {
            background: #1ab6c1;
            border-radius: 5px 5px 5px 5px;
            color: #ffffff;
            line-height: 24px;
            padding-right: 10px;
            padding-left: 10px;
        }

        body.kc-css-system .kc-css-674790 .col {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            flex: 1;
        }

        body.kc-css-system .kc-css-674790 .item {
            display: flex;
            margin-top: 25px;
            box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.15);
            ;
            flex-flow: wrap;
            align-items: center;
        }

        body.kc-css-system .kc-css-674790 .item:hover {
            box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.55);
            ;
        }

        @media only screen and (max-width: 767px) {
            body.kc-css-system .kc-css-711401 {
                display: flex;
                flex-flow: wrap;
            }

            body.kc-css-system .kc-css-711401>.kc-container {
                display: flex;
                flex-flow: wrap;
            }

            body.kc-css-system .kc-css-675907 {
                margin-top: 30px;
                order: 99;
            }
        }

        @media only screen and (max-width: 479px) {
            body.kc-css-system .kc-css-674790 .thumb {
                width: 100%;
            }

            body.kc-css-system .kc-css-674790 .thumb img {
                width: 100%;
                display: block;
            }

            body.kc-css-system .kc-css-674790 .col {
                padding-top: 15px;
                padding-bottom: 15px;
            }
        }
    </style>
@endpush

