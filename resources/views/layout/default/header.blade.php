<section id="header_bar" class="kc-elm kc-css-144438 kc_row vnt_section hide_col">

    <div class="kc-row-container kc-container vnt_col">

        <div class="kc-elm kc-css-986320 vnt_list">

            <div class="item item_1 current">
                <div class="title">Giới thiệu</div><a href="{{route('introduce')}}" title="Giới thiệu"
                    class="link">Giới thiệu</a>
            </div>

            <div class="item item_2 current">
                <div class="title">Cam kết dịch vụ 5S</div><a href="{{route('commitment')}}"
                    title="Cam kết dịch vụ 5S" class="link">Cam kết dịch vụ 5S</a>
            </div>
        </div>

        <div class="kc-elm kc-css-301706 vnt_search">

            <form role="search" method="get" class="woocommerce-product-search search_form" action="{{ route('search') }}">
                <input type="search" id="woocommerce-product-search-field-0" class="search-field search_field"
                       placeholder="Tìm kiếm" value="" name="s" maxlength="100"/>
                <button type="submit" class="search_submit"><i class="fa-search"></i></button>
            </form>
        </div>
    </div>

</section>
