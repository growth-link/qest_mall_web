@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
<link rel="stylesheet" href="{{ asset('css/sp/shop_info.css') }}">
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    <div class="content-box">
        <div class="main-content">
            <section>
                <h2 class="part-title">利用規約/個人情報保護方針</h2>

                <p>{!! nl2br(e($contract)) !!}</p>
            </section>
        </div>
    </div>
    @component('user.layouts.sp.footer')
    @endcomponent
    @include('user.layouts.sp.menu')
</div>
@endsection
@section("script")
@endsection
