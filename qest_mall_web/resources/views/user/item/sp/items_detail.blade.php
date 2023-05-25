@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/mall_top.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    {{-- 商品画像 --}}
    <div class="main-carousel-slick">
        @foreach ($item_imgs as $item_img)
            <div>
                <img class="img" style="height:400px;width:400px;margin:0 auto;" src="{{ $item_img->image_url }}">
            </div>
        @endforeach
    </div>

    
        {{-- Main Content --}}
        <div class="main-content">
            {{-- 商品画像 --}}
            <div class="main-carousel-slick">
                @foreach ($item_imgs as $item_img)
                    <div>
                        <img class="img" style="height:400px;width:400px;margin:0 auto;" src="{{ $item_img->image_url }}">
                    </div>
                @endforeach
            </div>

            <div style="width:100%;height:200px;">
                <div style="float:left;width:30%;">
                    <div style="font-weight:bold;font-size:17px;">{{$item->name ?? ""}}</div>
                    <div style="font-weight:bold;font-size:17px;margin-top:10px;">{{$item->normal_price ?? ""}}円（税込）</div>
                    <div style="font-weight:bold;font-size:12px;margin-top:10px;">納期目安:2日~14日</div>
                </div>
                <div style="float:left;width:70%;text-align:right;">
                    <div style="width:100%;height:100px;"></div>
                    <button class="primary_radius_button" style="padding: 15px 30px;
                    border: 0px;
                    border-radius: 30px;
                    font-size: 17px;
                    font-weight: bold;
                    background-color: #FBDB5B;">カートに追加する</button>
                    <button class="primary_btn_radius_menu" style="padding: 15px 30px;
                    margin-left:10px;
                    border: 0px;
                    border-radius: 30px;
                    font-size: 17px;
                    font-weight: bold;
                    background-color: #FBDB5B;">商品を購入する</button>
                </div>
            </div>

            

            <hr style="border:1px solid rgba(0,0,0,.87);">

            {{-- 利用可能なクーポン --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">この商品で利用可能なクーポン</h2>
                @foreach($coupons as $coupon)
                    <a href="{{ route('coupons', ['coupon' => 1]); }}">
                        <div style="width:100%;border-radius:10px;background-color:#F7F7F7;padding:10px;">
                            
                        </div>
                    </a>
                @endforeach
            </section>

            {{-- クーポン --}}
            <section class="main-content-box coupon">
                <div class="coupon-slick">
                    @for ($i = 0; $i < 10; $i++)
                        @foreach ($coupons as $coupon)
                            <div>
                                <a href="{{ route('coupons', $coupon->id) }}">
                                    <img class="img" src="{{ asset($coupon->image->url) }}">
                                </a>
                            </div>
                        @endforeach
                    @endfor
                </div>
            </section>

            {{-- バリエーションを選択して購入 --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">バリエーションを選択して購入</h2>
                @include('user.layouts.pc.components.item.rank_items')
            </section>

            {{-- この商品と一緒に購入されている商品 --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">この商品と一緒に購入されている商品</h2>
                @include('user.layouts.pc.components.item.rank_items')
            </section>

            {{-- この商品を購入している人が注目している商品 --}}
            <section class="main-content-box rank-item">
                <h2 class="section-title">この商品を購入している人が注目している商品</h2>
                @include('user.layouts.pc.components.item.rank_items')
            </section>


            <hr style="border:solid 0.3px #EBEBEB;margin:40px 15px;">

            <section class="shop-info">
                <div class="shop-info-top">
                    <div class="shop-banner">
                        @empty($shop->banner_url)
                            <img src="{{ asset('/images/shop/no_image_logo.png') }}">
                        @else
                            <img src="{{ asset($shop->banner_url) }}">
                        @endempty
                    </div>
                    <div class="shop-text">
                        <h2 class="section-title">
                            {{ $shop->shop_name }}
                            <button class="inquiry_btn_radius">ショップに問い合わせる</button>
                        </h2>
                        <div class="flex-box">
                            <label class="ECM_CheckboxInput">
                                <input class="ECM_CheckboxInput-Input" type="checkbox">
                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                <span class="ECM_CheckboxInput-LabelText">メールマガジンに登録する</span>
                            </label>
                        </div>
                        <div class="flex-box">
                            <label class="ECM_CheckboxInput">
                                <input class="ECM_CheckboxInput-Input" type="checkbox">
                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                <span class="ECM_CheckboxInput-LabelText">お気に入りショップに登録する</span>
                            </label>
                        </div>
                        <ul class="shop-info-link">
                            <li><a href="{{ route('shop_info', $shop) }}">店舗情報</a></li>
                            <li><a>返品特約について</a></li>
                            <li><a>特商法に基づく表示</a></li>
                            <li><a>配送方法について</a></li>
                        </ul>
                    </div>
                </div>
                <div class="shop-info-bottom">
                    <p>{{ $shop->introduction }}</p>
                </div>
            </section>
        </div>

    {{-- Content Box --}}
    <div class="content-box">
        <div style="display:flex;">
            {{-- Main Content --}}
            <div class="main-content">
                {{-- Qest mall magazine --}}
                <section class="main-content-box qmm">
                    <h2 class="section-title">Qest mall magazine
                        <a href="#" style="float:right;font-size:11px;font-weight:normal;">
                            Qest mall magazineトップへ
                        </a>
                    </h2>
                    <div class="three-slick qmm-slick">
                        @for ($i = 0; $i < 10; $i++)
                            <div>
                                <a href="#">
                                    <img class="img" src="{{ asset('/images/one_stories/one_stories.png') }}">
                                </a>
                            </div>
                        @endfor
                    </div>
                </section>

                {{-- Life Scene --}}
                <section class="main-content-box life-scene">
                    <h2 class="section-title">LIFE SCENE</h2>
                    <div class="life-scene-container">
                        @foreach ($sub_categoris as $sub_category)
                            <div class="life-scene-box">
                                <a href="#">
                                    <img class="img life-scene-img" src="{{ asset($sub_category->icon_url) }}">
                                </a>
                                <p class="life-scene-title">{{ $sub_category->sub_category_name }}</p>
                            </div>
                        @endforeach
                    </div>
                </section>

                {{-- おすすめ商品 --}}
                @if (!session('user_id_token'))
                    <section class="main-content-box recommend-item">
                        <h2 class="section-title">おすすめ商品</h2>
                        <div class="three-slick item-slick">
                            @foreach ($recommend_items as $item)
                                <div>
                                    <a href="{{ route('sp.items_detail', $item->id) }}">
                                        <div class="item-img">
                                            <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                            @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                                <div class="new-img">
                                                    <img src="{{ asset('/images/item/new_logo.png') }}">
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                    <div class="slider-text">
                                        <div class="shop-name">
                                            <a href="{{ route('sp.shop', $item->shop_id) }}">
                                                {{ $item->shop->shop_name }}
                                            </a>
                                        </div>
                                        <div class="item-name">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                        <div class="price">
                                            <p>{{ number_format($item->normal_price) }}円
                                                @if ($item->is_postage_free == true)
                                                    <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- 人気商品ランキング --}}
                <section class="main-content-box rank-item">
                    <h2 class="section-title">人気商品ランキング</h2>
                    <div class="three-slick rank-item-slick">
                        @php $count = 0; @endphp
                        @foreach ($rank_items as $item)
                            @php $count++; @endphp
                            <div>
                                <p class="rank-num">{{$count}}<span class="rank-text">位</span></p>
                                <a href="{{ route('sp.items_detail', $item->id) }}">
                                    <div class="item-img">
                                        <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                        @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                            <div class="new-img">
                                                <img src="{{ asset('/images/item/new_logo.png') }}">
                                            </div>
                                        @endif
                                    </div>
                                </a>
                                <div class="slider-text">
                                    <div class="shop-name">
                                        <a href="{{ route('sp.shop', $item->shop_id) }}">
                                            {{ $item->shop->shop_name }}
                                        </a>
                                    </div>
                                    <div class="item-name">
                                        <p>{{ $item->name }}</p>
                                    </div>
                                    <div class="price">
                                        <p>{{ number_format($item->normal_price) }}円
                                            @if ($item->is_postage_free == true)
                                                <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                {{-- 人気ショップランキング --}}
                <section class="main-content-box rank-shop">
                    <h2 class="section-title">人気ショップランキング</h2>
                    <div class="three-slick rank-shop-slick">
                        @php $count = 0; @endphp
                        @foreach ($rank_shops as  $shop)
                            @php $count++; @endphp
                            <div>
                                <p class="rank-num">{{$count}}<span class="rank-text">位</span></p>
                                <a href="{{ route('sp.shop', $shop->id) }}">
                                    <img class="img" src="{{ asset($shop->image->url) }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>

                {{-- 新着ショップ --}}
                <section class="main-content-box latest-shop">
                    <h2 class="section-title">新着ショップ</h2>
                    <div class="three-slick latest-shop-slick">
                        @foreach ($latest_shops as  $shop)
                            <div>
                                <a href="{{ route('sp.shop', $shop->id) }}">
                                    <img class="img" src="{{ asset($shop->image->url) }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>

                {{-- 閲覧履歴からのおすすめ商品 --}}
                @if (session('user_id_token'))
                    <section class="main-content-box recommend-by-history-item">
                        <h2 class="section-title">閲覧履歴からのおすすめ商品</h2>
                        <div class="three-slick item-slick">
                            @foreach ($recommend_by_history_items as $item)
                                <div>
                                    <a href="{{ route('sp.items_detail', $item->id) }}">
                                        <div class="item-img">
                                            <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                            @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                                <div class="new-img">
                                                    <img src="{{ asset('/images/item/new_logo.png') }}">
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                    <div class="slider-text">
                                        <div class="shop-name">
                                            <a href="{{ route('sp.shop', $item->shop_id) }}">
                                                {{ $item->shop->shop_name }}
                                            </a>
                                        </div>
                                        <div class="item-name">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                        <div class="price">
                                            <p>{{ number_format($item->normal_price) }}円
                                                @if ($item->is_postage_free == true)
                                                    <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif


                {{-- 閲覧商品履歴 --}}
                @if (session('user_id_token'))
                    <section class="main-content-box browsing-history-item">
                        <h2 class="section-title">閲覧商品履歴</h2>
                        <div class="three-slick item-slick">
                            @foreach ($browsing_history_items as $item)
                                <div>
                                    <a href="{{ route('sp.items_detail', $item->id) }}">
                                        <div class="item-img">
                                            <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                            @if ($item->created_at > \Carbon\Carbon::now()->subDays(14))
                                                <div class="new-img">
                                                    <img src="{{ asset('/images/item/new_logo.png') }}">
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                    <div class="slider-text">
                                        <div class="shop-name">
                                            <a href="{{ route('sp.shop', $item->shop_id) }}">
                                                {{ $item->shop->shop_name }}
                                            </a>
                                        </div>
                                        <div class="item-name">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                        <div class="price">
                                            <p>{{ number_format($item->normal_price) }}円
                                                @if ($item->is_postage_free == true)
                                                    <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- 新着商品 --}}
                <section class="main-content-box latest-item">
                    <h2 class="section-title">新着商品</h2>
                    <div class="item-container">
                        @foreach ($latest_items as $item)
                            <div class="item-box">
                                <a href="{{ route('sp.items_detail', $item->id) }}">
                                    <div class="item-img">
                                        <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                    </div>
                                </a>
                                <div class="slider-text">
                                    <div class="shop-name">
                                        <a href="{{ route('sp.shop', $item->shop_id) }}">
                                            {{ $item->shop->shop_name }}
                                        </a>
                                    </div>
                                    <div class="item-name">
                                        <p>{{ $item->name }}</p>
                                    </div>
                                    <div class="price">
                                        <p>{{ number_format($item->normal_price) }}円
                                            @if ($item->is_postage_free == true)
                                                <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                {{-- クーポン --}}
                <section class="main-content-box coupon">
                    <div class="coupon-slick">
                        @for ($i = 0; $i < 10; $i++)
                            @foreach ($coupons as $coupon)
                                <div>
                                    <a href="{{ route('sp.coupons', $coupon->id) }}">
                                        <img class="img" src="{{ asset($coupon->image->url) }}">
                                    </a>
                                </div>
                            @endforeach
                        @endfor
                    </div>
                </section>

                {{-- 広告 --}}
                <aside class="main-content-box left-menu-box">
                    <a href="{{ $ads[AdTypeConst::MOBILE]->url }}">
                        <img class="img ad-img" src="{{ asset($ads[AdTypeConst::MOBILE]->image->url) }}">
                    </a>
                </aside>
            </div>
        </div>
    </div>
</main>
@component('user.layouts.sp.footer')
@endcomponent
{{-- @component('user.layouts.sp.menu')
@endcomponent --}}
@endsection
@section("script")
    <script src="{{ asset('js/sp/hamburger_menu.js') }}"></script>
@endsection
