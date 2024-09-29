@extends('layout.default')
@section('content')
    <div class="kc-elm kc-css-585439 kc_col-sm-8 kc_column kc_col-sm-8">

        <div class="kc-elm kc-css-563013 vnt_title">

            <h1>{{ $currentCategory->name }}</h1>


        </div>
        <div class="kc-elm kc-css-674790 vnt_archive">
            @foreach($posts as $post)
            <div class="kc-elm item item_1 odd">
                <a class="kc-elm thumb" href="../../nhung-luu-y-khi-di-chuyen-trong-mua-mua-bao/index.html"
                    title="NHỮNG LƯU Ý KHI DI CHUYỂN TRONG MÙA MƯA BÃO"><img
                        src="../../wp-content/uploads/bai-khuong-ha-truong-chinh-hn-8739-7537-1633928954-380x260xc.jpg"
                        alt="NHỮNG LƯU Ý KHI DI CHUYỂN TRONG MÙA MƯA BÃO"></a>
                <div class="col">
                    <div class="kc-elm title"><a href="../../nhung-luu-y-khi-di-chuyen-trong-mua-mua-bao/index.html"
                            title="NHỮNG LƯU Ý KHI DI CHUYỂN TRONG MÙA MƯA BÃO">NHỮNG LƯU Ý KHI DI CHUYỂN TRONG
                            MÙA MƯA BÃO</a></div>
                    <div class="kc-elm desc">Mùa mưa là thời điểm người tham gia giao thông phải đối diện với
                        nhiều nguy cơ mất an toàn&hellip;</div>
                    <div class="more"><a href="../../nhung-luu-y-khi-di-chuyen-trong-mua-mua-bao/index.html"
                            title="NHỮNG LƯU Ý KHI DI CHUYỂN TRONG MÙA MƯA BÃO">Xem chi tiết</a></div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="kc-elm vnt_pagenavi"><span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="page/2/index.html">2</a>
            <a class="next page-numbers" href="page/2/index.html"><i class="fa-chevron-right"></i></a>
        </div>
    </div>
@endsection
