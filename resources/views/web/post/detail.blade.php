@extends('layout.default')
@section('content')
<section id="main_single" class="kc-elm kc-css-987969 kc_row vnt_section hide_col">

    <div class="kc-row-container kc-container vnt_col">

        <div class="kc-elm kc-css-218837 kc_col-sm-8 kc_column kc_col-sm-8">

            {!!$datas->content!!}

        </div>


        <div class="kc-elm kc-css-311156 kc_col-sm-4 kc_column kc_col-sm-4">

            <div class="kc-elm kc-css-815022 vnt_title">

                <h3 class="type">Bài viết liên quan</h3>
                <span class="sub"></span>

            </div>
            <div class="kc-elm kc-css-29224 vnt_archive">
                @foreach ($servicesPosts as $item)
                <div class="kc-elm item item_1 odd">
                    <a class="kc-elm thumb"
                        href="{{route('post.detail',$item->slug)}}"
                        title="{{$item->title}}"><img
                            src="{{ asset($item->image) }}"
                            alt="{{$item->title}}"></a>
                    <div class="kc-elm title"><a
                            href="{{route('post.detail',$item->slug)}}"
                            title="{{$item->title}}">{{$item->title}}</a></div>
                </div>
                @endforeach

            </div>


        </div>



    </div>

</section>
@endsection
