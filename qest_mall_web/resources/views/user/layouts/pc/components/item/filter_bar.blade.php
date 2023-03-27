                    <form id="filter_form" class="filter-bar" action={{ route('item_keyword') }} method="get">
                        <select name="sort" id="sort" onchange="submit(this.form)">
                            <option value="recommend" @if($sort == "recommend") selected @endif>おすすめ順</option>
                            <option value="low_price" @if($sort == "low_price") selected @endif>価格の安い順</option>
                            <option value="high_price" @if($sort == "high_price") selected @endif>価格の高い順</option>
                            <option value="start_datetime" @if($sort == "start_datetime") selected @endif>発売日順</option>
                        </select>

                        <input type="hidden" name="category_ids" class="filter"
                        @isset($category_ids) value="{{ $category_ids }}" @endisset>
                        <input type="hidden" name="life_scene_ids" class="filter"
                        @isset($life_scene_ids) value="{{ $life_scene_ids }}" @endisset>
                        <input type="hidden" name="tag_ids" class="filter"
                        @isset($tag_ids) value="{{ $tag_ids }}" @endisset>
                        <input type="hidden" name="start_price" class="filter"
                        @isset($start_price) value="{{ $start_price }}" @endisset>
                        <input type="hidden" name="end_price" class="filter"
                        @isset($end_price) value="{{ $end_price }}" @endisset>
                        <input type="hidden" name="is_postage_free" class="filter"
                        @isset($is_postage_free) value="{{ $is_postage_free }}" @endisset>
                        <input type="hidden" name="is_coupon" class="filter"
                        @isset($is_coupon) value="{{ $is_coupon }}" @endisset>
                        <input type="hidden" name="including_out_of_stock" class="filter"
                        @isset($including_out_of_stock) value="{{ $including_out_of_stock }}" @endisset>
                        <input type="hidden" name="exclude_keyword" class="filter"
                        @isset($exclude_keyword) value="{{ $exclude_keyword }}" @endisset>

                        <!-- モーダル表示 -->
                        <button type="button" onclick="showModal();"><img class="img" src="{{ asset('/images/item/icon_filter.png') }}">絞り込み</button>
                    </form>

                    <div class="ui modal">
                        <img class="close" src="/images/user/icon_modal_close.png">
                        <div class="content">
                            <div class="category-section">
                                <div class="modal-section-title">カテゴリ</div>
                                <div class="flex-box">
                                    <label class="ECM_CheckboxInput">
                                        <input class="ECM_CheckboxInput-Input chg-grand-parent" type="checkbox" id="checkbox_all" name="ostensible_category_ids[]" value="">
                                        <span class="ECM_CheckboxInput-DummyInput"></span>
                                        <span class="ECM_CheckboxInput-LabelText">すべてのカテゴリ</span>
                                    </label>
                                </div>

                                @foreach ($major_categories as $major_category)
                                <div class="major-category-box">
                                    <div class="nav-open flex-box">
                                        <label class="ECM_CheckboxInput">
                                            <input class="ECM_CheckboxInput-Input chg-parent" type="checkbox" id="checkbox_major_category" name="ostensible_category_ids[]" value="{{ $major_category->id }}">
                                            <span class="ECM_CheckboxInput-DummyInput"></span>
                                            <span class="ECM_CheckboxInput-LabelText">すべての{{ $major_category->category_name }}</span>
                                        </label>
                                        <div class="nav-switch"></div>
                                    </div>
                                    <nav class="accordion-nav">
                                        <ul class="flex-box">
                                            @foreach ($major_category->categories as $middle_category)
                                                <div class="middle-category-box">
                                                    <li class="flex-box">
                                                        <label class="ECM_CheckboxInput">
                                                            <input class="ECM_CheckboxInput-Input chg-child" type="checkbox" id="checkbox_middle_category" name="ostensible_category_ids[]" value="{{ $middle_category->id }}">
                                                            <span class="ECM_CheckboxInput-DummyInput"></span>
                                                            <span class="ECM_CheckboxInput-LabelText">すべての{{ $middle_category->category_name }}</span>
                                                        </label>
                                                    </li>
                                                    @foreach ($middle_category->categories as $minor_category)
                                                        <li class="flex-box">
                                                            <label class="ECM_CheckboxInput">
                                                                <input class="ECM_CheckboxInput-Input chg-grand-child" type="checkbox" id="checkbox_minor_category" name="ostensible_category_ids[]" value="{{ $minor_category->id }}">
                                                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                                                <span class="ECM_CheckboxInput-LabelText">{{ $minor_category->category_name }}</span>
                                                            </label>
                                                        </li>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                                @endforeach
                            </div>

                            <div>
                                <div class="modal-section-title">ライフシーンから探す</div>
                                <div class="flex-box">
                                    @foreach ($sub_categories as $sub_category)
                                        <label class="ECM_CheckboxInput">
                                            <input class="ECM_CheckboxInput-Input" type="checkbox" name="ostensible_life_scene_ids[]" value="{{ $sub_category->id }}">
                                            <span class="ECM_CheckboxInput-DummyInput"></span>
                                            <span class="ECM_CheckboxInput-LabelText">{{ $sub_category->sub_category_name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>

                            <div>
                                <div class="modal-section-title">タグ</div>
                                <div class="flex-box">
                                    @foreach ($tags as $tag)
                                        <label class="ECM_CheckboxInput">
                                            <input class="ECM_CheckboxInput-Input" type="checkbox" name="ostensible_tag_ids[]" value="{{ $tag->id }}">
                                            <span class="ECM_CheckboxInput-DummyInput"></span>
                                            <span class="ECM_CheckboxInput-LabelText">{{ $tag->tag_name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>

                            <div>
                                <div class="modal-section-title">価格帯</div>
                                <input type="number" name="ostensible_start_price" class="switch_TextInput filter" placeholder="0円"
                                @isset($start_price)
                                    value="{{ $start_price }}"
                                @endisset
                                >
                                <span style="margin:0 10px;">〜</span>
                                <input type="number" name="ostensible_end_price" class="switch_TextInput filter" placeholder="上限なし"
                                @isset($end_price)
                                    value="{{ $end_price }}"
                                @endisset
                                >
                            </div>

                            <div>
                                <div class="switch-input flex-box">
                                    <label class="switch_LabelText">送料無料</label>
                                        <div class="toggle_switch">
                                            <input type="checkbox" name="ostensible_is_postage_free" id="is_postage_free_switch" class="switch_button"
                                            @isset($is_postage_free)
                                                @if($is_postage_free == "on")
                                                    checked
                                                @endif
                                            @endisset
                                            >
                                            <label for="is_postage_free_switch"></label>
                                        </div>
                                </div>
                                <div class="switch-input flex-box">
                                    <label class="switch_LabelText">クーポン対象</label>
                                        <div class="toggle_switch">
                                            <input type="checkbox" name="ostensible_is_coupon" id="is_coupon_switch" class="switch_button"
                                            @isset($is_coupon)
                                                @if($is_coupon == "on")
                                                    checked
                                                @endif
                                            @endisset
                                            >
                                            <label for="is_coupon_switch"></label>
                                        </div>
                                </div>
                                <div class="switch-input flex-box">
                                    <label class="switch_LabelText">在庫なしを含む</label>
                                    <div class="toggle_switch">
                                        <input type="checkbox" name="ostensible_including_out_of_stock" id="including_out_of_stock_switch" class="switch_button"
                                        @isset($including_out_of_stock)
                                            @if($including_out_of_stock == "on")
                                                checked
                                            @endif
                                        @endisset
                                        >
                                        <label for="including_out_of_stock_switch"></label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="modal-section-title">除外キーワード</div>
                                <input type="text" name="ostensible_exclude_keyword" class="switch_TextInput filter" placeholder="指定なし" style="width:50%;"
                                @isset($exclude_keyword)
                                    value="{{ $exclude_keyword }}"
                                @endisset
                                >
                            </div>
                        </div>

                        <div class="actions">
                            <div class="ui button clear-button">
                                クリア
                            </div>
                            <button type="submit" class="ui button search-button" form="filter_form">
                                この条件で検索する
                            </button>
                        </div>
                    </div>
