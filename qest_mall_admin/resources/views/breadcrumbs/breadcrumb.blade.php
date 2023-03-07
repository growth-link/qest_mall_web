<style>
    .breadcrumb {
        display: flex;
        margin: 14px 15px;
        padding: 0;
        white-space: nowrap;
    }
    .breadcrumb-item {
        list-style: none;
        color: #6C6C6C;
        font-size: 14px;
    }
    .breadcrumb-item  a{
        color: #6C6C6C;
    }
    .breadcrumb-partition {
        margin: 0 8px;
    }
</style>

@unless ($breadcrumbs->isEmpty())
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active"><span class="breadcrumb-partition">＞</span>{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ol>
@endunless
