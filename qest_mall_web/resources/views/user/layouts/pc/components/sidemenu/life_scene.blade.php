                {{-- ライフシーンから探す --}}
                <section class="left-menu-box">
                    <h2 class="menu-title">ライフシーンから探す</h2>
                    <div>
                        @foreach ($sub_categoris as $sub_category)
                            <a href="#">
                                <img class="img life-style-img" src="{{ asset($sub_category->image->url) }}">
                            </a>
                        @endforeach
                    </div>
                </section>
