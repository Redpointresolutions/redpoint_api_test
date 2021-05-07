<?php

/** Test for the agent_login endpoint */
require_once( "call_api.php" );

$base_url = "https://api-staging.ripcordrescuetravelinsurance.com";
$endpoint = "/api/agent/agent_login";

$data = array( "agent_id" => "loveholidays",
			   "agent_username" => "andy.sellick@loveholidays.com",
			   "agent_password" => "pplhas200618" );
			   
echo json_encode($data).PHP_EOL;


echo call_api( $base_url.$endpoint, json_encode($data) );

?>
