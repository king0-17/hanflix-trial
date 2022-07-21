<!-- Video Player -->
<html>
<head>
  <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
</head>

<link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet">
<link href="https://unpkg.com/silvermine-videojs-quality-selector@1.1.2/dist/css/quality-selector.css" rel="stylesheet">

<script src="https://unpkg.com/video.js@7/dist/video.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-quality-levels/2.0.9/videojs-contrib-quality-levels.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/videojs-hls-quality-selector@1.1.1/dist/videojs-hls-quality-selector.min.js"></script>



<video id="videojs" class="video-js vjs-fluid vjs-default-skin vjs-big-play-centered" controls preload="auto" autoplay muted fluid="true" liveui="true">

    <source src="https://hanflix-moviee.s3.ap-southeast-2.amazonaws.com/A+Day+To+Die+(2022)+%5B1080p%5D+%5BBluRay%5D+%5B5.1%5D+%5BYTS.MX%5D/output/A.Day.To.Die.2022.1080p.BluRay.x264.AAC5.1-%5BYTS.MX%5D.m3u8" type="application/x-mpegURL">
	<track kind="captions" label="English" srclang="en" src="subtitle/fireheart-eng.vtt"
                    default>
                <track kind="captions" label="Arabic" srclang="fr" src="subtitle/fireheart-arab.vtt">
				<track kind="captions" label="Indonesian" srclang="in" src="subtitle/fireheart-indo.vtt">

</video>

<script type="text/javascript">
var player = videojs('videojs');
player.hlsQualitySelector();
</script>

<!-- End of Video Player -->