                {{-- ライフシーンから探す --}}
                <section class="left-menu-box">
                    <h2 class="menu-title">ライフシーンから探す</h2>
                    <div class="life-scene-container">
                        @foreach ($sub_categories as $sub_category)
                            <a href="{{ route('flag_category', $sub_category) }}">
                                <img class="img life-scene-img" src="{{ asset($sub_category->image->url) }}">
                            </a>
                        @endforeach
                    </div>
                </section>
