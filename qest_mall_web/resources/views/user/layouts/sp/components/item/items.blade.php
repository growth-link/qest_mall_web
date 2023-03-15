                        @foreach ($items as $item)
                        <div class="item-box">
                            <a href="{{ route('sp.items_detail', $item->id) }}">
                                <div class="item-img">
                                    @empty($item->is_sumbnail_image->image_url)
                                        <img class="img" src="{{ asset('/images/item/no_image_logo.png') }}">
                                    @else
                                        <img class="img" src="{{ asset($item->is_sumbnail_image->image_url) }}">
                                    @endempty
                                </div>
                            </a>
                            <div class="slider-text">
                                <div class="shop-name">
                                    <a href="{{ route('sp.shop', $item->shop_id) }}">
                                        {{ $item->shop->shop_name }}
                                    </a>
                                </div>
                                <div class="item-name">
                                    <p>{{ $item->name }}</p>
                                </div>
                                <div class="price">
                                    <p>{{ number_format($item->normal_price) }}円
                                        @if ($item->is_postage_free == true)
                                            <span class="free-shipping">&nbsp;&nbsp;送料無料</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
