<?php
$db = mysql_connect("localhost","admin_rchat","rchat1011");
mysql_select_db("admin_rchat",$db);

$text = $_POST['text_chat'];
$result = mysql_query("INSERT INTO ajax_chat (text) VALUES ('".$text."')",$db);
