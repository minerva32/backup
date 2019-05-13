<?php

        header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

        $db = new mysqli("localhost","slowwave","tndustkfkd12","graffiti_db");
        $db->set_charset("utf8");

        function mq($sql)
        {
                global $db;
                return $db->query($sql);
        }


$sql = mq("select id, score from userinfo where score DESC");
$data = $sql->fetch_row();

echo "$data[0]";
echo "$data[1]";
echo "hi";
?>
