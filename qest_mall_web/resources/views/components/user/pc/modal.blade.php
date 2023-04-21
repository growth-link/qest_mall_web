<div class="ui modal modal-component">
    <h2 class="modal-title">{{ $title }}</h2>
    <img class="close" src="/images/user/icon_modal_close.png">
    <div class="content">
        {{ $slot }}
    </div>
    <div class="actions">
        <form action={{ $url }} method="post">
            @csrf
            <button type="submit" class="ui button primary_btn_radius">
                {{ $primary_btn }}
            </button>
        </form>
        <button class="ui button deny secondary_btn_radius">
            {{ $secondary_btn }}
        </button>
    </div>
</div>
