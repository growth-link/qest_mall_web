@extends("layout")
@section('content')
@if($is_login)
    @component('user.layouts.pc.header')
    @endcomponent
@else
    @component('user.layouts.pc.guest_header')
    @endcomponent
@endif
<link rel="stylesheet" href="{{ asset('css/pc/shop_info.css') }}">
{{-- Content Box --}}
<div class="content-box">
        {{-- Main Content --}}
        <div class="main-content">
            <section>
                <h2 class="part-title">特定商取引法に基づく表記</h2>
                @isset($shop->specified_commercial_transaction->product_delivery_schedule)
                    <h3 class="section-title">商品の引渡時期</h3>
                    <p>{!! nl2br(e($shop->specified_commercial_transaction->product_delivery_schedule)) !!}</p>
                @endisset

                @isset($shop->specified_commercial_transaction->payment_method_and_deadline)
                    <h3 class="section-title">お支払い方法・お支払い期限</h3>
                    <p>{!! nl2br(e($shop->specified_commercial_transaction->payment_method_and_deadline)) !!}</p>
                @endisset

                <h3 class="section-title">販売価格について</h3>
                <p class="sentence">{!! nl2br(e($shop_info['sales_price']['sentence'])) !!}</p>
                @if ($shop_info['sales_price']['link'])
                    <input type="hidden" data-shop-id="{{ $shop->id }}" name="sales-price-link" value="{{ $shop_info['sales_price']['link'] }}">
                @endif

                <h3 class="section-title">返品・返金について</h3>
                <p>{!! nl2br(e($shop_info['return_policy']['sentence'])) !!}</p>

                <h3 class="section-title">事業者の名称および連絡先</h3>
                <p>販売業者：{{ $shop->distributor }}<br>
                    代表責任者：{{ $shop->officer_name }}<br>
                    個人情報取扱責任者：
                    @if ($shop->is_same_officer == true)
                        {{ $shop->officer_name }}
                    @else
                        {{ $shop->personal_info_officer_name }}
                    @endif
                    <br>
                    所在地：
                        @isset($shop->zip_code)
                            {{ substr($shop->zip_code, 0, 3) }}-{{ substr($shop->zip_code, 3, 4) }}
                        @endisset
                        @isset ($shop->prefecture->prefecture_full_name)
                            {{ $shop->prefecture->prefecture_full_name }}
                        @endisset
                        {{ $shop->city }}
                        {{ $shop->address }}
                        {{ $shop->building }}<br>
                    電話番号：{{ $shop->tel }}<br>
                    メールアドレス：{{ $shop->mail }}<br>
                    ショップ名：{{ $shop->shop_name }}
                </p>

                <h3 class="section-title">許可証について</h3>
                <p>古物商許可証番号:{{ $shop->industry_id }}</p>
            </section>

            <section>
                <h2 class="part-title">利用規約/個人情報保護方針</h2>
                <p class="sentence">{!! nl2br(e($shop_info['privacy_policy']['sentence'])) !!}</p>
                @if ($shop_info['sales_price']['link'])
                    <input type="hidden" name="privacy-policy-link" value="{{ $shop_info['privacy_policy']['link'] }}">
                @endif
            </section>

            <section>
                <h2 class="part-title">営業日カレンダー</h2>
                <table class="business-calendar">
                    <tr>
                        <td class="td-title">営業時間</td>
                        <td class="td-body">
                            @isset($shop->business_calendar->business_hours)
                                {!! nl2br(e($shop->business_calendar->business_hours)) !!}
                            @endisset
                        </td>
                    </tr>
                    <tr>
                        <td class="td-title">基本休業日</td>
                        <td class="td-body">
                            @isset($shop->business_calendar->basic_holiday)
                                {!! nl2br(e($shop->business_calendar->basic_holiday)) !!}
                            @endisset
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
    <script src="{{ asset('/js/pc/shop_info.js') }}"></script>
@endsection
