<?php

if (!isset($_GET['message'])) {
	exit;
}

$voice = isset($_GET['voice']) ? $_GET['voice'] : 'whisper';


$message = urldecode($_GET['message']);
$message = preg_replace('/[^\w\s\d-+]/', '', $message);
$message = str_replace('-', ' ', $message);

exec(sprintf('say -v %s %s', $voice, $message));

printf('Said "%s" using "%s" voice', $message, $voice)."\n";