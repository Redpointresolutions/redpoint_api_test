/**
* Example of calling the Redpoint Pricing Engine API via javascript. 
* @author Jason Douglas
*/

//This line is required to run via Node.js. Otherwise the Fetch API is supplied by the browser. 
const fetch = require('node-fetch');

let today = new Date();
let todayStr = (today.getMonth()+1)+"/"+(today.getDate())+"/"+today.getFullYear();

let data = {
    agent_username: "test@account.com",
    agent_password: "password",
    agent_id: "test_account"
};

//fetch('https://api-staging.redpointtravelprotection.com/api/agent/agent_login', {
fetch('http://ripcord-api.test/api/agent/agent_login.php', { //Local Test
	  method: 'POST',
	  body: JSON.stringify(data),
   	  headers: { 'Content-Type': 'application/json' }
 	})
 	.then(res => res.json())
 	.then(json => {
		data = JSON.stringify({ 
			redpoint_policy_number : "UOI202150418",
			trip_cost_updates : ["500"],
			send_email : "true",
			api_token : json.api_token
		});
		
		console.log( JSON.parse(data,null,4) );
		
		//fetch('https://api-staging.redpointtravelprotection.com/api/quote/update_policy', {
		fetch('http://ripcord-api.test/api/policy/update_policy.php', { //Local Test
			method: 'POST',
			body: data,
		   	headers: { 'Content-Type': 'application/json' }
		})
		.then(response => response.json())
		.then(response_data => {
			//The response_data here contains all the info. Handle results here. 
			console.log( response_data );
		})
		.catch(err => console.log("Error:"+err))
 	});


