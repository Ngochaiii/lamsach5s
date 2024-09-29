@extends('layout.default')
@section('content')
    <section id="main_single" class="kc-elm kc-css-987969 kc_row vnt_section hide_col">

        <div class="kc-row-container kc-container vnt_col">

            <div class="kc-elm kc-css-218837 kc_col-sm-8 kc_column kc_col-sm-8">
                {!! $datas->content !!}
            </div>
            <div class="kc-elm kc-css-311156 kc_col-sm-4 kc_column kc_col-sm-4">
                <div class="kc-elm kc-css-815022 vnt_title">
                    <h3 class="type">Bài viết liên quan</h3>
                    <span class="sub"></span>
                </div>
                <div class="kc-elm kc-css-29224 vnt_archive">
                    @foreach ($relatedPosts as $item)
                        <div class="kc-elm item item_{{ $loop->iteration }} {{ $loop->odd ? 'odd' : 'even' }}">
                            <a class="kc-elm thumb" href="{{ route('post.detail', $item->slug) }}"
                                title="{{ $item->title }}">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                            </a>
                            <div class="kc-elm title">
                                <a href="{{ route('post.detail', $item->slug) }}"
                                    title="{{ $item->title }}">{{ $item->title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @if ($datas->type == 'service')
        <section id="form_tuvan" class="kc-elm kc-css-275150 kc_row vnt_section hide_col_cont">
            <div class="kc-row-container kc-container">
                <div class="kc-wrap-columns ">
                    <div class="kc-elm kc-css-176111 vnt_title">
                        <h3 class="type">Liên hệ tư vấn</h3>
                    </div>
                    <div class="kc-elm kc-css-400454 vnt_editor">
                        <div class="wpcf7 no-js" id="wpcf7-f2271-p64-o1" lang="vi" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="{{ route('contact.store') }}" method="POST" class="wpcf7-form init cf7_tuvan"
                                aria-label="Form liên hệ" novalidate="novalidate" data-status="init">
                                @csrf
                                <input type="hidden" name="form_type" value="tu_van">
                                <span class="wpcf7-form-control-wrap" data-name="ho-ten"><input size="40"
                                        maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false" placeholder="Họ tên quý khách*"
                                        value="" type="text" name="ho-ten" /></span>
                                <span class="wpcf7-form-control-wrap" data-name="dien-thoai"><input
                                        class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number"
                                        min="0240000000" max="0999999999" aria-required="true" aria-invalid="false"
                                        placeholder="Số điện thoại*" value="" type="number"
                                        name="dien-thoai" /></span>
                                <span class="wpcf7-form-control-wrap" data-name="noi-dung">
                                    <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                        placeholder="Chi tiết nội dung" name="noi-dung"></textarea>
                                </span>
                                <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit"
                                    value="Gửi yêu cầu tư vấn" />
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
