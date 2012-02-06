<?php
    $file = file_get_contents("http://www.181.fm/station_playing/181-themix.html");
    echo $file;
?>
<script type="text/javascript">
var trackinfo = document.getElementsByTagName('font')[2].innerHTML;
var trackInfoRaw = trackinfo.split(/\s\-\s/);
var artist = trackInfoRaw[0];
var trackName = trackInfoRaw[1];
window.parent.document.getElementById('artist').innerHTML = artist;
window.parent.document.getElementById('trackName').innerHTML = trackName;      
</script>