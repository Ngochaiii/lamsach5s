@php
$banners = App\Models\Banner::where('is_active', true)->orderBy('order')->get();
@endphp

<div class="kc-elm kc-css-260819 kc_col-sm-12 vnt_slick"
     data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "centerMode": false, "variableWidth": false, "dots": true, "arrows": true, "autoplay": false, "infinite": true, "adaptiveHeight": false, "fade": true, "rows": 0, "responsive":[{"breakpoint": 1024, "settings":{"slidesToShow": 1, "slidesToScroll": 1}}, {"breakpoint": 767, "settings":{"slidesToShow": 1, "slidesToScroll": 1, "adaptiveHeight": false, "fade": false}}, {"breakpoint": 480, "settings":{"slidesToShow": 1, "slidesToScroll": 1, "adaptiveHeight": true}}]}'>

    @if($banners->isNotEmpty())
        @foreach($banners as $banner)
            @php
                $images = json_decode($banner->images);
            @endphp
            @foreach($images as $image)
                <div class="kc-elm kc-css-18349 slick_item">
                    <div class="item">
                        <div class="kc-elm kc-css-820106 vnt_image">
                            <div class="thumb">
                                <img decoding="async" src="{{ asset('storage/' . $image) }}" alt="{{ $banner->title }}">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    @else
        <div class="kc-elm kc-css-18349 slick_item">
            <div class="item">
                <div class="kc-elm kc-css-820106 vnt_image">
                    <div class="thumb">
                        <img decoding="async"
                            src="{{asset('web/wp-content/uploads/z3411582792663_533481ae5165115a2c63d9bf8aaaf83b-scaled.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="kc-elm kc-css-62523 slick_item">
            <div class="item">
                <div class="kc-elm kc-css-465932 vnt_image">
                    <div class="thumb">
                        <img decoding="async"
                            src="{{asset('web/wp-content/uploads/z3411582780085_de953c6a5bd1edb48a9f24acab5e6183-scaled.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<script>
$(document).ready(function(){
    $('.vnt_slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        variableWidth: false,
        dots: true,
        arrows: true,
        autoplay: false,
        infinite: true,
        adaptiveHeight: false,
        fade: true,
        rows: 0,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: false,
                    fade: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true
                }
            }
        ]
    });
});
</script>
