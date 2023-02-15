@extends("layout")
@section('content')
@include('user.layouts.pc.header')
<link rel="stylesheet" href="{{ asset('css/pc/drop_down_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/mall_top.css') }}">
<link rel="stylesheet" href="{{ asset('css/pc/item_search.css') }}">
{{-- Content Box --}}
<div class="content-box">
    {{ Breadcrumbs::render('item_keyword', $keyword) }}

    <div style="margin-top:60px;display:flex;">
        @include('user.layouts.pc.item_sidemenu')

        {{-- Main Content --}}
        <div class="main-content">
            {{-- 商品一覧 --}}
            <section class="main-content-box latest-item">
                <div class="section-title-box">
                    <h2 class="section-title fit-content">
                        商品一覧
                    </h2>
                    <div class="filter-bar">
                        <select name="sort" id="sort" onchange="location.href='?sort=' + (this.value)">
                            <option value="recommend" @if($sort == "recommend") selected @endif>おすすめ順</option>
                            <option value="low_price" @if($sort == "low_price") selected @endif>価格の安い順</option>
                            <option value="high_price" @if($sort == "high_price") selected @endif>価格の高い順</option>
                            <option value="start_datetime" @if($sort == "start_datetime") selected @endif>発売日順</option>
                        </select>
                        <!-- モーダル表示 -->
                        <button onclick="showModal();"><img class="img" src="{{ asset('/images/item/icon_filter.png') }}">絞り込み</button>
                        <div class="ui modal">
                            <img class="close" src="/images/user/icon_modal_close.png">
                            <div class="content">
                                <section>
                                    <div class="modal-section-title">カテゴリ</div>
                                    <div class="flex-box">
                                        <label class="ECM_CheckboxInput">
                                            <input class="ECM_CheckboxInput-Input" type="checkbox">
                                            <span class="ECM_CheckboxInput-DummyInput"></span>
                                            <span class="ECM_CheckboxInput-LabelText">すべてのカテゴリ</span>
                                        </label>
                                    </div>

                                    @foreach ($major_categoris as $major_category)
                                        <div class="nav-open flex-box">
                                            <label class="ECM_CheckboxInput">
                                                <input class="ECM_CheckboxInput-Input" type="checkbox">
                                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                                <span class="ECM_CheckboxInput-LabelText">すべての{{ $major_category->category_name }}</span>
                                            </label>
                                        </div>
                                        <nav class="accordion-nav">
                                            <ul>
                                                <li>項目</li>
                                                <li>項目</li>
                                                <li>項目</li>
                                                <li>項目</li>
                                                <li>項目</li>
                                            </ul>
                                        </nav>
                                    @endforeach
                                </section>

                                <section>
                                    <div class="modal-section-title">ライフシーンから探す</div>
                                    <div class="flex-box">
                                        @foreach ($sub_categoris as $sub_category)
                                            <label class="ECM_CheckboxInput">
                                                <input class="ECM_CheckboxInput-Input" type="checkbox">
                                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                                <span class="ECM_CheckboxInput-LabelText">{{ $sub_category->sub_category_name }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </section>

                                <section>
                                    <div class="modal-section-title">タグ</div>
                                    <div class="flex-box">
                                        @foreach ($tags as $tag)
                                            <label class="ECM_CheckboxInput">
                                                <input class="ECM_CheckboxInput-Input" type="checkbox">
                                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                                <span class="ECM_CheckboxInput-LabelText">{{ $tag->tag_name }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </section>

                                <section>
                                    <div class="modal-section-title">価格帯</div>
                                    <input type="number" class="switch_TextInput" placeholder="0円">
                                    <span style="margin:0 10px;">〜</span>
                                    <input type="number" class="switch_TextInput" placeholder="上限なし">
                                </section>

                                <section>
                                    <div class="switch-input flex-box">
                                        <label class="switch_LabelText">送料無料</label>
                                            <div class="toggle_switch">
                                                <input type="checkbox" name="is_postage_free" id="is_postage_free_switch">
                                                <label for="is_postage_free_switch"></label>
                                            </div>
                                    </div>
                                    <div class="switch-input flex-box">
                                        <label class="switch_LabelText">クーポン対象</label>
                                            <div class="toggle_switch">
                                                <input type="checkbox" name="is_coupon" id="is_coupon_switch">
                                                <label for="is_coupon_switch"></label>
                                            </div>
                                    </div>
                                    <div class="switch-input flex-box">
                                        <label class="switch_LabelText">在庫なしを含む</label>
                                        <div class="toggle_switch">
                                            <input type="checkbox" name="including_out_of_stock" id="including_out_of_stock_switch">
                                            <label for="including_out_of_stock_switch"></label>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="modal-section-title">除外キーワード</div>
                                    <input type="text" class="switch_TextInput" placeholder="指定なし" style="width:50%;">
                                </section>
                            </div>
                            <div class="actions">
                                <div class="ui deny button clear-button">
                                    クリア
                                </div>
                                <div class="ui positive icon button search-button">
                                    この条件で検索する
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-container">
                    @include('user.layouts.pc.components.item.items')
                    {{ $items->links() }}
                </div>
            </section>
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/drop_down_menu.js') }}"></script>
    <script>
        function showModal() {
            $('.modal').modal({
                centered: false
            }).modal('show');
        }
        //クリックで動く
		$('.nav-open').click(function(){
			$(this).toggleClass('active');
			$(this).next('nav').slideToggle();
		});
    </script>
@endsection
