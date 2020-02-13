<?php
	require_once __DIR__ . '/vendor/autoload.php';

	use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;

	$instagram = new InstagramBasicDisplay(array(
		'appId'      => '215532029623474',
		'appSecret'   => 'f1be22088ef100acafa54f752dbc5f1a',
		'redirectUri' => 'https://localhost/espresso_dev/auth.php'
	));

	echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";
?>