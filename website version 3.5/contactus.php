<!doctype html>
<!--author: cHolmes-->
<!--date: august 2016-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png">-->

        
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#f0f0f0">
        <link rel="stylesheet" href="css/main.css">
		
        
		 <!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-82763782-1', 'auto');
			ga('send', 'pageview');
		</script>
<!-- End Google Analytics -->
   </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
              <a href ="index.html">
                <img id="icon" src="img/weblogov6.7.gif" alt="johnnywalshfloorcoverings logo"> 
                </a>
                <nav>
                    <ul>
                       <li><a href="index.html" >Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

				<article>
				
					<h2>ContactUs:</h2>
					<p>For more information or if you have any queries, 
					please use the form below and we will contact you as soon as possible.</p>
					<form action="" method="Post">
					 <P> Required *</P>
				<div>
					<label for="name">Your  first and surname Name *:</label>
					<br><input id="name" name="name" pattern="([a-zA-Z]{3,30}\s*)+[a-zA-Z]{3,30}"
								placeholder="your name" required aria-required="true">
				</div>
				<div>
					<label for "email">Your Email address *:</label>
					<br><input id ="email" name="email" type="email" 
					placeholder="YourEmail@gmail.com"
					required aria-required="true";>
				</div>
	
			
				<div>
					<label for="tel">Your Telephone No.*: </label>
					<br><input id="tel" name="tel" type="tel" placeholder="080-3456789"
					autocomplete="off" required aria-required="true">
				</div>
				<div>
				<h4>Your message:</h4>
			
			
				<textarea cols=40  rows =5 name=message></textarea>
				<br>  
				<input type="submit" Name="submit" value="Submit">
				</form>
				</div>
			
				<h3>Location</h3>
				<div id="mapg"></div>
				<br>
				<script>
					function initMap() {
					var myLatLng = {lat: 52.6474361, lng: -8.420055899999966};
	
					var mapDiv = document.getElementById('mapg');
					var map = new google.maps.Map(mapDiv, {
					center: myLatLng,
					zoom: 13
					});
					var marker = new google.maps.Marker({
					position: myLatLng,
					map: map,
          title: 'JohnnyWalshFloorCoverings'
        });
					
					
					

					
				}
				</script>
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeXG_GAenACCFCZi-BXIIvPzFrGZVeblY&callback=initMap">
				</script>
			
                </article>

                <aside>
					<h3>Contact Details:</h3>
                   
					<p>Contact:Johnny walsh</p>
                    <p>Address: Farnane, Murroe, Co.Limerick</p>
					<p>Mobile: 087-2644075</p>
					
					<ul>
					<li><a href="contactus.php"class="class2">Contact Us</a></li>
					
		            </ul>
					
						
                </aside>
				
				
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
               	<ul>
                        <li><a href="index.html"class="class3">Home</a></li>
                        <li><a href="services.html"class="class3">Services</a></li>
                        <li><a href="contactus.php"class="class3">Contact Us</a></li>
                    </ul>
				<br>
                <em>&#169 JohnnyWalshFloorCoverings 2016 </em>
				<br>
				<em>All rights reservered.</em>
				<p> CRO number:240766</p> 
            </footer>
        </div>
		

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<link rel="stylesheet" href="css/normalize.min.css">

        
    </body>
</html>
<?php 
if(isset($_POST['submit'])){
    $to = "lackamoredude@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
	$tel = $_POST['tel'];
    
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name .  " " .  " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>