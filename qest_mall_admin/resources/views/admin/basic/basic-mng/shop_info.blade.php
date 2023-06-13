@extends("admin.layout")
@component('admin.layouts.header')
@endcomponent
@component('admin.layouts.mall_global_menu')
@endcomponent
@section('content')

<!-- サイドバー -->
<div style="width:20%;float:left;">
    <nav class="sidebar">
        <ul>
            <li class="sidebar-title"><a>モール基本管理</a></li>
            <li><a href="{{ route('admin.basic-info'); }}" class="selected">基本情報</a></li>
            <li><a href="{{ route('admin.terms-of-open'); }}">出店規約</a></li>
            <li><a href="{{ route('admin.terms-of-service') }}">利用規約/個人情報保護方針</a></li>
            <li><a href="{{ route('admin.adminUsers') }}">管理ユーザー</a></li>
            <li><a href="{{ route('admin.staff') }}">スタッフマスタ</a></li>
            <li><a href="{{ route('admin.top-banners') }}">トップバナー編集</a></li>
            <li><a href="{{ route('admin.ad-banners') }}">広告バナー編集</a></li>
        </ul>
    </nav>
</div>
<!-- サイドバー -->

<style>
    .t-label {
        width: 20%;
        font-size: 17px;
        font-weight: bold;
        padding: 10px 20px;
    }

    .t-data1 {
        font-size: 17px;
        width: 30%;
    }

    .t-data2 {
        font-size: 17px;
        width: 70%;
    }
</style>
<form action="" method="GET">
    <div style="width:70%;float:left;">
        <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:10px;font-size:20px;">基本情報</span>

        <div style="width:100%;height:50px;">
            <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:20px;float:left;">登録法人情報</span>
            <button class="primary_btn_radius_lightgray" style="margin-top:10px;float:right;">編集</button>
        </div>
        <div style="min-height:50px;width:100%;margin-left:1%;background-color:#F7F7F7;padding:20px;">
            <table>
                <tr>
                    <td class="t-label">法人名</td>
                    <td class="t-data1">{{$mall->company_name ?? ""}}</td>
                    <td class="t-data1">{{$mall->company_names_kana ?? ""}}</td>
                </tr>
                <tr>
                    <td class="t-label">法人番号</td>
                    <td class="t-data1">{{ $mall->company_no ?? "" }}</td>
                    <td class="t-data1"></td>
                </tr>
                <tr>
                    <td class="t-label">代表者名</td>
                    <td class="t-data1">{{ $mall->delegate_name ?? "" }}</td>
                    <td class="t-data1">{{ $mall->delegate_name_kana ?? "" }}</td>
                </tr>
                <tr>
                    <td class="t-label">代表電話番号</td>
                    <td class="t-data1">{{$mall->delegate_tel_no ?? ""}}</td>
                    <td class="t-data1"></td>
                </tr>
                <tr>
                    <td class="t-label">代表者メールアドレス</td>
                    <td class="t-data1">{{$mall->delegate_mail_address ?? ""}}</td>
                    <td class="t-data1"></td>
                </tr>
                <tr>
                    <td class="t-label">本社住所</td>
                    <td colspan="2" class="t-data2">{{$mall->post_code ?? ""}} {{$mall->address1 ?? ""}}</td>
                </tr>
            </table>
        </div>

        <div style="width:100%;height:50px;margin-top:20px;">
            <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;margin-bottom:20px;float:left;">サービス情報</span>
            <button class="primary_btn_radius_lightgray" style="margin-top:10px;float:right;">編集</button>
        </div>
        <div style="min-height:50px;width:100%;margin-left:1%;background-color:#F7F7F7;padding:20px;">
            <table>
                <tr>
                    <td class="t-label">サービス名</td>
                    <td class="t-data1">{{ $service->service_name ?? ""}}</td>
                    <td class="t-data1">{{ $service->service_name_kana ?? "" }}</td>
                </tr>
                <tr>
                    <td class="t-label">サービス責任者</td>
                    <td class="t-data1">{{ $service->service_manager_name ?? "" }}</td>
                    <td class="t-data1">{{ $service->service_manager_name_kana ?? "" }}</td>
                </tr>
                <tr>
                    <td class="t-label">個人情報取扱責任者</td>
                    <td class="t-data1">{{ $service->privacy_manager_name ?? "" }}</td>
                    <td class="t-data1">{{ $service->privacy_manager_name_kana ?? "" }}</td>
                </tr>
                <tr>
                    <td class="t-label">電話番号</td>
                    <td class="t-data1">{{ $service->tel ?? "" }}</td>
                    <td class="t-data1"></td>
                </tr>
                <tr>
                    <td class="t-label">メールアドレス</td>
                    <td class="t-data1">{{ $service->mail ?? "" }}</td>
                    <td class="t-data1"></td>
                </tr>
                <tr>
                    <td class="t-label">住所</td>
                    <td colspan="2" class="t-data2">
                        {{ $service->post_code ?? "" }}
                        {{ $service->address1 ?? "" }}
                        {{ $service->address2 ?? "" }}
                        {{ $service->address3 ?? "" }}
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>


@endsection