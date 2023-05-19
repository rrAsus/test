<?php 
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {echo('\nMSIE');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE){echo('\nTrident');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE){echo('\nFirefox');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE){echo('\nChrome');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE){echo('\nOpera Mini');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE){echo('\nOpera');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE){echo('\nSafari');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== FALSE){echo('\nMozilla');} // so our script or anything isn't viewable by google and all these browsers
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
fwrite($fh, ''."".$ip ."\n");
 $keys = array("XeFrWXKjNkUrKJo","OF3kwVq8rJ87jOU","lyrRr1LhIjsXNFQ","o9o3ABQ2hy1vkQX","bWTixpRiSq6V3WB","VtQC0KuH9rPkOmJ","an1C8PEw8wFCOuD","L4ktAOL1BZHg0Fm","N2iobzyNld4g0GT","BgYaQ2yHQJUcaBU"); // these are all our keys, you can add more just add , after each.
 $sub = $_GET["key"];
 if (in_array($sub,$keys,TRUE)) {
   echo "Player's Whitelisted"; // when the key gets accepted the checker will return Whitelisted!
 } else {
   echo "Player's Not Whitelisted"; // else it will return not whitelisted
 }
?>