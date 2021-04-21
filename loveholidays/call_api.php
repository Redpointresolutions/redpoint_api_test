<?php

function call_api($url, $data)
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_POST, 1);
	if( $data )
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

	// OPTIONS:
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
	));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

	// EXECUTE:
	print $url.PHP_EOL;
	$result = curl_exec($curl);

	if(!$result){die("Connection Failure".PHP_EOL);}
	curl_close($curl);
	return $result;
}

?>