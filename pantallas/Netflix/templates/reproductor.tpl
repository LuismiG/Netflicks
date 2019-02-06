<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Información</title>
</head>

<body>
    <div>
        <video id="video" width="1280" height="720" controls="controls" preload="none" poster="carteles/{$video->cartel}" controlsList="nodownload">
            <source src="video.php?v={$video->video}" type="video/mp4" />
            Tu navegador no soporta vídeos.
        </video>
    </div>
    
</body>

</html>