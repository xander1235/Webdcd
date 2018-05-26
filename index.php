<!doctype html>
<html>
<head>
	<title>Web Design</title>
	<link href="styl.css" rel="stylesheet" type="text/css" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="script.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#rathodDiv").click(function(){
        $("#ratod").fadeToggle("slow");
        
    });
    
});
$(document).ready(function(){
    $("#vinay").click(function(){
        $("#vinay").fadeToggle("slow");
        
    });
    
});
</script>
</head>
<body data-spy="scroll" data-target="#myScrollspy">
	

	<img src="logo.gif" id="lg" />
	
	


	<nav class="home container-fluid">
		<div class="row" id="#myScrollspy">
			<div class="col-xs-3">
				<a href="#home" class="ha" > HOME</a>
			</div>
			<div class="col-xs-3">
				<a href="#order" class="ha">ORDER</a>
			</div>
			<div class="col-xs-3">
				<a href="#about"  class="ha">ABOUT</a>
			</div>
			<div class="col-xs-3">
				<a href="#contact" class="ha">CONTACTS</a>
			</div>
		</div>
	</nav>






	<div class="container" id="body">
		<div id="home" class="collective container"  >
			<p class="error"></p> 
			<div class="jumbotron">
				<h1>
					Welcome to WEBDCD!
				</h1>
                        <br>
			<p> Welcome aboard.What will you have? Coffee or Tea?
			</p> 
		</div>
		<div class="div">
			Blah Blah Blah Blah.Our Company is Great.... It is made by Zeus himself. It was the son of thetis and zeus. It has no weak point except it's heel. And this website will be killed when paris shoots at it's footer with an arrow, while this website is riding a horse. (The website falls in love with another female website, but from the enemy side of the war, and it tries to win her by winning in the race.)
		</div>
				<div class="div">
			Blah Blah Blah Blah.Our Company is Great.... It is made by Zeus himself. It was the son of thetis and zeus. It has no weak point except it's heel. And this website will be killed when paris shoots at it's footer with an arrow, while this website is riding a horse. (The website falls in love with another female website, but from the enemy side of the war, and it tries to win her by winning in the race.)
		</div>
				<div class="div">
			Blah Blah Blah Blah.Our Company is Great.... It is made by Zeus himself. It was the son of thetis and zeus. It has no weak point except it's heel. And this website will be killed when paris shoots at it's footer with an arrow, while this website is riding a horse. (The website falls in love with another female website, but from the enemy side of the war, and it tries to win her by winning in the race.)
		</div>
				<div class="div">
			Blah Blah Blah Blah.Our Company is Great.... It is made by Zeus himself. It was the son of thetis and zeus. It has no weak point except it's heel. And this website will be killed when paris shoots at it's footer with an arrow, while this website is riding a horse. (The website falls in love with another female website, but from the enemy side of the war, and it tries to win her by winning in the race.)
		</div>
	</div>	

	










	<div id="order" class="collective container" >
		
	<p class="error"></p>
	<div class="row">
		<div class="col-xs-1">
		</div>
		
		<div class="col-xs-5 order1">
			<h1>Order</h1>
			<form id="form1" action="index.php">
				<div class="form-group">
					<label for="name">Name</label>
					<input class="form-control" type="text" name="name" placeholder="Name"/>
				</div>
				<div class="form-group">
					<label for="name">Email</label>
					<input class="form-control" type="text" name="email" placeholder="Email"/>
				</div>
				<div class="form-group">
					<label for="name">Phone</label>
					<input class="form-control" type="text" name="phone" placeholder="Phone"/>
				</div>
				<label for="comment">Comment</label>
				<textarea name="comment" form="form1" class="form-control" rows="5" col="40" placeholder="Comment" required></textarea>
					<br>
				<span display="inline">
				<label for="image">Template File:</label>
				<input type="file" name="image" id="fileSubmit">
				</span> 
				<br>
				<button type="submit" id="mybtn" onclick="" class="btn btn-default" name="submit">Submit</button>
				<div id="myModal" class="modal">
 					<div class="modal-content">
    					<div class="modal-header">
     						 <span class="close">&times;</span> 
     						 <h2>Submission Successful !</h2>
    					</div>
   					 <div class="modal-body">
     					 <p>Have a nice day...!</p>
   					 </div>
    				<div class="modal-footer">
      					<h3>Thank you for submitting</h3>
   					 </div>
 					 </div>

				</div>

			</form>
		</div>
		<div class="col-xs-5 order1">
		</div>
	
		<div class="col-xs-1">
		</div>
	</div>
	</div>
	<br>
	<br>
	<br>
	<br>









	<div id="footer" class="container">
		<div class="row">
			<div class="col-xs-4">
				<img src="create.png" width="100px" height="100px" style="margin-bottom:-20px;">
				<br>
				<h1><strong>Create</strong></h1>	
			</div>
		<div class="col-xs-4">
			<img src="design.gif" width="100px" height="100px" style="margin-bottom:-20px;">
			<br>
			<h1><strong>Design</strong></h1>
		</div>
		<div class="col-xs-4">
			<img src="develop.gif" width="100px" height="100px" style="margin-bottom:-20px; margin-right:-30px;">
			<br>
			<h1><strong>Develop</strong></h1>
		</div>
		</div>
	</div>





	<script type="text/js">
		document.getElementById("about").innerHTML = getCurrentYPos();
	</script>
	<div id="about">
		<p class="error"></p>
		<div class="container collective" id="about1" >

			<h1>About Us</h1>
			<p>This website is made by two students of IIIT Allahabad.</p>
			<h3>Rathod Veerender</h3>
				
				
				<p>Rathod is a student at IIIT Allahabad. 
				He is very passionate about photography,
				 and is one of the coordinators of 
				 the photography society of IIITA.
				 He eats while he is not busy, and sleeps when he is.
				</p>
			</h3>
		<br>
			<h3>Surya Prakash</h3>
			
			<p>
				Hello There!!.My name is Surya. I am the one who wrote the content of this 
				website. Don't worry if it doesn't make any sense.It's not meant to be.
				<br>
				I am a science enthusiast. I have particular interest in quantum mechanics and
				artificial intelligence.'
			</p>
		
		</div>
	</div>
	







	<div id="contact" class="container" >
		<p class="error"></p>
		<div class="row">
			<div class="col-xs-2">
				
			</div>
			<div class="col-xs-3 contact1">
				<div class="mixer">
 					<img src="vinay.jpg" alt="surya" class="image">
  					<div class="overlay">
   						<div class="text">
   							<a href="https://www.facebook.com/profile.php?id=100014576612162" class="fa fa-facebook"></a>
   						</div>
  					</div>
				</div>
        	
        	</div>
        	<div class="col-xs-2">
        		
			</div>
			<div class="col-xs-3 contact1" >
				<div class="mixer">
 					<img src="myimg.jpg" alt="rathod" class="image">
  					<div class="overlay">
   						<div class="text">
   							<a href="https://www.facebook.com/rathod.veerender.7" class="fa fa-facebook" class="rathod"></a>
   						</div>
  					</div>
				</div>
			</div>
			<div class="col-xs-2">
				 
			</div>
    	</div>
    	<p class="error"></p>
    </div>

	
	<!--button id="btn"></button-->

</div>
<?php
include 'totalPhp.php';
?>



</body>
</html>