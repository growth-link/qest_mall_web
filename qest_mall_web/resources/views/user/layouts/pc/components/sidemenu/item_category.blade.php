                {{-- 商品カテゴリー --}}
                <section class="left-menu-box">
                    <h2 class="menu-title">
                        商品カテゴリ
                        <a href="{{ route('categories') }}" style="float:right;font-size:13px;font-weight:normal;">
                            一覧
                        </a>
                    </h2>

                    <nav>
                        <ul>
                            @foreach ($major_categories as $major_category)
                                <li class="has-child">
                                    <a  href="{{ route('category', $major_category->id) }}" class="category-title">
                                        {{ $major_category->category_name }}
                                    </a>
                                    <div class="sub-menu">
                                        <div class="major-category-name">
                                            {{ $major_category->category_name }}
                                        </div>
                                        <div class="sub-menu-body">
                                            @foreach ($major_category->categories as $middle_category)
                                                <div class="sub-menu-box">
                                                    <div>
                                                        <img class="category-image" src="{{ asset($middle_category->image->url) }}">
                                                    </div>
                                                    <div class="middle-category-name">
                                                        <a href="{{ route('category', $middle_category->id) }}">
                                                            {{ $middle_category->category_name }}
                                                        </a>
                                                    </div>
                                                    <ul class="minor-category">
                                                        @foreach ($middle_category->categories as $minor_category)
                                                        <li class="minor-category-name">
                                                            <a href="{{ route('category', $minor_category->id) }}">
                                                                {{ $minor_category->category_name }}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </section>
