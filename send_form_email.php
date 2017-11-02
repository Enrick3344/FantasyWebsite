<?php
if(isset($_REQUEST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "enrick3344minecraft@hotmail.com";
    $email_subject = "Contact from website";
 
    function died($error) {
        // your error code can go here
?>
<html>
<head>
	<script src="//www.socialintents.com/api/socialintents.1.1.js#2c9fa5635e778df2015e7d92c2720398" async="async"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 360px)" href="mobile.css">
	<link rel="stylesheet" href="assets/style.css">
	<link rel="shortcut icon" href="favicon.ico">
    <title>Fantasy Network</title>
    <meta charset="UTF-8">
</head>
<div class="fade-in">
<header>
<br>
<br>

	<h1>Fantasy Network</h1>
    <li><a class="nav" href="index.html">Home</a>    <a class="nav" href="servers.html">Servers</a>    <a class="nav" href="team.html">Our Team</a>    <a class="nav" href="articles.html">Articles</a>    <a class="nav" href="contact.html">Contact Us</a></li>
	</header>
<body class=fadeIn>
	<br>
	<br>
	<div id="article">
	<br>
	<br>
	<p>An error occured while trying to send your message. please try again!</p>
	<br>
	<br>
	<img class="logo" src="pictures/Fantasy_Logo.png" alt="FantasyLogo"/>
	</div>
	<script type="text/php">header( "refresh:5;url=contact.html" );</script>
	
	<!--FEATURED MENU DONT TOUCH UNDER-->
	<div id="news">
		<h3 id="newsh3">Featured</h3>
		<hr style="color: #ac00e6;">
		<p id="newsp">New Articles</p>
		
		<div class="slideshow" style="position: relative;">
			<a class="slidelink" href="better-together-update.html">
				<img class="slidepic" src="pictures/Article.png">
				<div class="atext">
					Better Together Update
				</div>
			</a>
		</div>
		
		<div class="slideshow2" style="position: relative;">	
			<a class="slidelink" href="under-the-island.html">
				<img class="slidepic" src="pictures/Article.png">
				<div class="atext">
					Under The Island</br>Short Story
				</div>
			</a>
		</div>
		
		<div class="slideshow3" style="position: relative;">
			<a class="slidelink" href="#">
				<img class="slidepic" src="pictures/Article.png">
				<div class="atext">
					More Coming Soon...
				</div>
			</a>
		</div>
		
		<div class="buttons">
		<button class="slideleft" onclick="plusDivs(-1)">&#10094;</button>
		<button class="slideright" onclick="plusDivs(1)">&#10095;</button>
		</div>
		<hr class="nextbut">
		
		<p id="newsp">Vote Website <b>&#58;</b></p><a href="http://bit.do/fantasyisland" class="links"><p class="little">bit <b>&#46;</b> do/fantasyisland</p></a>
		<br>
		<br>
		<hr class="nextbut">
		<p id="newsp">Donation Website <b>&#58;</b></p><a href="http://bit.do/fantasybuy" class="links"><p class="little">bit <b>&#46;</b> do/fantasybuy</p></a>
		<br>
		<br>
		<hr class="nextbut">
		<p id="newsp">Server Ip <b>&#58;</b></p><p class="little">fantasyisland <b>&#46;</b> zapto <b>&#46;</b> org</p>
		<br>
		<br>
		<hr class="nextbut">
		<p id="newsp">Server Port <b>&#58;</b></p><p class="little">26443</p>
		<br>
		<br>
		<hr class="nextbut">
		<img class="newslogo" src="pictures/Fantasy_Logo.png" alt="FantasyLogo"/>
	</div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slidepic");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<!--END OF FEATURED MENU-->
</body>
</div>
</html>
<?php
		header( "refresh:5;url=contact.html" );
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_REQUEST['email']) ||
        !isset($_REQUEST['subject']) ||
        !isset($_REQUEST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 

    $email_from = $_REQUEST['email']; // required
    $subject = $_REQUEST['subject']; // not required
    $comments = $_REQUEST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<html>
<head>
	<script src="//www.socialintents.com/api/socialintents.1.1.js#2c9fa5635e778df2015e7d92c2720398" async="async"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 360px)" href="mobile.css">
	<link rel="stylesheet" href="assets/style.css">
	<link rel="shortcut icon" href="favicon.ico">
    <title>Fantasy Network</title>
    <meta charset="UTF-8">
</head>
<div class="fade-in">
<header>
<br>
<br>

	<h1>Fantasy Network</h1>
    <li><a class="nav" href="index.html">Home</a>    <a class="nav" href="servers.html">Servers</a>    <a class="nav" href="team.html">Our Team</a>    <a class="nav" href="articles.html">Articles</a>    <a class="nav" href="contact.html">Contact Us</a></li>
	</header>
<body class=fadeIn>
	<br>
	<br>
	<div id="article">
	<br>
	<br>
	<p>Thanks for contacting us! We will reply to you very soon! Make sure to check your email pretty often!</p>
	<br>
	<br>
	<img class="logo" src="pictures/Fantasy_Logo.png" alt="FantasyLogo"/>
	</div>
	<script type="text/php">header( "refresh:5;url=contact.html" );</script>
	
	<!--FEATURED MENU DONT TOUCH UNDER-->
	<div id="news">
		<h3 id="newsh3">Featured</h3>
		<hr style="color: #ac00e6;">
		<p id="newsp">New Articles</p>
		
		<div class="slideshow" style="position: relative;">
			<a class="slidelink" href="better-together-update.html">
				<img class="slidepic" src="pictures/Article.png">
				<div class="atext">
					Better Together Update
				</div>
			</a>
		</div>
		
		<div class="slideshow2" style="position: relative;">	
			<a class="slidelink" href="under-the-island.html">
				<img class="slidepic" src="pictures/Article.png">
				<div class="atext">
					Under The Island</br>Short Story
				</div>
			</a>
		</div>
		
		<div class="slideshow3" style="position: relative;">
			<a class="slidelink" href="#">
				<img class="slidepic" src="pictures/Article.png">
				<div class="atext">
					More Coming Soon...
				</div>
			</a>
		</div>
		
		<div class="buttons">
		<button class="slideleft" onclick="plusDivs(-1)">&#10094;</button>
		<button class="slideright" onclick="plusDivs(1)">&#10095;</button>
		</div>
		<hr class="nextbut">
		
		<p id="newsp">Vote Website <b>&#58;</b></p><a href="http://bit.do/fantasyisland" class="links"><p class="little">bit <b>&#46;</b> do/fantasyisland</p></a>
		<br>
		<br>
		<hr class="nextbut">
		<p id="newsp">Donation Website <b>&#58;</b></p><a href="http://bit.do/fantasybuy" class="links"><p class="little">bit <b>&#46;</b> do/fantasybuy</p></a>
		<br>
		<br>
		<hr class="nextbut">
		<p id="newsp">Server Ip <b>&#58;</b></p><p class="little">fantasyisland <b>&#46;</b> zapto <b>&#46;</b> org</p>
		<br>
		<br>
		<hr class="nextbut">
		<p id="newsp">Server Port <b>&#58;</b></p><p class="little">26443</p>
		<br>
		<br>
		<hr class="nextbut">
		<img class="newslogo" src="pictures/Fantasy_Logo.png" alt="FantasyLogo"/>
	</div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slidepic");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<!--END OF FEATURED MENU-->
</body>
</div>
</html>
<?php
    header( "refresh:5;url=contact.html" );
}
?>