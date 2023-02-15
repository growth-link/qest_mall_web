                {{-- ショップ・ブランド検索 --}}
                <section class="left-menu-box shop-brand-search">
                    <h2 class="menu-title">ショップ・ブランド</h2>
                    <div class="search-container">
                        <form class="ui search search-container-form" action={{ route('shop_brand_search') }}  method="post">
                            @csrf
                            <div class="ui input">
                                <input class="prompt" type="text" name="shop_brand_name">
                            </div>
                            <div class="results"></div>
                            <button>検索</button>
                        </form>
                    </div>
                    <div class="shop-brand-link">
                        <a href="{{ route('shops') }}">ショップ一覧へ</a>
                    </div>
                    <div class="shop-brand-link">
                        <a href="{{ route('brands') }}">ブランド一覧へ</a>
                    </div>
                </section>
