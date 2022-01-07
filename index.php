<?php 
$token = "5089228115:AAEYxlpIzTTWJGcjqJZmOnB3YdaXLZY9Rec";
$link1 = "https://api.telegram.org/bot".$token;

$updates = file_get_contents('php://input');
$updates = json_decode($updates, TRUE);

$msgID = $updates['message']['chat']['id'];
$name = $updates['message']['chat']['first_name'];
$text = $updates['message']['text'];

switch ($text) {
	case"start":
		sendmsg($msgID, "Welcome $name");
		break;
	case"bye":
	sendmsg($msgID, "Nice To See You");
	sendmsg($msgID, "\xF0\x9F\x98\x98");
	break;
	
}
function sendmsg($msgID, $text)
{
	$url = $GLOBALS[link1].'/sendMessage?chat_id='.$msgID.'&text='.urlencode($text);
	file_get_contents($url);
}
?>
