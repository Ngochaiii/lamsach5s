<section id="main_header" class="kc-elm kc-css-997367 kc_row vnt_section hide_col_cont">

    <div class="kc-row-container kc-container header_cont">

        <div class="kc-wrap-columns header_col">

            <div class="kc-elm kc-css-840581 vnt_image logo">
                <div class="thumb">
                    <img src="{{ asset('web/wp-content/uploads/Logo-h100.png') }}" alt="Logo Làm Sạch 5S">
                </div>
                <a href="{{ route('homepage') }}" title="Trang chủ" class="link"><span class="link_title">Trang
                        chủ</span></a>
            </div>

            <div id="menu_header" class="kc-elm kc-css-468630 vnt_menu">
                <ul id="nav_header" class="vnt_nav nav_header">
                    <li id="menu-item-73"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-73">
                        <a class="menu_link" href="{{ route('homepage') }}" aria-current="page">Trang chủ</a>
                    </li>
                    <li id="menu-item-81"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-81">
                        <a class="menu_link" href="#">Dịch vụ</a>
                        <ul class="sub-menu">
                            @if ($servicesPosts && $servicesPosts->count() > 0)
                                @foreach ($servicesPosts as $post)
                                    <li id="menu-item-{{ $post->id }}"
                                        class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a class="menu_link"
                                            href="{{ route('post.detail', $post->slug) }}">{{ $post->title }}</a>
                                    </li>
                                @endforeach
                            @else
                                <li class="menu-item">No posts available.</li>
                            @endif
                        </ul>
                    </li>
                    <li id="menu-item-172"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-172">
                        <a class="menu_link" href="">Blog Làm Sạch</a>
                        <ul class="sub-menu">
                            @foreach ($categories as $category)
                                <li id="menu-item-{{ $category->id }}"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                    <a class="menu_link"
                                        href="{{ route('category.list', $category->type) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80">
                        <a class="menu_link" href="{{ route('contact') }}">Liên hệ</a>
                    </li>
                    <li id="menu-item-1939"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1939"><a
                            class="menu_link" href="{{route('recruitment.list')}}">TUYỂN DỤNG</a></li>
                </ul>
            </div>

            <div class="kc-elm kc-css-124168 vnt_title">

                <i class="icon fa-user-clock"></i>
                <div class="type">Tài khoản</div>

                <a href="" class="link " title="Tài khoản">Tài khoản</a>

            </div>

            <div class="kc-elm kc-css-398467 vnt_title">

                <i class="icon fa-bars"></i>
                <button type="button" class="link" data-toggle="modal" data-target="#menu_header"></button>

            </div>



        </div>

    </div>

</section>
<div class="kc_clfw"></div>
