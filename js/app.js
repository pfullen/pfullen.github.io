 $(document).ready(function(){
	
	



// Quiz Object

function Quiz (){

var studentAnswer;
var questionNum;
var newQuestion;
var anaswered=0;
var score;
var i;
var x;




// init method
this.init = function () {
    questionNum = 0;    
    answered= 0;
	 score = 0;
    i = 0; 
    x = 0;
this.loadNextQuestion();
this.handleEvents();
this.showQuizValues();
}


//  get Question Method     sets up question object
this.questionObj = function(question, possibleAnswers, correctAnswer) {

this.question = question;
this.possibleAnswers = possibleAnswers;
this.correctAnswer = correctAnswer;



}//   End of get Question Method


// submit event method
  // this.submitMethod = function () {
   	  
//		}

// end of submit event method

// validate answer method
this.validateAnswer = function (studentAnswer) {
	this.studentAnswer = studentAnswer;
	console.log("this" + this.studentAnswer);
	
	
	console.log(questionNum);
	console.log("I's value is " + i);
	//console.log ("Student answer is " + this.studentAnswer + " Real answer is " + this.question [i][2]);
	if (this.studentAnswer == questions [i][2] ) {
		score++	
	} console.log(i);
	i++;
}  // close compareAnswer method


//  handle events method
this.handleEvents = function () {
	/*--- Display information modal box ---*/
  	$(".what").click(function(){
    	$(".overlay").fadeIn(1000);

  	});

  	/*--- Hide information modal box ---*/
  	$("a.close").click(function(){
  		$(".overlay").fadeOut(1000);
  	});
  	
	$('form').submit(function(event){ 
  			 event.preventDefault(); 
  		});		
            	
  	$(document).on('click', 'input#guessButton', function (){
 		 studentAnswer = $("input:radio[name=Answer]:checked").val();		
 		 answered++
 		 questionNum++
 		  
 		 console.log("This is student answer on the click " + studentAnswer);
 		
quiz1.validateAnswer(studentAnswer);
  if (answered == 5){
   
   $('#feedback').html("You answered " + score + " out of " + newQuestion.length );

   
     } else { 
     
		 quiz1.loadNextQuestion();
		// console.log("attempting to load the next question");
		 quiz1.showQuizValues();
 	
 	}
  	
 	});
  	
  	$('.new').click(function () {
  	
  		
 quiz1.init();
  	});
  	
};


// end of handle events method





// display display quiz values message method
this.showQuizValues = function () {
	
	var progress = questionNum + 1;
	$('p').html("Question " + progress + " out of " + newQuestion.length);
  console.log("You answered " + answered + " questions");
   
}

// end of display message method










// init  method   -    when new quiz is clicked
this.newQuiz = function () {
		
 	
   this.init();
   
	} 
 	  	
 // close newQuiz method




// load question method

this.loadNextQuestion = function (questionNumber) {
	 newQuestion = this.question;     // This cycles through the questions array and picks the first item in the array which is the question 
	// console.log(newQuestion[0]);
	// console.log(newQuestion[1]);
	// console.log(newQuestion [1][0]);
//	 console.log(newQuestion[2][1]) ;
	// console.log(newQuestion[1,2]);
	console.log("X equals " + x);
	console.log("i equals " + i );
	 $('#feedback').html(newQuestion[i][0]);
//	 $('input:radio[name=Answer]').remove();  // remove prior questions possible answers
	$('form').html('<input type="hidden" name "Answer" value="0">');
	for ( x=0;  x < newQuestion[2][1].length ; x++ ) {     // this loops through the possible answers
		      $('form').append('<input  type = "radio" name="Answer" value="' + x + '">' +  newQuestion[i][1][x] + '<br>');
		      
				}
		//	console.log(newQuestion[1]);
		
			$('form').append('<input type="submit" id="guessButton" class="button" name="submit" value="Submit"/>');

} // end of loadQuestion Method









};  // End of Quiz Object


// Main   

	var questions = Array();
	questions[0] =  [["How Many Moons Does Saturn Have?"],   ["62", "31" , "57", "4"], ["1"]];
	questions[1] =  [["How Long Does it Take Jupiter to Orbit the Sun?"],  ["100 Days", "335 Days" , "4332 Days", "12 Days"], ["2"]];
	questions[2] =  [["What Type of Galaxy is the Milky Way?"], ["Boxed", "Spiral" , "Square", "Elliptical"], ["1"]];
	questions[3] =  [["What is the closet star outside out solar system?"],   ["Wolf 359", "Lalande 21185 " , "Sirius", "Alpha Centauri"], ["3"]];
	questions[4] =  [["How many tons of Hydrogen does the Sun burn each second?"],   ["10 million", "5 million" , "600 million", "125 million"], ["2"]];
	
	
	
	
	var quiz1 = new Quiz();
	
	quiz1.questionObj(questions);
 // console.log("These are the Questions" + questions);
 	quiz1.init();
   
	
});





