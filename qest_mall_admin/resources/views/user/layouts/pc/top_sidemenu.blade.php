        {{-- Left Menu --}}
        <div class="left-menu">
            {{-- 広告 --}}
            <aside class="ad-box">
                <a href="{{ $ads[AdTypeConst::TOP_RECTANGLE]->url }}">
                    <img class="img ad-img" src="{{ asset($ads[AdTypeConst::TOP_RECTANGLE]->image->url) }}">
                </a>
            </aside>

            <div class="left-menu-search-box">
                @include('user.layouts.pc.components.sidemenu.item_category')

                @include('user.layouts.pc.components.sidemenu.life_scene')

                @include('user.layouts.pc.components.sidemenu.shop_brand')
            </div>

            {{-- 広告 --}}
            <aside class="ad-box bottom-ad-container">
                <div class="bottom-ad-box">
                    <a href="{{ $ads[AdTypeConst::BOTTOM_RECTANGLE_UPPER]->url }}">
                        <img class="img ad-img" src="{{ asset($ads[AdTypeConst::BOTTOM_RECTANGLE_UPPER]->image->url) }}">
                    </a>
                </div>
                <div class="bottom-ad-box">
                    <a href="{{ $ads[AdTypeConst::BOTTOM_RECTANGLE_MIDDLE]->url }}">
                        <img class="img ad-img" src="{{ asset($ads[AdTypeConst::BOTTOM_RECTANGLE_MIDDLE]->image->url) }}">
                    </a>
                </div>
                <div class="bottom-ad-box">
                    <a href="{{ $ads[AdTypeConst::BOTTOM_RECTANGLE_LOWER]->url }}">
                        <img class="img ad-img" src="{{ asset($ads[AdTypeConst::BOTTOM_RECTANGLE_LOWER]->image->url) }}">
                    </a>
                </div>
            </aside>
        </div>
