@extends("layout")
@component('user.layouts.header')
@endcomponent
@section('content')
<link rel="stylesheet" href="css/pc/carousel.css">
<link rel="stylesheet" href="css/pc/mall_top.css">
{{-- Main Carousel --}}
<section class="carousel">
    <div class="carousel-container">
        <ul id="carousel_ul">
            <li><a href="#"><img class="img" src="/images/mall_top/main_carousel.png"></a></li>
            <li><a href="#"><img class="img" src="/images/mall_top/main_carousel2.png"></a></li>
            <li><a href="#"><img class="img" src="/images/mall_top/main_carousel3.png"></a></li>
        </ul>

        <button id="prev"><img class="img" src="/images/carousel/carousel_left.png"></button>
        <button id="next"><img class="img" src="/images/carousel/carousel_right.png"></button>
    </div>
</section>

{{-- Content Box --}}
<div class="content-box">
    {{-- Qest mall magazine --}}
    <div class="qmm">
        <label class="qmm-title">Qest mall magazine</label>
        <a href="#" style="float:right;font-size:11px;">Qest mall magazineトップへ</a>
        {{-- Carousel --}}
        <!-- 複数画像カルーセル（slick.js） -->
        <section class="five-slick qmm-slick">
            @for ($i = 0; $i < 10; $i++)
                <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
            @endfor
        </section>
    </div>

    <div style="display:flex;">
        {{-- Left Menu --}}
        <div class="left-menu">
            {{-- 広告 --}}
            <div>
                <a href="#">
                    <img class="img ad-img" src="/images/advertisement/ad_top.png">
                </a>
            </div>

            {{-- 商品カテゴリー --}}
            <div>
                <label class="menu-title">商品カテゴリ</label>

                <ul>
                    <li>ファッション</li>
                    <li>生活雑貨・ホビー</li>
                    <li>インテリア</li>
                    <li>フード・ドリンク</li>
                    <li>美容ケア</li>
                </ul>
            </div>

            {{-- ライフシーンから探す --}}
            <div>
                <label class="menu-title">ライフシーンから探す</label>
                <div >
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/chill_out_banner.png">
                    </a>
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/health_banner.png">
                    </a>
                    {{-- TODO:サイズがおかしい ここから --}}
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/minimal_banner.png">
                    </a>
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/fashion_banner.png">
                    </a>
                    {{-- TODO:サイズがおかしい ここまで --}}
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/hobby_banner.png">
                    </a>
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/art_banner.png">
                    </a>
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/gift_banner.png">
                    </a>
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/sustainability_banner.png">
                    </a>
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/gourmet_banner.png">
                    </a>
                    <a href="#">
                        <img class="img life-style-img" src="/images/life_scene_banner/opa_banner.png">
                    </a>
                </div>
            </div>

            {{-- ショップ・ブランド検索 --}}
            <div class="shop-bland-search">
                <label class="menu-title">ショップ・ブランド</label>
                <div style="display:flex;width:100%;">
                    <input type="text" style="width:70%;">
                    <button style="width:30%;">検索</button>
                </div>
                <div>
                    {{-- <a href="{{ route('shops') }}">ショップ一覧へ</a> --}}
                    <a href="/shops">ショップ一覧へ</a>
                </div>
                <div>
                    {{-- <a href="{{ route('brands') }}">ブランド一覧へ</a> --}}
                    <a href="/brands">ブランド一覧へ</a>
                </div>
            </div>

            {{-- 広告 --}}
            <div>
                <a href="#">
                    <img class="img ad-img" src="/images/advertisement/ad_top.png">
                </a>
                <a href="#">
                    <img class="img ad-img" src="/images/advertisement/ad_wow_kyoto.png">
                </a>
                <a href="#">
                    <img class="img ad-img" src="/images/advertisement/ad_waon.png">
                </a>
            </div>
        </div>

        {{-- Main Content --}}
        <main class="main-content">
            {{-- Life Scene --}}
            <div class="main-content-box life-scene">
                <label class="section-title">LIFE SCENE</label>
                <section>
                    <div>
                        <a href="#">
                            <img class="img life-style-img" src="/images/life_scene_logo/chill_out_logo.png">
                        </a>
                        <label class="life-scene-text">Chill Out</label>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img life-style-img" src="/images/life_scene_logo/health_logo.png">
                        </a>
                        <label class="life-scene-text">Health</label>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img life-style-img" src="/images/life_scene_logo/minimal_logo.png">
                        </a>
                        <label class="life-scene-text">Minimal</label>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img life-style-img" src="/images/life_scene_logo/fashion_logo.png">
                        </a>
                        <label class="life-scene-text">Fashion</label>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img life-style-img" src="/images/life_scene_logo/art_logo.png">
                        </a>
                        <label class="life-scene-text">Art</label>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img life-style-img" src="/images/life_scene_logo/gift_logo.png">
                        </a>
                        <label class="life-scene-text">Gift</label>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img life-style-img" src="/images/life_scene_logo/sustainability_logo.png">
                        </a>
                        <label class="life-scene-text">Sustainability</label>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img life-style-img" src="/images/life_scene_logo/gourmet_logo.png">
                        </a>
                        <label class="life-scene-text">Gourmet</label>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img life-style-img" src="/images/life_scene_logo/opa_logo.png">
                        </a>
                        <label class="life-scene-text">Opa</label>
                    </div>
                </section>
            </div>

            {{-- おすすめ商品 --}}
            <div class="main-content-box recommend-item">
                <label class="section-title">おすすめ商品</label>
                <section class="five-slick item-slick">
                    @for ($i = 0; $i < 10; $i++)
                        <div>
                            <a href="#"><img class="img" src={{ $item_images[$i] }}></a>
                            <div class="slider-text">
                                <a class="shop-name" href="#">天のめぐみ</a><br>
                                <label class="item-name">天然水 ミネラルウォーター 500ml 1セット(6本) </label><br>
                                <span class="price">
                                    <label>1,944円</label>
                                    <label class="free-shipping">&nbsp;&nbsp;送料無料</label>
                                </span>
                            </div>
                        </div>
                    @endfor
                </section>
            </div>

            {{-- 人気商品ランキング --}}
            <div class="main-content-box item-ranking">
                <label class="section-title">人気商品ランキング</label>
                <section class="five-slick rank-item-slick">
                    @for ($i = 0; $i < 10; $i++)
                        <div>
                            <label class="rank-title">{{$i+1}}位</label>
                            <a href="#"><img class="img" src={{ $item_images[$i] }}></a>
                            <div class="slider-text">
                                <label><a class="shop-name" href="#">天のめぐみ</a></label><br>
                                <label class="item-name">天然水 ミネラルウォーター 500ml 1セット(6本) </label><br>
                                <span class="price">
                                    <label>1,944円</label>
                                    <label class="free-shipping">&nbsp;&nbsp;送料無料</label>
                                </span>
                            </div>
                        </div>
                    @endfor
                </section>
            </div>

            {{-- 人気ショップランキング --}}
            <div class="main-content-box shop-ranking">
                <label class="section-title">人気ショップランキング</label>
                <section class="five-slick rank-shop-slick">
                    @for ($i = 0; $i < 10; $i++)
                        <div>
                            <label class="rank-title">{{$i+1}}位</label>
                            <a href="#"><img class="img" src={{ $shop_images[$i] }}></a>
                        </div>
                    @endfor
                </section>
            </div>

            {{-- 新着ショップ --}}
            <div class="main-content-box new-arrival-shop">
                <label class="section-title">新着ショップ</label>
                <section class="five-slick shop-slick">
                    @for ($i = 0; $i < 10; $i++)
                        <div><a href="#"><img class="img" src={{ $shop_images[$i] }}></a></div>
                    @endfor
                </section>
            </div>

            {{-- 閲覧履歴からのおすすめ商品 --}}
            {{-- <div class="main-content-box recommend-item-from-history hidden"> --}}
            <div class="main-content-box recommend-item-from-history">
                <label class="section-title">閲覧履歴からのおすすめ商品</label>
                <section class="five-slick item-slick">
                    @for ($i = 0; $i < 10; $i++)
                        <div>
                            <a href="#"><img class="img" src={{ $item_images[$i] }}></a>
                            <div class="slider-text">
                                <label><a class="shop-name" href="#">天のめぐみ</a></label><br>
                                <label class="item-name">天然水 ミネラルウォーター 500ml 1セット(6本) </label><br>
                                <span class="price">
                                    <label>1,944円</label>
                                    <label class="free-shipping">&nbsp;&nbsp;送料無料</label>
                                </span>
                            </div>
                        </div>
                    @endfor
                </section>
            </div>


            {{-- 閲覧商品履歴 --}}
            {{-- <div class="main-content-box browsing-item-history hidden"> --}}
                <div class="main-content-box browsing-item-history">
                    <label class="section-title">閲覧商品履歴</label>
                    <section class="five-slick item-slick">
                        @for ($i = 0; $i < 10; $i++)
                            <div>
                                <a href="#"><img class="img" src={{ $item_images[$i] }}></a>
                                <div class="slider-text">
                                    <label><a class="shop-name" href="#">天のめぐみ</a></label><br>
                                    <label class="item-name">天然水 ミネラルウォーター 500ml 1セット(6本) </label><br>
                                    <span class="price">
                                        <label>1,944円</label>
                                        <label class="free-shipping">&nbsp;&nbsp;送料無料</label>
                                    </span>
                                </div>
                            </div>
                        @endfor
                    </section>
                </div>

            {{-- 新着商品 --}}
            <div class="main-content-box new-arrival-item">
                <label class="section-title">新着商品</label>
                <section>
                    @for ($i = 0; $i < 6; $i++)
                        <ul>
                            <li>
                                <a href="#"><img class="img" src="/images/item/item1.png"></a>
                                <div class="slider-text">
                                    <label><a class="shop-name" href="#">天のめぐみ</a></label><br>
                                    <label class="item-name">天然水 ミネラルウォーター 500ml 1セット(6本) </label><br>
                                    <span class="price">
                                        <label>1,944円</label>
                                        <label class="free-shipping">&nbsp;&nbsp;送料無料</label>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#"><img class="img" src="/images/item/item2.png"></a>
                                <div class="slider-text">
                                    <label><a class="shop-name" href="#">天のめぐみ</a></label><br>
                                    <label class="item-name">天然水 ミネラルウォーター 500ml 1セット(6本) </label><br>
                                    <span class="price">
                                        <label>1,944円</label>
                                        <label class="free-shipping">&nbsp;&nbsp;送料無料</label>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#"><img class="img" src="/images/item/item3.png"></a>
                                <div class="slider-text">
                                    <label><a class="shop-name" href="#">天のめぐみ</a></label><br>
                                    <label class="item-name">天然水 ミネラルウォーター 500ml 1セット(6本) </label><br>
                                    <span class="price">
                                        <label>1,944円</label>
                                        <label class="free-shipping">&nbsp;&nbsp;送料無料</label>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#"><img class="img" src="/images/item/item4.png"></a>
                                <div class="slider-text">
                                    <label><a class="shop-name" href="#">天のめぐみ</a></label><br>
                                    <label class="item-name">天然水 ミネラルウォーター 500ml 1セット(6本) </label><br>
                                    <span class="price">
                                        <label>1,944円</label>
                                        <label class="free-shipping">&nbsp;&nbsp;送料無料</label>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#"><img class="img" src="/images/item/item5.png"></a>
                                <div class="slider-text">
                                    <label><a class="shop-name" href="#">天のめぐみ</a></label><br>
                                    <label class="item-name">天然水 ミネラルウォーター 500ml 1セット(6本) </label><br>
                                    <span class="price">
                                        <label>1,944円</label>
                                        <label class="free-shipping">&nbsp;&nbsp;送料無料</label>
                                    </span>
                                </div>
                            </li>
                        </ul>

                    @endfor
                </section>
            </div>

            {{-- クーポン --}}
            <div class="main-content-box coupon">
                <section class="coupon-slick">
                    @for ($i = 0; $i < 10; $i++)
                        <div><a href="#"><img class="img" src="/images/coupon/SPECIAL-COUPON-2021-1-1024x512.png"></a></div>
                    @endfor
                </section>
            </div>
        </main>
    </div>
</div>
@endsection
@section("script")
    <script src="/js/pc/carousel.js"></script>
@endsection
