

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CLS Medical SO Entry</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
   <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
    
     
      
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400:700' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="http://code.jquery.com/jquery.min.js"></script>
        
        
   	 <script src="js/main.js"></script> 
         <script src="js/plugins.js"></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
          
    </head>
    <body>
   	    <header> <h1> </h1>  </header>
		
		
<section>		

   	<div class="main"> 
        	       <div id="main_buttons">
	     				
			        
			  
					</div>     
					<?php include("salesOrderReport.php") ;  ?>
				<h1> Service Order Entry  </h1>					
		      <h2> </h2>
			
			  </div>
			  	
		
			<form class="loginform" method="post" action="">
			<h1> </h1>
			 <input id="UserName" name="UserName" placeholder="Login ID"> <br>
         <input id"Password" name="Password" placeholder="password" type="password">	<br>
        <input id="pwsubmit" type = "submit" value="sign in" >    </input> 
			</form>






				
        	<div class="form">
        	
        	
        	<form id="form1" name="form1" method="post" action="">
        		<h2> Service Order Entry  </h2>	
      
	


<input id = "customer" name="customer" placeholder="Customer" class="form-control txt-auto">  
	
	      	
        	<br>
        	<div class="input">  	
	
 <select align= "center" name="lineItem[0][product]" id="product" >
  <option value="" disabled selected>Products </option>
  <option value="FLAT SHEET">FLAT SHEET</option>
  <option value="FITTED SHEET">FITTED SHEET</option>
  <option value="XL FITTED SHEET">XL FITTED SHEET</option>
  <option value="1/2 SHEET">1/2 SHEET</option>
  <option value="GOWN">GOWN</option>
  <option value="3X GOWN">3X GOWN</option>
  <option value="PEDIATRIC GOWN">PEDIATRIC GOWN</option>
  <option value="SURGICAL GOWN">SURGICAL GOWN</option>
  <option value="BATH BLANKET">BATH BLANKET</option>
  <option value="THERMAL BLANKET">THERMAL BLANKET</option>
  <option value="PEDIATRIC BLANKET">PEDIATRIC BLANKET</option>
  <option value="PILLOW CASE">PILLOW CASE</option>
  <option value="WASH CLOTH">WASH CLOTH</option>
  <option value="HAND TOWEL">HAND TOWEL</option>
  <option value="BATH TOWEL">BATH TOWEL</option>
  <option value="OR TOWEL">OR TOWEL</option>
  <option value="MOPS ">MOPS </option>
  <option value="OR CURTAINS">OR CURTAINS</option>
  <option value="SCRUB TOP">SCRUB TOP</option>
  <option value="SCRUB BOTTOM">SCRUB BOTTOM</option>
  <option value="LAB COATS">LAB COATS</option>
	
  
  </select>
 
     <input id="qty" type = "number" name="lineItem[0][qty]" align = "center" min="1" max="100" placeholder="QTY">  
    
</div>
        	
       

       	<input id="newline" type = "submit" value="Add more lines" >    </input> 
        		<button class="deletelines" id="cancel">  Clear form </button>
     		
						<br>     		
                 	<br>
                 	
        	 <textarea rows="4" cols="50" placeholder="Notes:" id="notes" name="notes"></textarea> 
       <br>
       <br>
        
    			
    			 	
    			<div class="formButtons">
    			     
        	<button id="submit" class="add2"> Submit   </button>
        	<button class="add2" id="cancel">  Cancel </button> 
        		</div>
     
        	</form>
        	
         
      </div>
      -->
</section>
		
		
        <footer> 
				<p>  &copy 2014  CLS Medical,LLC  All Rights Reserved  </p>
        
          </footer>
        
    </body>
</html>
