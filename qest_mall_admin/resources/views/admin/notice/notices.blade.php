@extends("admin.layout")
@component('admin.layouts.header')
@endcomponent
@component('admin.layouts.mall_global_menu')
@endcomponent
@section('content')

<style>
    .container {
        display: flex;
        flex-wrap: wrap;
    }

    .box {
        width: 100px;
        height: 100px;
        margin: 10px;
        background-color: #ccc;
    }
</style>

<div style="width:80%;float:left;">
    <span class="ECM_CheckboxInput-LabelText" style="margin-top:20px;">新規ショップ追加</span>

    <div class="ui input">
        <input type="text" placeholder="Search...">
    </div>

    <div class="container">
        <div class="box">名前</div>
        <div class="box"><input type="text" placeholder="Search..."></div>
    </div>

    <!-- チェックボックス + テキスト -->
    <label class="ECM_CheckboxInput">
        <input class="ECM_CheckboxInput-Input" type="checkbox">
        <span class="ECM_CheckboxInput-DummyInput"></span>
        <span class="ECM_CheckboxInput-LabelText">利用規約に同意する</span>
    </label>

    <!-- チェックボックスのみ -->
    <label class="ECM_CheckboxInput" style="width: 40px;">
        <input class="ECM_CheckboxInput-Input" type="checkbox">
        <span class="ECM_CheckboxInput-DummyInput"></span>
    </label>

    <!-- ラジオボタン + テキスト-->
    <input class="visually-hidden" type="radio" name="fruits" id="apple"/>
    <label class="radio-label" for="apple">法人</label>
    <input class="visually-hidden" type="radio" name="fruits" id="orange"/>
    <label class="radio-label" for="orange">個人事業主</label>

    <!-- ラジオボタンのみ -->
    <div>
        <input class="visually-hidden" type="radio" name="fruits" id="radio1"/>
        <label class="radio-label" for="radio1"></label>
        <input class="visually-hidden" type="radio" name="fruits" id="radio2"/>
        <label class="radio-label" for="radio2"></label>
        <input class="visually-hidden" type="radio" name="fruits" id="radio3"/>
        <label class="radio-label" for="radio3"></label>
    </div>

    <div>
        <input type="text" value="" placeholder="テキスト..." class="input-text">
    </div>

    <div class="password-container">
        <input type="password" value="" placeholder="パスワード..." class="input-password">
        <i class="eye icon"></i>
    </div>
</div>


@endsection