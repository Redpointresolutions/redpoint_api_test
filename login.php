<?php

/** Test for the agent_login endpoint */
require_once( "call_api.php" );

$base_url = "http://ripcord-api.test";
//$base_url = "https://api-staging.redpointtravelprotection.com";
$endpoint = "/api/agent/agent_login.php";

$data = array( "agent_id" => "test_account",
			   "agent_username" => "test@account.com",
			   "agent_password" => "password" );
			   
$result = call_api( $base_url.$endpoint, json_encode($data) );

echo "Login Results:".PHP_EOL;
print_r($result);
echo PHP_EOL;

$endpoint = "/api/tests/token_validate.php";
echo call_api( $base_url.$endpoint, $result );
echo PHP_EOL;

?>