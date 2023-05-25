@extends("layout_sp")
@section('content')
@component('user.layouts.sp.header')
@endcomponent
@component('user.layouts.sp.see_more')
@endcomponent
<div id="main_container">
    {{-- Main Carousel --}}
    <p style="height:400px;margin:60px 15px;color:#6C6C6C;">退会が完了しました。</p>

    @component('user.layouts.sp.footer')
    @endcomponent
    {{-- @include('user.layouts.sp.menu') --}}
</div>
@endsection
@section("script")
@endsection
