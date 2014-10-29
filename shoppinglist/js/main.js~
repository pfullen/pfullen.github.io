$(document).ready(function() {
	
	
	
		$('#tablebody ').on('click', 'ul', function(){ 
		
		
		$(this).children().toggleClass("linethrough")
		});
		

	
	/*$('#deleteAll').hover(function () {
		alert('hello';)
		$(this).css("background-color","#b8c6df");
		},function () {
		$(this).css("background-color","lightgrey");		
		})
	
*/
	


 $('#tablebody').on('mouseenter','li', function () {
	  
	   
	   
	$(this).parent().toggleClass("backgroundcolor");
	//	},function () {
	//$(this).parent().css("background-color","");		
		});

$('#tablebody').on('mouseleave','li', function () {
	  
	   
	   
	$(this).parent().toggleClass("backgroundcolor");
	//	},function () {
	//$(this).parent().css("background-color","");		
		});





/*
	$('#tablebody li').hover(function(){ 
	   
		
		$(this).parent().css("background-color","#b8c6df");
		},function () {
		$(this).parent().css("background-color","");		
		});
  
*/  
   
   $('button').hover(function () {
		
		$(this).css("background-color","#b8c6df");
		},function () {
		$(this).css("background-color","");		
		});
	
	$('#addButton').hover(function () {
		
		$(this).css("background-color","grey");
		},function () {
		$(this).css("background-color","");		
		});
	
	
	//$('td').hover(function () {
	//$(this).addClass('linethrough');
	
	//  click + to show form   reset form values to null
	
    $('#addButton').click(function () {
    	
    	var itemValue =
				$('input[name="item"').val("");
			var qtyValue = 
				$('input[name="qty"').val("");
							
		$('.form').show();
    
    
    });
    
   
    //  Prevent default refresh  
    
   $('form').submit(function(event){ 
  			 event.preventDefault(); 
   });
   
   
   
   
   
   // add function
		$('#formadd').click(function () {
		
			var itemValue =
				$('input[name="item"').val();
			var qtyValue = 
				$('input[name="qty"').val();
			var category = 
				$(':selected').val();				
					
					
		 /* require form input values	
			$('#formadd').validate({
				rules:{
					name:	'required',
					item: {
						required:true,					
					   item:true
					},
					qty: {
						required:true,
						qty:true
						
										
					}
				}
		})	 
		*/
							
					// append list with new items
			$('.main #tablebody').append(
			'<div class="row">'+
			'<button class="expandButton" id="expandButton">' +
				'</button>' +
			'<ul class = "list">'+
				'<li  >'+ itemValue +
				'</li>'+
				'<li  >'+ qtyValue +
				'</li>' +
				'<li  >'+ category +
				'</li>' + 
				
				'</ul>' +
				'<button class="button" id="editButton">' +
				'</button>' +
			
				'<button class="button" id="deleteButton">' +
				'</button>' +
				'</div>'
			
				 
			);
			 $('.form').hide();
			
			});				
				
				
    // form cancel
    
    $('#cancel').click(function () {
    	
    	$('.form').hide();
    	});				
				
			
   // edit function
   $('#tablebody').on('click', '#editButton', function(e){ 
   

// get list items
/*
	var myArray = [];
	
	$('#list li').each (function () {
			myArray.push($(this).text());
		});
		
// test array
		 alert(myArray);
  */  
  var row = $(e.target.tr.firstChild);
 alert(row.find("td").html());
 
// populate form with list items
 
   

var item = myArray[0];
var qty =  myArray[1];
var type = myArray[2];

var itemValue=
					$('input[name="item"').val(item);
var qtyValue = 
				   $('input[name="qty"').val(qty);
				   
				   
			
	
	$('.form').show();
		$("button  #formadd").text(function () {
     $(this).text().replace("Add", "Edit"); 
});
		
				


});
   
   	
   
   
   // delete function
   
   $('#tablebody').on('click', '#deleteButton', function(){ 
   $(this).after('<div> This is new </div>');
    
   
   
   
   //$(this).parent().remove();
    });	
				
	
	
	
	// delete all function 
	
		
		$('.main').on('click', '#deleteAll', function(){ 
				
		var answer = confirm('Are You Sure');
			if (answer) {
				$('#tablebody').children().remove();
						}
				});	
			
							   
   });
   
    
    // new function 
    // This is a test
    
    
	
    
    
    
 
 

	
	
  
	 


	
	
    
    
    
    
  