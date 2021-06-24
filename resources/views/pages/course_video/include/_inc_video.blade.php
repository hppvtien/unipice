@if($video->cv_path)
    <video width="100%" height="auto" controls autoplay>
        <source src="{{ pare_url_file_video($video->cv_path,'storage/uploads_video') }}" type="video/mp4">
    </video>
@else
<iframe src="https://www.youtube.com/embed/<?php echo $video->cv_link; ?>" frameborder="0" allowfullscreen></iframe>
@endif
