<div class="embed-responsive embed-responsive-16by9">
    <video class="afterglow embed-responsive-item"
           poster="{{ $podcast->thumb_url }}"
           id="myvideo"
           width="1280"
           height="720"
           data-skin="dark"
           src="{{ $podcast->play_url }}"
           preload="auto"
    />
    </video>
</div>