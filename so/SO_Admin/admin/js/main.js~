$(document).ready(function() {
	
	
	
		

	var i;
	


 $('#tablebody').on('mouseenter','li', function () {   
	$(this).parent().toggleClass("backgroundcolor");
	
		});

$('#tablebody').on('mouseleave','li', function () {  
	$(this).parent().toggleClass("backgroundcolor");
	
		});




 


   
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
	






// login function
 $('.loginform').on ('click tap','#pwsubmit',  (function () {
		$('.loginform').submit (function () {
	   event.preventDefault();
			
		
			
			
	  var formData = $('form').serializeArray();
	  var formJSON =	JSON.stringify(formData);
    
     console.log(formJSON);	
		
			
	
   $.post('login.php',formData, loginResults ); 
		
		
		  function loginResults(data) {
		  
		   var result = data.trim();
		  
		  console.log(result);
		  
		  
		
	  		if (result == 1) {
		  			console.log('login is correct '+ result);
		  			
		  		$('.loginform').append('<p id="pass"> Correct login information.   </p>');
		  		 $('.loginform').hide();
			   $('.main').show();
		  		
		  		
		  		}  else {
		  			
		  		$('.loginform').append('<p> The Login and password combination are not correct!!  Please re-enter.  </p>');
		  		
		  	
		  }
		}  
		});/ end of process data */
		
	})) ; // end of pwsubmit function 
	
		
		
		


	
	//  click + to show form   reset form values to null
	
    $('#main_buttons').on('click tap','#addButton', (function () {
    	
    	var itemValue =
				$('input[name="customer"').val("");
			var qtyValue = 
				$('input[name="qty"').val("");
				var notes =
					$('input[name="notes"').val("");
		$('div.main').hide();					
		$('.form').show();
      
    
    }));
    
   
    //  Prevent default refresh  
    
 






   
   
   
    
  // submit to server 
  
 $('#form1').on ('click tap', '#submit', (function () {
		$('form').submit (function () {
	   event.preventDefault();
			
		
			
			
	  var formData = $('form').serializeArray();
	  var formJSON =	JSON.stringify(formData);

     console.log(formJSON);	
		   $.post('createSO.php',formData );
		   alert('The following records have been added:' + formJSON); 
				$('.form').hide();
			$('.main').show();	
				//		alert ('Entry Added');
			})
			})); 						 
	
	
	
	$('form').submit (function () {
	     event.preventDefault();
		
});



//  add a new product and Qty line funcution		
	 
      $('#form1').on ('click tap', '#newline', (function(){
    $('.input:first').clone(true).hide().insertAfter('.input:last').slideDown('slow');
        var last = $('.input:last');
        var current =  $(".input").length - 1;
        //last.append(new_button.clone(true));
        last.find('select').val([]);
        last.find('select').attr("name", "lineItem[" + current + "][product]");
        last.find('input').val([]);
        last.find('input').attr("name", "lineItem[" + current + "][qty]");
    }));



//  customer search
     $("#customer").autocomplete({
        		source: "search.php",
        		minLength: 1
       		}); 
            
        
 
       
				
			
			
			
			
			
				
	function processData(data) {
							
							
				$('#main     ').append ('<p> You entry was sucessfully updated </p>');
				
													
							
							
							}  // end of process data
		
			 $('.form').hide();
			
						
				
				
    // form cancel
   /* 
    $('#cancel').click(function () {
    	
    	$('.form').hide();
    	});				
				
			
   // edit function
   
   $('#tblData').on('click', '.editButton', function () {
   
      $('#tbleData tbody tr').map(function() {
      
		var par = $(this).parent().parent(); //tr      
      var tdItem = par.childern("td:nth-child(1)");
     var tdQty = par.children("td:nth-child(2)");
      
      	tdItem.html("<input type='text' id='item' value='"+tdName.html()+"'/>");
      	 tdQty.html("<input type='text' id='qty' value='"+tdPhone.html()+"'/>");

     	
      	
      	
	
	   //});	
	
    	$('.form').show();
 });
   	
   	
   
      // delete function
   
   $('#tablebody').on('click', '#deleteButton', function(){ 
   $(this).parent().remove();
    });	
				
	
	
	
	// delete all function 
	
		
		$('.main').on('click', '#deleteAll', function(){ 
				
			confirm('Are you sure you want to delete all items?');
				$('#tablebody').children().remove();
				
				});	
		*/	
									   
   });
   
    
    
    
	
    
    
    
 
 

	
	
  
	 


	
	
    
    
    
    
  