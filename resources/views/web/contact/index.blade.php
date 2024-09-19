@extends('layout.default')
@section('content')
    <section id="main_page" class="kc-elm kc-css-837295 kc_row vnt_section hide_col">

        <div class="kc-row-container kc-container vnt_col">


            <div class="kc-elm kc-css-750790 vnt_title">

                <h1 class="type">Liên hệ</h1>
                <span class="sub"></span>

            </div>

            <div class="kc-elm kc-css-217548 vnt_editor map_code">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.952857531147!2d105.81353838690606!3d21.034572208619515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab12d0e7b633%3A0xe5e58a6de38fed18!2zMiBOZ8O1IDE5IC0gTGnhu4V1IEdpYWksIExp4buFdSBHaWFpLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1633955485260!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>


            <div class="kc-elm kc-css-531776 vnt_editor">


                <div class="wpcf7 no-js" id="wpcf7-f220-p60-o1" lang="vi" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form action="https://lamsach5s.vn/lien-he/#wpcf7-f220-p60-o1" method="post" class="wpcf7-form init"
                        aria-label="Form liên hệ" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="220" />
                            <input type="hidden" name="_wpcf7_version" value="5.9.8" />
                            <input type="hidden" name="_wpcf7_locale" value="vi" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f220-p60-o1" />
                            <input type="hidden" name="_wpcf7_container_post" value="60" />
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                        </div>
                        <div class="kc-elm cf7_lienhe">
                            <label><span class="label">Họ tên*</span><span class="wpcf7-form-control-wrap"
                                    data-name="ho-ten"><input size="40" maxlength="400"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required cf7f_field"
                                        aria-required="true" aria-invalid="false" placeholder="Họ tên của bạn"
                                        value="" type="text" name="ho-ten" /></span></label>
                            <label><span class="label">Số điện thoại</span><span class="wpcf7-form-control-wrap"
                                    data-name="dien-thoai"><input
                                        class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number cf7f_field"
                                        min="0210000000" max="0999999999" aria-required="true" aria-invalid="false"
                                        placeholder="Số điện thoại" value="" type="number"
                                        name="dien-thoai" /></span></label>
                            <label><span class="label">Email*</span><span class="wpcf7-form-control-wrap"
                                    data-name="dia-chi-email"><input size="40" maxlength="400"
                                        class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email cf7f_field"
                                        aria-invalid="false" placeholder="Email của bạn" value="" type="email"
                                        name="dia-chi-email" /></span></label>
                            <label><span class="label">Nội dung liên hệ</span><span class="wpcf7-form-control-wrap"
                                    data-name="noi-dung">
                                    <textarea cols="40" rows="10" maxlength="2000"
                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required cf7f_field" aria-required="true"
                                        aria-invalid="false" placeholder="Chi tiết nội dung liên hệ" name="noi-dung"></textarea>
                                </span></label>
                            <div class="cf7_submit"><input class="wpcf7-form-control wpcf7-submit has-spinner"
                                    type="submit" value="Gửi liên hệ" /></div>
                        </div>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>

            </div>




        </div>

    </section>
@endsection
@push('css')
<style type="text/css" id="kc-css-render">
    body.kc-css-system .kc-css-837295 {
        background: linear-gradient(#f9f9f9, #ffffff, #f9f9f9);
        padding-top: 30px;
        padding-bottom: 30px;
    }

    body.kc-css-system .kc-css-837295>.kc-container {
        display: flex;
        flex-flow: wrap;
        justify-content: center;
    }

    body.kc-css-system .kc-css-750790 .type {
        width: 100%;
        color: #0f5291;
        font-size: 36px;
        line-height: 42px;
        font-weight: 600;
        text-align: center;
    }

    body.kc-css-system .kc-css-750790 .sub {
        width: 80px;
        height: 3px;
        background: #1ab6c1;
        margin-top: 10px;
    }

    body.kc-css-system .kc-css-750790 {
        display: flex;
        flex-flow: wrap;
        justify-content: center;
    }

    body.kc-css-system .kc-css-217548 {
        height: 300px;
        margin-top: 20px;
    }

    body.kc-css-system .kc-css-531776 {
        max-width: 600px;
        margin-top: 20px;
    }

    @media only screen and (max-width:767px) {
        body.kc-css-system .kc-css-750790 .type {
            font-size: 24px;
            line-height: 30px;
        }
    }
</style>
@endpush
