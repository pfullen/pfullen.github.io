$(document).ready(function () {

// function starts here	
var fizzBuzz = function (num1) {
		var answer = +num1;   // convert string to integer 
    
		var div = document.getElementById('textDiv');
		
		for (var i=0; i<=answer ; i++) {
		
		if (i%3===0 && i%5===0) {
			div.innerHTML += "fizz buzz," ;
										}
	else if (i%3===0 && i%5!=0) {
	div.innerHTML += "fizz," ;
					} 
	else if(i%5===0 && i%3!=0) {
	div.innerHTML += "buzz," ;
	
	
	}	else {
	
	div.innerHTML += i ;
	div.innerHTML += ",";
	}		
									}
	
				
	}
// End of function 


// main code
var userInput = prompt("Please enter a number between 1 and 100:");
fizzBuzz(userInput);	
	

 					
			
		});
		


	