<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <link rel="icon" href="images/gg.png" type="image/gif" sizes="16x16">
	<title>Livestream 2</title>

    <!-- CSS -->
    <link href="css/livestream.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="col">
            <div id="banner">
                <div class="logo" id="logo" >
                    <a href="{{ url ('home') }}">
                        <img src="images/gg.png" alt="logo" width="50px" height="50px">
                    </a>
                </div>
            </div>

            <video-js id='hanflix' class="vjs-default-skin" controls>
                <source 
                    src="http://alpharlive.mmdlive.lldns.net/alpharlive/55bbc1d8a2a64f6f89a7921fc23704a2/manifest.m3u8?p=36&h=c68a6b9a919ee84911ffad55c54458ff"
                    type="application/x-mpegURL">
                </source>
            </video-js>

            <script src="https://unpkg.com/video.js/dist/video.js"></script>
            <script src="https://unpkg.com/videojs-contrib-quality-levels@2.1.0/dist/videojs-contrib-quality-levels.js"></script>
            <script src="https://unpkg.com/videojs-http-source-selector/dist/videojs-http-source-selector.js"></script>


            <div id="buttonss">
                <a href="{{ url('livestream') }}" class="previous round">&#8249;</a>
                <a href="{{ url('livestream2') }}" class="next round">&#8250;</a>
            </div>

        </div>
    </div>

    <script>
            var options = {
                plugins: {
                httpSourceSelector:
            {
            default: 'auto'
             }
          }
      };
            var player = videojs('hanflix', options);
            player.httpSourceSelector();
             var player = videojs('hanflix', {autoplay: true});
        // videojs('hanflix', {autoplay: true});
        player.autoplay('hanflix');
    </script> 

</body>
</html>
