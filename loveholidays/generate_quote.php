<?php
/** Test for the generate_quote endpoint */
require_once( "call_api.php" );

$base_url = "http://api-staging.ripcordrescuetravelinsurance.com";
$endpoint = "/api/quote/generate_quote.php";

$data = array( "resident_country" => "US",
			   "resident_state" => "MO",
			   "destination_country" => "BN",
			   "travel_insurance_type" => "2",
			   "evac_type" => "2",
			   "cancel_policy" => "false",
			   "traveler_first_name" => array("Jason","Billy"),
			   "traveler_last_name" => array("Douglas","Boggs"),
			   "traveler_dob" => array("12/12/1987","2/2/1946"),
			   "traveler_trip_cost" => array("3456","3423"),
			   "trip_start_date" => "9/29/2020",
			   "trip_end_date" => "10/9/2020",
			   "initial_deposit_date" => date("m/d/Y"),
			   "program" => "cavalry",
			   "api_token" => "thisisatoken",
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