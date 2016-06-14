<?php
$email = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
		{   

		$valid = true;
		$email= test_input($_POST["email"]);

	    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))

	      {

	      $emailErr = "Invalid email format"; 

	      $valid= false;

	      }
		
		if ($valid) {

		$to       = 'hello@getminiera.com';

		$subject  = 'Subscription - getminiera';

		$message  = "<html><body><h3 style = 'color:green;'>Email</h3>".$email."\r\n\n\n</body></html>";

		$headers  = 'From: hello@getminiera.com' . "\r\n" .

		$headers .= "MIME-Version: 1.0\r\n";

		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		mail($to, $subject, $message, $headers);
	}
	}
		function test_input($data)

		{

			$data= trim($data);

			$data= stripslashes($data);

			$data= htmlspecialchars($data);

			return $data;	

		}

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="miniera, app, android, launcher, socialfeeds, today, now, event widget, artincodes, startup">
    <meta name="description" content="Your android homescreen redesigned to social experience">
    <link rel="shortcut icon" type="image/png" href="fav.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" id="ppstyle" type="text/css" href="style.css">
    <link rel='stylesheet' href='css/animate.css' /><link rel='stylesheet' href='css/font-awesome.min.css'/><link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="js/jquery-2.1.0.min.js">
    	$("window").load(function() {
  		$("body").removeClass("preload");
		});
    </script>
    <script src="js/bootstrap.js"></script>
    <script src="js/blocs.js"></script>
    
    <title>Miniera - Launcher for android</title>
</head>
<body class="preload">

<!-- Main container -->
<div class="page-container">
    
<!-- home -->
<div id="home" class="bloc  bg-bg2 d-bloc">
	<div class="container bloc-xl">
		<div class="row">
			<div class="col-sm-12">
				<h2 class=" animDelay04 mg-sm fadeInUp text-right animated">
					<strong>MINIERA</strong> for ANDROID
				</h2>
				<h4 class=" animDelay06 mg-lg fadeInUp text-right animated">
					Intelligent, Contextual Android Launcher to get things done faster
				</h4>
				<h4 class=" animDelay06 mg-lg fadeInUp text-right animated" style="color:black;">
					<strong>LIve soon in play store, stay tuned !</strong>
				</h4>
			</div>
		</div>
	</div>
</div>
<!-- home END -->

<!-- bloc-1 -->
<div class="bloc l-bloc " id="bloc-1">
	<div class="container">
		<div class="row voffset">
			<div class="col-sm-12">
				<h1 class="text-center mg-lg  fadeIn animDelay04 animated">
					A smart Launcher for android which keeps track of everything that makes a user’s day. 
					<br /><br />
					
				</h1><img src="img/icon.png" width="140" class="img-responsive center-block animDelay02 fadeIn mg-lg animated" alt='' />
				<h3 class="text-center mg-clear ">
					Features in Version 1.0
				</h3>
			</div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- bloc-2 -->
<div class="bloc  l-bloc" id="bloc-2">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-4">
				<img src="img/block2.png" width="320" class="img-responsive center-block mg-lg fadeInLeft animDelay04 animated" alt='' />
				<h3 class="text-center mg-md  fadeInLeft animDelay04 animated">
					Mini Drawer
				</h3>
				<p class="text-center  fadeInLeft animDelay06 animated">
					User your mini drawer for quick acess to <br /> most relevant apps.
				</p>
			</div>
			<div class="col-sm-4">
				<img src="img/screens.png" width="320" class="img-responsive center-block mg-lg animDelay04 fadeInUp animated" alt='' />
				<h3 class="text-center mg-md  fadeInUp animDelay08 animated">
					<span>Now Mode</span>
				</h3>
				<p class="text-center  fadeInUp animDelay08 animated">
					Get feeds, on what's happening now<br />Save your precious time!
				</p>
			</div>
			<div class="col-sm-4">
				<img src="img/design2.png" width="320" class="img-responsive center-block mg-lg fadeInRight animDelay04 animated" alt='' />
				<h3 class="text-center mg-md  fadeInRight animDelay04 animated">
					<span>Entertainment mode</span>
				</h3>
				<p class="text-center  fadeInRight animDelay06 animated">
					Browse music photos etc. directly from your home<br />Even take a quick snap on a tap.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-2 END -->

<!-- Center -->
<div class="bloc  bg-center1 d-bloc" id="center">
	<div class="container bloc-xl">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="mg-md text-center  animDelay02 fadeInUp animated">
					Get relevant feeds, upates, post updates to social networks – all with a  quick swipe and tap.  
				</h1>
			</div>
		</div>
	</div>
</div>
<!-- center END -->

<!-- Footer - bloc-4 -->
<div class="bloc  l-bloc" id="bloc-4">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center mg-lg animDelay02 fadeInDown  animated">
					<p class="text-center mg-lg animDelay02 fadeInDown  animated" style="font-size:80%;"><br />We bring to android an amazing user experience with context aware contents.<br /><br /></p>
					Live soon in play store. Stay tuned.
				</h1>
				
				
	<div class="text-center">
		<span><?php echo $emailErr; ?></span>
		<form acttion="" method="POST">
        <!-- Text Input Field -->
        <div class="mc-field-group bounceIn animDelay02  animated">
        	<input type="email" placeholder="Your Email Address" name="email" class="required email" id="mce-EMAIL">
        </div>
        <!-- /Text Input Field -->

        <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
        </div>

        <div style="position: absolute; left: -5000px;"><input type="text" name="b_0b5586be71b0fee16a03f5684_e41ec18eab" tabindex="-1" value=""></div>

        <!-- Submit Button -->
        <div class="clear bounceIn animDelay02  animated">
        	<input type="submit" value="Get updates" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
        <!-- /Submit Button -->
        </form>
    </div>


<br><br>
				
				<div class="text-center">
					<a href="index-2.html" class="icon-md" target="_blank"></a>
					<div class="text-center">
						<a href="https://twitter.com/minieralauncher" class="bounceIn animDelay02 animated" target="_blank"><span class="fa fa-twitter icon-md icon-6 bounceIn animDelay04 animated"></span></a>
						<a href="https://twitter.com/minieralauncher" class="bounceIn animDelay02 animated" target="_blank" style="margin-left:3%;"><span class="fa fa-facebook icon-md icon-6 bounceIn animDelay04 animated"></span></a>
					</div><br>
				</div>
		        <hr>
				
				<p class="text-center mg-lg fadeInUp animDelay02 animated">
					by <a href="http://www.artincodes.com/" target="_blank">ArtInCodes</a>. We'd love to hear from you. Drop us a line at <a href="mailto:hello@getminiera.com">hello@getminiera.com</a> •
					<br /><br />
				</p>
			</div>
			<div class="col-md-8 col-md-offset-2 col-sm-12">
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-4 END -->

</div>
<!-- Main container END -->

</body>
</html>
