<?php
/** Test for the get_price endpoint */
require_once( "call_api.php" );

$base_url = "https://api-staging.ripcordrescuetravelinsurance.com";
$endpoint = "/api/quote/get_price.php";

$data = array( "traveler_dob" => array("12/12/1987","2/2/1946"),
			   "traveler_trip_cost" => array("3456","33423"),
			   "trip_start_date" => "9/29/2020",
			   "trip_end_date" => "10/9/2020",
			   "agent_id" => "test_account",
			   "api_token" => "thisisatoken",
			   "cancel_policy" => "true", );
			   
echo json_encode($data);

echo call_api( $base_url.$endpoint, json_encode($data) ).PHP_EOL;

?>