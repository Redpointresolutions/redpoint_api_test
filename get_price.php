<?php
/** Test for the get_price endpoint */
/**
http://api.ripcordrescuetravelinsurance.com/api/get_price.php/?
coverage_type=1
travel_insurance_type=2
evac_type=3
traveler_1_dob=12/12/1987
traveler_1_trip_cost=3456
trip_start_date=9/29/2018
trip_end_date=10/9/2018
deposit_start_date=8/29/2018
resident_country=US
resident_state=AZ
destination_country=US
agent_id=geoex
*/
require_once( "call_api.php" );

$base_url = "http://api-staging.ripcordrescuetravelinsurance.com";
$endpoint = "/api/quote/get_price";

$data = array( "traveler_dob" => array("12/12/1987","2/2/1946"),
			   "traveler_trip_cost" => array("3456","33423"),
			   "trip_start_date" => "9/29/2020",
			   "trip_end_date" => "10/9/2020",
			   "agent_id" => "test_account",
			   "api_token" => "thisisatoken" );

echo call_api( $base_url.$endpoint, json_encode($data) ).PHP_EOL;

?>