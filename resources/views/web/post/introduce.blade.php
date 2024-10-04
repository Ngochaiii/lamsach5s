@extends('layout.default')
@section('content')
<section id="main_page" class="kc-elm kc-css-858879 kc_row vnt_section hide_col">

    <div class="kc-row-container kc-container vnt_col">
        <div class="kc-elm kc-css-198853 vnt_title" style="text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <h1 class="type">Giới thiệu</h1>
            <span class="sub"></span>
        </div>
        <div class="kc-elm kc-css-218837 kc_col kc_column kc_col">
            {!!$introduce->content!!}
        </div>
    </div>
</section>
@endsection
