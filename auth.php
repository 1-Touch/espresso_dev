<?php
	
	require_once __DIR__ . '/vendor/autoload.php';

	use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;

	$instagram = new InstagramBasicDisplay(array(
		'appId'      => '215532029623474',
		'appSecret'   => 'f1be22088ef100acafa54f752dbc5f1a',
		'redirectUri' => 'https://localhost/espresso_dev/auth.php'
	));

	// Get the OAuth callback code
	$code = $_GET['code'];

	// Get the short lived access token (valid for 1 hour)
	$token = $instagram->getOAuthToken($code, true);


	// Exchange this token for a long lived token (valid for 60 days)
	$token = $instagram->getLongLivedToken($token, true);

	// Set user access token
	$instagram->setAccessToken($token);

	// Get the users profile
	$profile = $instagram->getUserProfile();

	$profile->medias = $instagram->getUserMedia();

	echo '<pre>';
	print_r($profile);
	echo '<pre>';

	// get all user likes
	// $likes = $instagram->getUserLikes();

	// print_r($likes); die();

?>