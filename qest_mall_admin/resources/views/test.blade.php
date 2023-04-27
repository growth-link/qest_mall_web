@extends("layout")
@component('admin.layouts.header')
@endcomponent
@section('content')
<style>

</style>

<nav class="navbar">
    <ul class="menu">
        <li class="dropdown">
            <a href="#">ショップ基本管理<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
            <li><a href="#">Product 1</a></li>
            <li><a href="#">Product 2</a></li>
            <li><a href="#">Product 3</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">商品情報<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
            <li><a href="#">Product 1</a></li>
            <li><a href="#">Product 2</a></li>
            <li><a href="#">Product 3</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">クーポン管理<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
            <li><a href="#">Service 1</a></li>
            <li><a href="#">Service 2</a></li>
            <li><a href="#">Service 3</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">売上・会計管理<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
            <li><a href="#">Service 1</a></li>
            <li><a href="#">Service 2</a></li>
            <li><a href="#">Service 3</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">顧客管理<i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
            <li><a href="#">Service 1</a></li>
            <li><a href="#">Service 2</a></li>
            <li><a href="#">Service 3</a></li>
            </ul>
        </li>
    </ul>
</nav>


<nav class="sidebar">
    <ul>
        <li><a href="#" class="selected">項目1</a></li>
        <li><a href="#">項目2</a></li>
        <li><a href="#">項目3</a></li>
    </ul>
</nav>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<select name="skills" multiple="" class="ui fluid dropdown">
    <option value="">Skills</option>
    <option value="angular">Angular</option>
    <option value="css">CSS</option>
    <option value="design">Graphic Design</option>
    <option value="ember">Ember</option>
    <option value="html">HTML</option>
    <option value="ia">Information Architecture</option>
    <option value="javascript">Javascript</option>
    <option value="mech">Mechanical Engineering</option>
    <option value="meteor">Meteor</option>
    <option value="node">NodeJS</option>
    <option value="plumbing">Plumbing</option>
    <option value="python">Python</option>
    <option value="rails">Rails</option>
    <option value="react">React</option>
    <option value="repair">Kitchen Repair</option>
    <option value="ruby">Ruby</option>
    <option value="ui">UI Design</option>
    <option value="ux">User Experience</option>
</select>

<!-- トグルスイッチ -->
<div class="toggle_switch">
    <input type="checkbox" name="xxx" id="cb_toggle_switch">
    <label for="cb_toggle_switch"></label>
</div>

<button class="primary_btn_radius">
    売上・会計管理
</button>

<button class="primary_btn">
    売上・会計管理
</button>

<!-- モーダル表示 -->
<div>
    <button onclick="showModal();">モーダルを表示</button>
</div>
<div id="password_modal" class="ui modal mini">
    <img src="/images/user/icon_modal_close.png" style="position:absolute;right:10px;top:10px;" onclick="closeModal();">
    <div class="content">
        <section>
            <span class="ECM_CheckboxInput-LabelText">2段階認証</span>
        </section>


        <section style="margin-top:20px;">
        </section>

        <section style="margin-top:20px;">
            <div class="ui input">
                <input type="text" placeholder="Search...">
            </div>
        </section>

        <section style="margin-top:20px;">
            <div class="ui input">
                <input type="text" placeholder="Search...">
            </div>
        </section>


        <section>
            <div class="modal-section-title">除外キーワード</div>
            <input type="text" class="switch_TextInput" placeholder="指定なし" style="width:50%;">
        </section>

        <section style="text-align:center;">
            <button class="primary_btn_radius">
                認証してログインする
            </button>
        </section>
    </div>
</div>

<div class="ui input">
    <input type="text" placeholder="Search...">
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
<label class="radio-label" for="apple">りんご</label>
<input class="visually-hidden" type="radio" name="fruits" id="orange"/>
<label class="radio-label" for="orange">みかん</label>
<input class="visually-hidden" type="radio" name="fruits" id="peach"/>
<label class="radio-label" for="peach">もも</label>

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

{{-- <div class="formItem">
    <p>
        <input type="password" placeholder="PASSWORD" id="password">
        <span class="field-icon">
            <i toggle="#password-field" class="mdi mdi-eye toggle-password"></i>
        </span>
    </p>
</div> --}}

<!-- メインカルーセル（slick.js） -->
<div class="main-carousel-slick">
    <div><a href="#"><img class="img" src="/images/mall_top/main_carousel.png"></a></div>
    <div><a href="#"><img class="img" src="/images/mall_top/main_carousel2.png"></a></div>
    <div><a href="#"><img class="img" src="/images/mall_top/main_carousel3.png"></a></div>
</div>

<div style="margin:0 10%">
    <!-- 複数画像カルーセル（slick.js）ここから -->
    <div class="five-slick qmm-slick">
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
        <div><a href="#"><img class="img" src="/images/one_stories/one_stories.png"></a></div>
    </div>
    <!-- 複数画像カルーセル（slick.js）ここまで -->
</div>

<div class="wrap" style="font-size:20px;">
    <ul>
        <li class="cls1">＜</li>
        <li class="cls1">1</li>
        <li class="cls1">2</li>
        <li class="cls1">3</li>
        <li class="cls1">4</li>
        <li class="cls1">5</li>
        <li class="cls1">＞</li>
    </ul>
</div>

<div class="card m-5">
    <div class="card-header">メール送信</div>
    <div class="card-body">
        <form method="post" action="{{ route('mail.send') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">件名</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="mb-3">
                <label for="contents" class="form-label">内容</label>
                <textarea class="form-control" id="contents" name="contents" style="min-height:15em"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">送信する</button>
            </div>
        </form>
    </div>
</div>


@endsection
@section("script")
    <script>
        function showModal() {
            $('#password_modal').modal({
                centered: false
            }).modal('show');
        }

        function closeModal() {
            $('#password_modal').modal('hide');
        }

        // const dropdowns = document.querySelectorAll('.dropdown');

        // dropdowns.forEach((dropdown) => {
        //     const menu = dropdown.querySelector('.dropdown-menu');

        //     dropdown.addEventListener('mouseenter', () => {
        //         menu.style.display = 'block';
        //     });

        //     dropdown.addEventListener('mouseleave', () => {
        //         menu.style.display = 'none';
        //     });
        // });
    </script>
@endsection
