                {{-- Life Scene --}}
                <section class="main-content-box life-scene">
                    <h2 class="section-title">LIFE SCENE</h2>
                    <div class="life-scene-container">
                        @foreach ($sub_categories as $sub_category)
                            <div class="life-scene-box">
                                <a href="{{ route('sp.flag_category', $sub_category) }}">
                                    <img class="img life-scene-img" src="{{ asset($sub_category->icon_url) }}">
                                </a>
                                <p class="life-scene-title">{{ $sub_category->sub_category_name }}</p>
                            </div>
                        @endforeach
                    </div>
                </section>
