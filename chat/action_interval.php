<?php
$db = mysql_connect("localhost", "admin_rchat", "rchat1011");
mysql_select_db( "admin_rchat", $db );

$id = $_POST['id'];

$result = mysql_query( "SELECT * FROM ajax_chat WHERE id > '" . $id . "'", $db );

if(mysql_num_rows($result) > 0) {

	$arr = mysql_fetch_assoc($result);
	
	do {
	
		//printf('<li id="%s">%s</li>',$arr['id'],$arr['text']);
		echo '<li id="'.$arr['id'].'">'.$arr['text'].'</li>';
		
	} while($arr = mysql_fetch_assoc($result));
	
} else {

	echo 1;
	
}

?>