                    <div class="filter-bar">
                        <select name="sort" id="sort" onchange="location.href='?sort=' + (this.value)">
                            <option value="recommend" @if($sort == "recommend") selected @endif>おすすめ順</option>
                            <option value="low_price" @if($sort == "low_price") selected @endif>価格の安い順</option>
                            <option value="high_price" @if($sort == "high_price") selected @endif>価格の高い順</option>
                            <option value="start_datetime" @if($sort == "start_datetime") selected @endif>発売日順</option>
                        </select>

                        <!-- モーダル表示 -->
                        <button onclick="showModal();"><img class="img" src="{{ asset('/images/item/icon_filter.png') }}">絞り込み</button>
                        <form class="ui modal" action={{ route('item_keyword') }} method="post">
                            @csrf
                            <img class="close" src="/images/user/icon_modal_close.png">
                            <div class="content">
                                <section id="category_section">
                                    <div class="modal-section-title">カテゴリ</div>
                                    <div class="flex-box">
                                        <label class="ECM_CheckboxInput">
                                            <input class="ECM_CheckboxInput-Input" type="checkbox" id="checkbox_all" onclick="chgGrandParent(this);">
                                            <span class="ECM_CheckboxInput-DummyInput"></span>
                                            <span class="ECM_CheckboxInput-LabelText">すべてのカテゴリ</span>
                                        </label>
                                    </div>

                                    @foreach ($major_categories as $major_category)
                                    <div id="major_category">
                                        <div class="nav-open flex-box">
                                            <label class="ECM_CheckboxInput">
                                                <input class="ECM_CheckboxInput-Input" type="checkbox" id="checkbox_major_category" onclick="chgParent(this);">
                                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                                <span class="ECM_CheckboxInput-LabelText">すべての{{ $major_category->category_name }}</span>
                                            </label>
                                        </div>
                                        <nav class="accordion-nav">
                                            <ul class="flex-box">
                                                @foreach ($major_category->categories as $middle_category)
                                                    <div class="middle-category-box">
                                                        <li class="flex-box">
                                                            <label class="ECM_CheckboxInput">
                                                                <input class="ECM_CheckboxInput-Input" type="checkbox" id="checkbox_middle_category" onclick="chgChild(this);">
                                                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                                                <span class="ECM_CheckboxInput-LabelText">すべての{{ $middle_category->category_name }}</span>
                                                            </label>
                                                        </li>
                                                        @foreach ($middle_category->categories as $minor_category)
                                                            <li class="flex-box">
                                                                <label class="ECM_CheckboxInput">
                                                                    <input name="categories[]" value="{{ $minor_category->id }}" class="ECM_CheckboxInput-Input" type="checkbox" id="checkbox_minor_category" onclick="chgGrandChild(this);">
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
                                </section>

                                <section>
                                    <div class="modal-section-title">ライフシーンから探す</div>
                                    <div class="flex-box">
                                        @foreach ($sub_categories as $sub_category)
                                            <label class="ECM_CheckboxInput">
                                                <input class="ECM_CheckboxInput-Input" type="checkbox" name="sub_categories[]" value="{{ $sub_category->id }}">
                                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                                <span class="ECM_CheckboxInput-LabelText">{{ $sub_category->sub_category_name }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </section>

                                <section>
                                    <div class="modal-section-title">タグ</div>
                                    <div class="flex-box">
                                        @foreach ($tags as $tag)
                                            <label class="ECM_CheckboxInput">
                                                <input class="ECM_CheckboxInput-Input" type="checkbox" name="tags[]" value="{{ $tag->id }}">
                                                <span class="ECM_CheckboxInput-DummyInput"></span>
                                                <span class="ECM_CheckboxInput-LabelText">{{ $tag->tag_name }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </section>

                                <section>
                                    <div class="modal-section-title">価格帯</div>
                                    <input type="number" name="start_price" class="switch_TextInput" placeholder="0円">
                                    <span style="margin:0 10px;">〜</span>
                                    <input type="number" name="end_price" class="switch_TextInput" placeholder="上限なし">
                                </section>

                                <section>
                                    <div class="switch-input flex-box">
                                        <label class="switch_LabelText">送料無料</label>
                                            <div class="toggle_switch">
                                                <input type="checkbox" name="is_postage_free" id="is_postage_free_switch">
                                                <label for="is_postage_free_switch"></label>
                                            </div>
                                    </div>
                                    <div class="switch-input flex-box">
                                        <label class="switch_LabelText">クーポン対象</label>
                                            <div class="toggle_switch">
                                                <input type="checkbox" name="is_coupon" id="is_coupon_switch">
                                                <label for="is_coupon_switch"></label>
                                            </div>
                                    </div>
                                    <div class="switch-input flex-box">
                                        <label class="switch_LabelText">在庫なしを含む</label>
                                        <div class="toggle_switch">
                                            <input type="checkbox" name="including_out_of_stock" id="including_out_of_stock_switch">
                                            <label for="including_out_of_stock_switch"></label>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="modal-section-title">除外キーワード</div>
                                    <input type="text" name="exclude_keyword" class="switch_TextInput" placeholder="指定なし" style="width:50%;">
                                </section>
                            </div>
                            <div class="actions">
                                <div class="ui deny button clear-button">
                                    クリア
                                </div>
                                <button type="submit" class="ui button search-button">
                                    この条件で検索する
                                </button>
                            </div>
                        </form>
                    </div>
