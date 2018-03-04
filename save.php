<?php
$db = new mysqli('localhost', 'root', 'happy', 'test');
if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
}
$db->set_charset("utf8");
$type    = $db->real_escape_string($_POST['sig'][0]);
$content = $db->real_escape_string($_POST['sig'][1]);
$sql     = "INSERT INTO `canvas` ( `type`, `content`) VALUES ('{$type}', '{$content}')";
$db->query($sql) or die($db->error);
$sn = $db->insert_id;
echo $sn;
