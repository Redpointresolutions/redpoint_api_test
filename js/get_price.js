/**
* Example of calling the Redpoint Pricing Engine API via javascript. 
* @author Jason Douglas
*/

//This line is required to run via Node.js. Otherwise the Fetch API is supplied by the browser. 
const fetch = require('node-fetch');

let data = {
    agent_username: "test@account.com",
    agent_password: "password",
    agent_filter: "test_account"
};


fetch('https://api-staging.redpointtravelprotection.com/api/agent/agent_login', {
//fetch('http://ripcord-api.test/api/agent/agent_login.php', {
	  method: 'POST',
	  body: JSON.stringify(data),
   	  headers: { 'Content-Type': 'application/json' }
 	})
 	.then(res => res.json())
 	.then(json => {
		data = JSON.stringify({ 
		   traveler_dob : ["12/12/1987","2/2/1946"],
		   traveler_trip_cost : ["3456","3423"],
		   trip_start_date : "9/29/2021",
		   trip_end_date : "10/9/2021",
		   program: "harbor", //Optional defaults to ripcord
		   agent_override: "tcs", //Optional defaults to blank. 
		   cancel_policy: true, //Optional. defaults to false
		   api_token : json.api_token
		});
		
		//fetch('https://api-staging.redpointtravelprotection.com/api/quote/get_price', {
		fetch('http://ripcord-api.test/api/quote/get_price.php', {
			method: 'POST',
			body: data,
		   	headers: { 'Content-Type': 'application/json' }
		})
		.then(response => response.json())
		.then(response_data => {
			//The response_data contains all the info. Handle results here. 
			console.log( response_data );
		})
		.catch(err => console.log(err))
 	});


