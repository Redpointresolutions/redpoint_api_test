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
    agent_filter: "test_account"
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
			resident_country : "US",
			resident_state : "CA",
			destination_country : "UK",
			additional_destination_countries : "SG,CR",
			travel_insurance_type : "2",
			evac_type : "2",
			cancel_policy : "false",
			traveler_first_name : ["Jason","Billy"],
			traveler_last_name : ["Douglas","Boggs"],
			traveler_dob : ["12/12/1987","2/2/1946"],
			traveler_trip_cost : ["3456","3423"],
			trip_start_date : "9/29/2021",
			trip_end_date : "10/9/2021",
			initial_deposit_date : todayStr,
			program : "harbor",
			quoted_price : "",
			street_address : "123 C Street",
			city : "Santa Cruz",
			state : "CA",
			zip : "95060",
			cell_phone : "",
			home_phone : "",
			email : "test@test.com",
			agent_override : "tcs",
			api_token : json.api_token
		});
		
		//fetch('https://api-staging.redpointtravelprotection.com/api/quote/generate_quote', {
		fetch('http://ripcord-api.test/api/quote/generate_quote.php', { //Local Test
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


