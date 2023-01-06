@extends("layout")
@component('admin.layouts.header')
@endcomponent
@section('content')
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
<div class="ui modal">
    <i class="close icon"></i>
    <div class="header">
      Profile Picture
    </div>
    <div class="image content">
      <div class="ui medium image">
        {{-- <img src="/images/avatar/large/chris.jpg"> --}}
      </div>
      <div class="description">
        <div class="ui header">We've auto-chosen a profile image for you.</div>
        <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
        <p>Is it okay to use this photo?</p>
      </div>
    </div>
    <div class="actions">
      <div class="ui black deny button">
        Nope
      </div>
      <div class="ui positive right labeled icon button">
        Yep, that's me
        <i class="checkmark icon"></i>
      </div>
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


@endsection
@section("script")
    <script>
        function showModal() {
            $('.modal').modal({
                centered: false
            }).modal('show');
        }
    </script>
@endsection