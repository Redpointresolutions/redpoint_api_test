<?php
/** Test for the generate_quote endpoint */
require_once( "call_api.php" );

$base_url = "http://api-staging.ripcordrescuetravelinsurance.com";
$endpoint = "/api/quote/generate_quote";

$data = array( "resident_country" => "US",
			   "resident_state" => "FL",
			   "destination_country" => "BN",
			   "travel_insurance_type" => "2",
			   "evac_type" => "2",
			   "traveler_first_name" => array("Jason","Billy"),
			   "traveler_last_name" => array("Douglas","Boggs"),
			   "traveler_dob" => array("12/12/1987","2/2/1946"),
			   "traveler_trip_cost" => array("3456","33423"),
			   "trip_start_date" => "9/29/2020",
			   "trip_end_date" => "10/9/2020",
			   "initial_deposit_date" => date("m/d/Y"),
			   "street_address" => "",
			   "city" => "",
			   "state" => "",
			   "zip" => "",
			   "cell_phone" => "",
			   "home_phone" => "",
			   "email" => "",  
			   "program" => "cavalry",
			   "agent_id" => "test_account",
			   "api_token" => "thisisatoken",
			 );

echo call_api( $base_url.$endpoint, json_encode($data) ).PHP_EOL;

?>