<?php
/** Test for the generate_quote endpoint */
require_once( "call_api.php" );

$base_url = "http://ripcord-api.test";
$base_url = "https://api-staging.redpointtravelprotection.com";
$endpoint = "/api/agent/agent_login.php";

$data = array( "agent_id" => "test_account",
			   "agent_username" => "test@account.com",
			   "agent_password" => "password" );
			   
$result = call_api( $base_url.$endpoint, json_encode($data) );
$result = json_decode($result,true);

$endpoint = "/api/policy/update_policy.php";

$data = array( "redpoint_policy_number" => "UOI202150585",
			   //"trip_cost_updates" => array("500"),
			   "traveler_trip_cost" => array("6000","6000"),
			   "send_email" => "true",
			   "api_token" => $result['api_token'],
			 );

//echo json_encode($data).PHP_EOL;
echo call_api( $base_url.$endpoint, json_encode($data) ).PHP_EOL;

?>