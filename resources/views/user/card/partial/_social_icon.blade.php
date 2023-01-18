<?php
?>
<div class="single_list media position-relative sicon_single_list_{{ $icon->id }}">
    <a href="javascript:void(0)" class="editLink" data-id="{{ $icon->id }}">
        <div class="drag_drap">
            <img src="{{ asset('assets/img/icon/bar-2.svg') }}" alt="icon">
        </div>
        <div class="social_media_name">
            <img src="{{ getIcon($icon->icon_image) }}" style="background: {{ $icon->icon_color }}" alt="{{ $icon->icon }}">

            <span>{{ $icon->label }}</span>
        </div>
    </a>
    <div class="media_btn float-right">
        <div class="custom-control custom-switch d-inline">
            <input type="checkbox" class="custom-control-input sicon_control" id="{{ $icon->icon.'_'.$icon->id }}" value="{{ $icon->id }}" {{ $icon->status == 1 ? 'checked' : '' }} >
            <label class="custom-control-label" for="{{ $icon->icon.'_'.$icon->id }}"></label>
        </div>
    </div>
</div>
