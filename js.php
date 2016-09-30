<?//██████████████████████████████████████████████████████████████████████████
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ 			
////////////////////////██████████//█████████///////////////////////////////			
////////////////////////////██//////██//////////////////////////////////////			
////////////////////////////██////////████//////////////////////////////////			
////////////////////////////██ ///////////██////////////////////////////////			
////////////////////////██████//////████████////////////////////////////////
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
//██████████████████████████████████████████████████████████████████████████
///////////////////////////////////////////////////////////////////////////?>
<script>
		window.onscroll = function(){
					var navBr = document.getElementById('navElement');							
				navbarAffix();			
						
				 function navbarAffix(){
					if(document.body.scrollTop > 450){
						 navBr.removeAttribute('class');
						 navBr.setAttribute('class','navbar navbar-default navbar-fixed-top ');
						}else if(document.body.scrollTop < 500){
						 navBr.removeAttribute('class');
						 navBr.setAttribute('class','navbar navbar-default navbar-static-top ');							
						}
					} 				
				} 				
					
</script>
<script>
	 var modal = document.getElementById('myModal');
		 var btn = document.getElementById("myBtn");
		 var span  = document.getElementsByClassName("close")[0];
			btn.onclick = function(){openFunc()};
				/// OPEN MODAL FUNCTION
				function openFunc(){
					modal.style.display = "block";
				}
				
				// CLOSE MODAL FUNCTION
				span.onclick = function(){closeFunc()};
					
					function closeFunc(){
						modal.style.display = "none";
					}
				//CLICKS OUTSIDE MODAL WINDOW CLOSES MODAL WINDOW
				window.onclick = function(e){
					if(e.target == modal){
						modal.style.display = "none";
					}
				}
</script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script> 
<script src="js/custom.js"></script>