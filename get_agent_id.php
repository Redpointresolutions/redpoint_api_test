<?php

/** Test for the agent_login endpoint */
require_once( "call_api.php" );

$base_url = "http://ripcord-api.test";
$endpoint = "/api/agent/agent_login.php";

$data = array( "agent_id" => "test_account",
			   "agent_username" => "test@account.com",
			   "agent_password" => "password" );
			   
//echo json_encode($data).PHP_EOL;

$result = call_api( $base_url.$endpoint, json_encode($data) );

$endpoint = "/api/tests/get_agent_id.php";
echo call_api( $base_url.$endpoint, $result );

?>