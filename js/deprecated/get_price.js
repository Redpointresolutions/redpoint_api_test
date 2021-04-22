/**
* Example calling the RedpointPricingEngine via XMLHttpRequest. 
* JGD TODO: Still having an issue parsing the returning JSON. The JSON is valid, so I'm 
* not sure what the issue is. Potentially a latency issue? Using the Fetch API appears 
* to be the better solution. 4/22/21
*/

function GetPrice() 
{
    var base_url = "https://api-staging.redpointtravelprotection.com";
    //var base_url = "http://ripcord-api.test";
    var endpoint = "/api/agent/agent_login";
    
	//Only required for running on command line using Node.js
	var XMLHttpRequest = require('xhr2');
	
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
             console.log(this.responseText);
         }
    };
    
	data = JSON.stringify({ 
	   agent_username : "test@account.com",
	   agent_password : "password",
	   agent_filter : "test_account",
	});

    xhttp.open("POST", base_url+endpoint, true);
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send(data);
    
	let result = xhttp.responseText;
	console.log( "got result: " + result );
	
	//JGD: This is throwing an exception for unknown reasons (latency?).
	//let result_json = JSON.parse(result);
	
	//return result;
    
    /**
	data = JSON.stringify({ 
	   traveler_dob : ["12/12/1987","2/2/1946"],
	   traveler_trip_cost : ["3456","23423"],
	   trip_start_date : "9/29/2021",
	   trip_end_date : "10/9/2021",
	   api_token :"thisisatoken",
	   cancel_policy : "true"
	});
	


	endpoint = "/api/quote/get_price";


    
    xhttp.open("POST", base_url+endpoint, true);
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send(data);
    return xhttp.responseText;
    */
}

console.log( "Get Price Returned: " + GetPrice() );