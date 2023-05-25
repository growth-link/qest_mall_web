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
            <h2 class="part-title">配送・送料について</h2>

            @foreach ($delivery_types as $delivery_type)
                <h3 class="section-title">{{ $delivery_type->delivery_type_name }}</h3>
                <table class="shipping-table">
                    <thead>
                        <tr>
                            <th></th>
                            @foreach ($shop_delivery_areas as $shop_delivery_area)
                                <th>
                                @foreach ($shop_delivery_area->shop_delivery_area_sets as $shop_delivery_area_set)
                                    {{ $shop_delivery_area_set->prefecture->prefecture_name }}<br>
                                @endforeach
                                </th>
                            @endforeach
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($sizes as $size)
                        <tr>
                            <td>{{ $size->size_name }}</td>
                            @foreach ($shop->shop_delivery_charges as $shop_delivery_charge)
                                @if ($shop_delivery_charge->delivery_type_id == $delivery_type->id && $shop_delivery_charge->size_id == $size->id)
                                    <td>{{ number_format($shop_delivery_charge->price) }}</td>
                                @endif
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
</div>
@component('user.layouts.pc.footer')
@endcomponent
@endsection
@section("script")
@endsection
