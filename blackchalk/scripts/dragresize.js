		$(document).ready(function() {
		  var params = {
		    start: function(event, ui) {
		      console.log("Rotating started");
		    },
		    rotate: function(event, ui) {
		      console.log("Rotating");
		    },
		    stop: function(event, ui) {
		      console.log("Rotating stopped");
		    },
		  };
		  $('#widgets').draggable();
		  
		  $('#drag').resizable();
		  $('#drag').draggable();
		  
		  $('#drag2').resizable();
		  $('#drag2').draggable();

		  $('#drag3').resizable();
		  $('#drag3').draggable();

 		  $('#drag4').resizable();
		  $('#drag4').draggable();

 		  $('#drag5').resizable();
		  $('#drag5').draggable();

 		  $('#drag6').resizable();
		  $('#drag6').draggable();                           
		  
		  $('#target1').resizable().rotatable();
		  $('#draggable1').draggable();
		});
		
		


