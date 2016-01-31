<?php
require_once youtubefeed.php;
?>

<html>
 <head>
 <meta charset="utf-8" />
 </head>
 
 <body>
  <center>
    <h1>Here you page design</h1>
    <p><?php //Set up your channel name and config width and height
        get_latest_video('UCh0tvxFxYrPrYI0dKf0RqsA', '230', '170');
        ?>
    </p>
  </center>
  </body>
</html>
