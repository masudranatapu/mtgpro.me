<div class="col-4 mb-2">
    <div class="sicon_{{ $icon->id }} @if($icon->status == 0) deactivate @endif"
        style="">
        <a class="social_link" href="{{ makeUrl($icon->content) }}"
            target="_blank">
            <img style="background:{{ $icon->icon_color  }}" data-bg="{{ $icon->icon_color }}"
                src="{{ getIcon($icon->icon_image) }}"
                alt="{{ $icon->icon }}" class="social_logo">
            <span class="icon_label">{{ $icon->label }}</span>
        </a>
    </div>
</div>
