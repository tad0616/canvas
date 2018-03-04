<?php
$db = new mysqli('localhost', 'root', 'happy', 'test');
$db->set_charset("utf8");
$sn         = $db->real_escape_string($_GET['sn']);
$sql        = "SELECT `content` FROM `canvas` where `sn`='{$sn}'";
$result     = $db->query($sql) or die($db->error);
list($data) = $result->fetch_row();
echo "<img src='data:image/png;base64," . $data . "'>";

$sql    = "SELECT * FROM `canvas` order by `sn`";
$result = $db->query($sql) or die($db->error);
while (list($sn, $type, $content) = $result->fetch_row()) {
    echo "
    <div>
        <a href='show.php?sn=$sn'>
        <img src='data:image/png;base64," . $content . "' style='width: 200px; border:1px solid gray;'>
        </a>
    </div>";
}

echo '<a href="index.html">回首頁</a>';
