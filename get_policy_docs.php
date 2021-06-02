<?php
/** Test for the generate_quote endpoint */
require_once( "call_api.php" );

$base_url = "http://ripcord-api.test";
$endpoint = "/api/agent/agent_login.php";

$data = array( "agent_id" => "test_account",
			   "agent_username" => "test@account.com",
			   "agent_password" => "password" );
			   
$result = call_api( $base_url.$endpoint, json_encode($data) );
$result = json_decode($result,true);

$endpoint = "/api/policy/get_policy_docs.php";

$data = array( "redpoint_policy_number" => "UOI202150513",
			   "api_token" => $result['api_token'],
			 );

//echo json_encode($data).PHP_EOL;
echo call_api( $base_url.$endpoint, json_encode($data) ).PHP_EOL;

?>