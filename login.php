<?php

require_once( "call_api.php" );

$base_url = "http://api-staging.ripcordrescuetravelinsurance.com";
$endpoint = "/api/agent/agent_login.php";

$data = array( "agent_filter" => "test_account",
			   "agent_username" => "test@account.com",
			   "agent_password" => "password" );

echo call_api( $base_url.$endpoint, json_encode($data) );

?>