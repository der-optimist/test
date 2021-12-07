<?php

function php_func(){
    $IP = 'kodi-wz-2.fritz.box';
    require($_SERVER['DOCUMENT_ROOT']."/phpKodi-api.php");
    $_Kodi = new Kodi($IP);
    if (isset($_Kodi->error)) die($_Kodi->error);

    $_Kodi->openFile("/var/media/Toshiba4T/TVSendungen/2017-05-20 - Lola rennt.mp4");
    }
php_func();
?>
