                <form class="filter-bar" action={{ route('sp.item_keyword') }} method="get">
                    <select name="sort" id="sort" onchange="submit(this.form)">
                        <option value="recommend" @if($sort == "recommend") selected @endif>おすすめ順</option>
                        <option value="low_price" @if($sort == "low_price") selected @endif>価格の安い順</option>
                        <option value="high_price" @if($sort == "high_price") selected @endif>価格の高い順</option>
                        <option value="start_datetime" @if($sort == "start_datetime") selected @endif>発売日順</option>
                    </select>

                    <!-- モーダル表示 -->
                    <button type="button" class="open-filter"><img class="img" src="{{ asset('/images/item/icon_filter.png') }}">絞り込み</button>

                    <!-- 絞り込み -->
                    @include('user.layouts.sp.components.item.overlay_filter')
                </form>

