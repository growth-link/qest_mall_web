<div id="{{ $overlay_id }}" class="overlay overlay-component">
    <img class="close" src="/images/user/icon_close.png">
    <h2 class="overlay-title">{{ $title }}</h2>
    <div class="content">
        {{ $slot }}
    </div>
    <div class="overlay-actions">
        <form action={{ $url }} method="post">
            @csrf
            <button type="submit" class="primary_btn_radius">
                {{ $primary_btn }}
            </button>
        </form>
        <button class="deny_btn secondary_btn_radius">
            {{ $secondary_btn }}
        </button>
    </div>
</div>
