
@extends("layout")
@component('admin.layouts.header')
@endcomponent
@section('content')
<style>
.toggle_switch {
    display: table;
    font-size: 30px;
}

.toggle_switch > input {
    display: none;
}

.toggle_switch > label {
    display: block;
    position: relative;
    width: 1.8em;
    height: 1em;
    border-radius: 1em;
    background-color: #2b2a2f;
    cursor: pointer;
}
.toggle_switch > input:checked + label {
    background-color: #2dcb45;
}
.toggle_switch > label::before {
    position: absolute;
    top: 0.05em;
    left: 0.05em;
    width: calc(1em - 0.1em);
    height: calc(1em - 0.1em);
    border-radius: calc(1em - 0.1em);
    background-color: #fff;
    transition: 0.5s;
    content: "";
}
.toggle_switch > input:checked + label::before {
    left: calc(100% - 1em + 0.05em);
}
</style>

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

<div style="width:100px;height:100px;" class="s"></div>

<div class="toggle_switch">
    <input type="checkbox" name="xxx" id="cb_toggle_switch">
    <label for="cb_toggle_switch"></label>
</div>
@endsection