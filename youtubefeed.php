<?php
function get_latest_video($channel, $width, $height)
{
$url = "https://www.youtube.com/feeds/videos.xml?channel_id=".$channel;
$xml = simplexml_load_file($url);
$clearLink = $xml->entry->id;
$link = explode(":", $clearLink);
         
         //if a video was found
         if($xml)
         {
                 //generate the code required to embed the video.
                 $embedCode = '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.$link[2].'" frameborder="0" allowfullscreen></iframe>';
                 //echo the embed code
                 echo $embedCode;
         }
         else
         {
                 echo 'Video not found';
         }
}
?>
