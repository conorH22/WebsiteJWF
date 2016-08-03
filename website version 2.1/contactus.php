<!doctype html>
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
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
		
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		
	
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">JOHNNY WALSH FLOOR COVERINGS</h1>
				
                <nav>
                    <ul>
                       <li><a href="http://localhost/index.html">Home</a></li>
                        <li><a href="http://localhost/services.html">Services</a></li>
                        <li><a href="http://localhost/contactus.php">Contact Us</a></li>
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
			<div>
				<label for="name">Your Name (first and last):</label>
				<input id="name" name="name" pattern="([a-zA-Z]{3,30}\s*)+[a-zA-Z]{3,30}"
							placeholder="Dwight schultz" required aria-required="true">
			</div>
			<div>
				<label for "email">Your Email address:</label>
				<input id ="email" name="email" type="email" 
				placeholder="dwight.schultz@gmail.com"
				required aria-required="true";>
			</div>
	
			
			<div>
				<label for="tel">Your Telephone No.: </label>
				<input id="tel" name="tel" type="tel" placeholder="012-1234567"
				autocomplete="off" required aria-required="true">
			</div>
			<div>
			<h4>Your message:</h4>
			
			
			<textarea cols=40  rows =5 name=message></textarea>
			<br>  
			<input type="submit" Name="submit" value="Submit">
			</form>
			</div>
			 <br>
			 <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAeXG_GAenACCFCZi-BXIIvPzFrGZVeblY'></script>
			 <div style='overflow:hidden;height:400px;width:500px;'>
			 <div id='gmap_canvas' style='height:400px;width:500px;'></div>
			 <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
			 <a href='https://embedmaps.org/'>google maps embed directions</a> 
			 <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c3f7c4d9afceb5167c15ae4df11a97e96d834bd8'></script>
			 <script type='text/javascript'>
			 function init_map(){
				 var myOptions = {zoom:13,center:new google.maps.LatLng(52.6474361,-8.420055899999966),mapTypeId: google.maps.MapTypeId.ROADMAP};
				 map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
				 marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(52.6474361,-8.420055899999966)});
				 infowindow = new google.maps.InfoWindow({content:'<strong>JohnnyWalshFloorCoverings</strong><br> Farnane, Murroe,<br> Co.Limerick<br>'});
				 google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
				 infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			 
						
			
			<div>
					
					
			
                </article>

                <aside>
					<h3>Contact Details:</h3>
                   
					<p>Johnny walsh</p>
                    <p>Address: Farnane, Murroe, Co.Limerick</p>
					<p>Mobile: 087-2644075</p>
						
                </aside>
				
				
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>&#169 johnnywalshfloorcoverings</h3>
				<P> Contact hours:</p>
				<p>Monday to saturday: 8:00am to 10:00pm</p>
            </footer>
        </div>
		

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
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
    $message = $name . " " .  " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>