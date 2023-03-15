                <form id="filter_form" class="filter-bar" action={{ route('sp.item_keyword') }} method="get">
                    <select name="sort" id="sort" onchange="submit(this.form)">
                        <option value="recommend" @if($sort == "recommend") selected @endif>おすすめ順</option>
                        <option value="low_price" @if($sort == "low_price") selected @endif>価格の安い順</option>
                        <option value="high_price" @if($sort == "high_price") selected @endif>価格の高い順</option>
                        <option value="start_datetime" @if($sort == "start_datetime") selected @endif>発売日順</option>
                    </select>

                    <!-- モーダル表示 -->
                    <button type="button" class="open-filter"><img class="img" src="{{ asset('/images/item/icon_filter.png') }}">絞り込み</button>

                    <!-- 絞り込み -->
                    <div id="overlay_filter" class="overlay">
                        <img class="close" src="/images/user/icon_close.png">

                        <nav>
                            <ul>
                                <li class="search-container">
                                    <div class="search-box">
                                        <input type="text" name="keyword" class="filter" placeholder="キーワード検索">
                                    </div>
                                </li>

                                <li class="open-major-category">
                                    <p>カテゴリ</p>
                                    <div class="next-page">
                                        @isset($category)
                                            <div class="next-page-title seleted-category selected">{{ $category->category_name }}</div>
                                        @else
                                            <div class="next-page-title seleted-category">すべてのカテゴリ</div>
                                        @endisset
                                        <input type="hidden" name="category_id"
                                        @isset($category)
                                            value="{{ $category->id }}"
                                        @endisset
                                        class="filter">
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>
                                <li class="open-life-scene">
                                    <p>ライフシーンから探す</p>
                                    <div class="next-page">
                                        @isset($life_scene)
                                            <div class="next-page-title seleted-life-scene selected">{{ $life_scene->sub_category_name }}</div>
                                        @else
                                            <div class="next-page-title seleted-life-scene"></div>
                                        @endisset
                                        <input type="hidden" name="life_scene_id"
                                        @isset($life_scene)
                                            value="{{ $life_scene->id }}"
                                        @endisset
                                        >
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>
                                <li class="open-tag">
                                    <p>タグ</p>
                                    <div class="next-page">
                                        <div class="next-page-title seleted-tag">すべてのタグ</div>
                                        <input type="hidden" name="tag_id"
                                        @isset($tag_id)
                                            value="{{ $tag_id }}"
                                        @endisset
                                        >
                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                    </div>
                                </li>

                                <li class="text-input">
                                    <div class="modal-section-title">価格帯</div>
                                    <input type="number" name="start_price" class="switch_TextInput filter" placeholder="0円"
                                    @isset($start_price)
                                        value="{{ $start_price }}"
                                    @endisset
                                    >
                                    <span style="margin:0 10px;">〜</span>
                                    <input type="number" name="end_price" class="switch_TextInput filter" placeholder="上限なし"
                                    @isset($end_price)
                                        value="{{ $end_price }}"
                                    @endisset
                                    >
                                </li>

                                <li class="switch-input flex-box">
                                    <label class="switch_LabelText">送料無料</label>
                                        <div class="toggle_switch">
                                            <input type="checkbox" name="is_postage_free" id="is_postage_free_switch" class="switch_button"
                                            @isset($is_postage_free)
                                                @if($is_postage_free = "on")
                                                checked
                                                @endif
                                            @endisset
                                            >
                                            <label for="is_postage_free_switch"></label>
                                        </div>
                                </li>
                                <li class="switch-input flex-box">
                                    <label class="switch_LabelText">クーポン対象</label>
                                        <div class="toggle_switch">
                                            <input type="checkbox" name="is_coupon" id="is_coupon_switch" class="switch_button"
                                            @isset($is_coupon)
                                                @if($is_coupon = "on")
                                                checked
                                                @endif
                                            @endisset
                                            >
                                            <label for="is_coupon_switch"></label>
                                        </div>
                                </li>
                                <li class="switch-input flex-box">
                                    <label class="switch_LabelText">在庫なしを含む</label>
                                    <div class="toggle_switch">
                                        <input type="checkbox" name="including_out_of_stock" id="including_out_of_stock_switch" class="switch_button"
                                        @isset($including_out_of_stock)
                                            @if($including_out_of_stock = "on")
                                            checked
                                            @endif
                                        @endisset
                                        >
                                        <label for="including_out_of_stock_switch"></label>
                                    </div>
                                </li>

                                <li class="text-input">
                                    <div class="modal-section-title">除外キーワード</div>
                                    <input type="text" name="exclude_keyword" class="switch_TextInput filter" placeholder="指定なし"
                                    @isset($exclude_keyword)
                                        value="{{ $exclude_keyword }}"
                                    @endisset
                                    >
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- カテゴリから探す(大カテゴリ) -->
                    <div id="overlay_major_category" class="overlay">
                        <div class="prev-page">
                            <img src="/images/user/icon_arrow_left.png">
                            <p>戻る</p>
                        </div>
                        <img class="close" src="/images/user/icon_close.png">

                        <nav>
                            <ul>
                                <li class="add-category" data-category-id="" data-category-name="すべてのカテゴリ">
                                    <p>すべてのカテゴリ</p>
                                </li>
                                @foreach ($major_categories as $major_category)
                                    <li class="open-middle-category" data-category-id="{{ $major_category->id }}" data-category-name="{{ $major_category->category_name }}">
                                        <p>{{ $major_category->category_name }}</p>
                                        <div class="next-page">
                                            <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                    <!-- カテゴリから探す(中カテゴリ) -->
                    @foreach ($major_categories as $major_category)
                        <div id="overlay_middle_category{{ $major_category->id }}" class="overlay">
                            <div class="prev-page">
                                <img src="/images/user/icon_arrow_left.png">
                                <p>カテゴリ一覧</p>
                            </div>
                            <img class="close" src="/images/user/icon_close.png">

                            <nav>
                                <ul>
                                    <li class="add-category" data-category-id="{{ $major_category->id }}" data-category-name="すべての{{ $major_category->category_name }}">
                                        <p>すべての{{ $major_category->category_name }}</p>
                                    </li>
                                    @foreach ($major_category->categories as $middle_category)
                                        <li class="open-minor-category" data-category-id="{{ $middle_category->id }}" data-category-name="{{ $middle_category->category_name }}">
                                            <p>{{ $middle_category->category_name }}</p>
                                            <div class="next-page">
                                                <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    @endforeach

                    <!-- カテゴリから探す(小カテゴリ) -->
                    @foreach ($major_categories as $major_category)
                        @foreach ($major_category->categories as $middle_category)
                            <div id="overlay_minor_category{{ $middle_category->id }}" class="overlay">
                                <div class="prev-page" data-parent-id="{{ $middle_category->parent_id }}">
                                    <img src="/images/user/icon_arrow_left.png">
                                    <p class="parent-category-name"></p>
                                </div>
                                <img class="close" src="/images/user/icon_close.png">

                                <nav>
                                    <ul>
                                        <li class="add-category" data-category-id="{{ $middle_category->id }}" data-category-name="すべての{{ $middle_category->category_name }}">
                                            <p>すべての{{ $middle_category->category_name }}</p>
                                        </li>
                                        @foreach ($middle_category->categories as $minor_category)
                                            @if ($minor_category->categories->count() > 0)
                                                <li class="open-quaternary-category" data-category-id="{{ $minor_category->id }}" data-category-name="{{ $minor_category->category_name }}">
                                                    <p>{{ $minor_category->category_name }}</p>
                                                    <div class="next-page">
                                                        <img class="icon-arrow-right" src="/images/user/icon_arrow_right.png">
                                                    </div>
                                                </li>
                                            @else
                                                <li class="add-category" data-category-id="{{ $minor_category->id }}" data-category-name="{{ $minor_category->category_name }}">
                                                    <p>{{ $minor_category->category_name }}</p>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        @endforeach
                    @endforeach

                    <!-- カテゴリから探す(細カテゴリ) -->
                    @foreach ($major_categories as $major_category)
                        @foreach ($major_category->categories as $middle_category)
                            @foreach ($middle_category->categories as $minor_category)
                                <div id="overlay_quaternary_category{{ $minor_category->id }}" class="overlay">
                                    <div class="prev-page" data-parent-id="{{ $minor_category->parent_id }}">
                                        <img src="/images/user/icon_arrow_left.png">
                                        <p class="parent-category-name"></p>
                                    </div>
                                    <img class="close" src="/images/user/icon_close.png">

                                    <nav>
                                        <ul>
                                            <li class="add-category" data-category-id="{{ $minor_category->id }}" data-category-name="すべての{{ $minor_category->category_name }}">
                                                <p>すべての{{ $minor_category->category_name }}</p>
                                            </li>
                                            @foreach ($minor_category->categories as $quaternary_category)
                                                <li class="add-category" data-category-id="{{ $quaternary_category->id }}" data-category-name="{{ $quaternary_category->category_name }}">
                                                    <p>{{ $quaternary_category->category_name }}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            @endforeach
                        @endforeach
                    @endforeach

                    <!-- LIFE SCENEから探す -->
                    <div id="overlay_life_scene" class="overlay">
                        <div class="prev-page">
                            <img src="/images/user/icon_arrow_left.png">
                            <p>戻る</p>
                        </div>
                        <img class="close" src="/images/user/icon_close.png">

                        <nav>
                            <ul>
                                @foreach ($sub_categories as $sub_category)
                                    <li class="flex-box">
                                        <label class="ECM_CheckboxInput">
                                            <input name="sub_categories[]" value="{{ $sub_category->id }}" class="ECM_CheckboxInput-Input" type="checkbox" data-life-scene-name="{{ $sub_category->sub_category_name }}">
                                            <span class="ECM_CheckboxInput-DummyInput"></span>
                                            <span class="ECM_CheckboxInput-LabelText">{{ $sub_category->sub_category_name }}</span>
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                    <!-- タグから探す -->
                    <div id="overlay_tag" class="overlay">
                        <div class="prev-page">
                            <img src="/images/user/icon_arrow_left.png">
                            <p>戻る</p>
                        </div>
                        <img class="close" src="/images/user/icon_close.png">

                        <nav>
                            <ul>
                                <li class="flex-box">
                                    <label class="ECM_CheckboxInput">
                                        <input name="tags[]" value="" class="ECM_CheckboxInput-Input all-tag" type="checkbox" data-tag-name="すべてのタグ" checked>
                                        <span class="ECM_CheckboxInput-DummyInput"></span>
                                        <span class="ECM_CheckboxInput-LabelText">すべてのタグ</span>
                                    </label>
                                </li>
                                @foreach ($tags as $tag)
                                    <li class="flex-box">
                                        <label class="ECM_CheckboxInput">
                                            <input name="tags[]" value="{{ $tag->id }}" class="ECM_CheckboxInput-Input child-tag" type="checkbox" data-tag-name="{{ $tag->tag_name }}" checked>
                                            <span class="ECM_CheckboxInput-DummyInput"></span>
                                            <span class="ECM_CheckboxInput-LabelText">{{ $tag->tag_name }}</span>
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                    <div class="actions search-actions">
                        <nav>
                            <button type="button" id="all-clear" class="ui button clear-button">
                                クリア
                            </button>
                            <button type="submit" class="ui button search-button">
                                この条件で検索する
                            </button>
                        </nav>
                    </div>

                    <div class="actions add-actions life-scene-actions">
                        <nav>
                            <button type="button" id="life-scene-clear" class="ui button clear-button">
                                クリア
                            </button>
                            <button type="button" class="ui button add-button add-life-scene">
                                上の条件を追加する
                            </button>
                        </nav>
                    </div>

                    <div class="actions add-actions tag-actions">
                        <nav>
                            <button type="button" id="tag-clear" class="ui button clear-button">
                                クリア
                            </button>
                            <button type="button" class="ui button add-button add-tag">
                                上の条件を追加する
                            </button>
                        </nav>
                    </div>
                </form>

