<?php
/** Test for the get_price endpoint */
require_once( "call_api.php" );

$base_url = "http://ripcord-api.test";
$endpoint = "/api/agent/agent_login.php";

$data = array( "agent_filter" => "test_account",
			   "agent_username" => "test@account.com",
			   "agent_password" => "password" );
			   
$result = call_api( $base_url.$endpoint, json_encode($data) );
$result = json_decode($result,true);

print_r($result);
echo PHP_EOL;
//exit();

$endpoint = "/api/quote/get_price.php";

$data = array( "traveler_dob" => array("12/12/1987","2/2/1946"),
			   "traveler_trip_cost" => array("3456","23423"),
			   "trip_start_date" => "9/29/2021",
			   "trip_end_date" => "10/9/2021",
			   "agent_id" => "test_account",
			   "api_token" => $result['api_token'],
			   "cancel_policy" => "true", );
			   
$result = call_api( $base_url.$endpoint, json_encode($data) );

print_r($result);
echo PHP_EOL;

?>