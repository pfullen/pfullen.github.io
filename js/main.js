$(document).ready(function () {
	
	

	
		
 var div = document.getElementById('textDiv');


	
	for (var i=1; i<101 ; i++) {
		
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
	
		
						
			
		});
		
