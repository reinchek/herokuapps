<?php

	// Load composer
 	require __DIR__ . '/vendor/autoload.php';

	$API_KEY  = '';
	$BOT_NAME = '';
	$hook_url = 'https://reinbot.herokuapp.com';
	try {
		$telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

	}

	echo 'lota';

?>
