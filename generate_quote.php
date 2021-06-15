<?php
/** Test for the generate_quote endpoint */
require_once( "call_api.php" );

$base_url = "http://ripcord-api.test";
//$base_url = "https://api-staging.redpointtravelprotection.com";
$endpoint = "/api/agent/agent_login.php";

$data = array( "agent_id" => "test_account",
			   "agent_username" => "test@account.com",
			   "agent_password" => "password" );
			   
$result = call_api( $base_url.$endpoint, json_encode($data) );
$result = json_decode($result,true);

$endpoint = "/api/quote/generate_quote.php";

$data = array( "resident_country" => "US",
			   "resident_state" => "FL",
			   "destination_countries" => array("US","HK","CR"),
			   "travel_insurance_type" => "2",
			   "evac_type" => "2",
			   "cancel_policy" => "false",
			   "traveler_first_name" => array("Jason","Billy"),
			   "traveler_last_name" => array("APITest49","Boggs"),
			   "traveler_dob" => array("12/12/1987","2/2/1946"),
			   "traveler_trip_cost" => array("3456","3423"),
			   "trip_start_date" => "9/29/2021",
			   "trip_end_date" => "10/9/2021",
			   "initial_deposit_date" => date("m/d/Y"),
			   "program" => "ripcord",
			   "api_token" => $result['api_token'],
			   "quoted_price" => "",
			   "street_address" => "123 C Street",
			   "city" => "Santa Cruz",
			   "state" => "CA",
			   "zip" => "95060",
			   "cell_phone" => "",
			   "home_phone" => "",
			   "email" => "test@test.com",
			 );

echo json_encode($data).PHP_EOL;
echo call_api( $base_url.$endpoint, json_encode($data) ).PHP_EOL;

?>
