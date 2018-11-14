<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Contact | Mighty Demolex Publishe</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.html">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    
<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/lightgreen.css" />-->
    <!--<link rel="stylesheet" href="css/colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <link rel="stylesheet" href="css/colors/red.css" />
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/brown.css" />-->
    
<!-- just remove the below comments witch bg patterns you want to use --> 
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-nine.css" />-->
       
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- style switcher -->
    <link rel = "stylesheet" media = "screen" href = "js/style-switcher/color-switcher.css" />

    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin.css" />
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin2.css" />
	
    <!-- faqs -->
    <link rel="stylesheet" href="js/accordion/accordion.css" type="text/css" media="all">
    
    <!-- progressbar -->
  	<link rel="stylesheet" href="js/progressbar/ui.progress-bar.css">
    

</head>

<body>

<div class="site_wrapper">

    <div class="container_full">
    	
        <div class="menu_sticky">
        
    	<div class="container">

    		<div class="one_fourth">
            
            	<div id="logo_innerpage"><a href="index.php"><h1 style="margin-left: 9px;"> Mighty <i style="margin-top: 7px; font-weight: bold; color: #000;">Demolex Publishers</i></h1></a></div><!-- end logo -->
                
            </div><!-- end top social icons -->
            	
            <div class="three_fourth last">
               
               <?php include("nav.php"); ?>
          
        	</div>
                
		</div> 
  
    </div><!-- end nav menu -->
    
</div><!-- end top -->

<div class="clearfix"></div>
 
<div class="page_title" style="background-color: #f00;">

	<div class="container" >
		<div class="title"><h1 style="color: #fff;">Contact Us</h1></div>
        <div class="pagenation" style="color: #fff;"><a href="index.php">Home</a> <i>/</i> <a href="#">Pages</a> <i>/</i> Contact Us</div>
	</div>
</div><!-- end page title --> 


<!-- Contant
======================================= -->

<div class="container">

    <div class="content_fullwidth">
            
    <div class="one_half">
        

    <p>Feel free to talk to our online representative at any time you please using the below instant messaging forms.</p>
    <br />
    <p>Please be patient while waiting for response. (24/7 Support!)<br>
    <strong>Phone General Inquiries: +234-803-439-4972</strong></p>

    <br />
    <h3>Contact Form</h3>
	<?php if(isset($_REQUEST["thanks"])){ ?>
						<div class="alert alert-success" style="background: green; color: #fff; padding: 10px; border-radius: 10px; font-weight: bold;">
						<?php echo"Thank you <b>$_REQUEST[thanks]</b> for contacting us. <br> We assure you a reply within a short while.<br> We trust you'll have a nice day. 
						 </div>
						"; 
					
					   
		}
	?>
    <form action="contactprocess.php" method="post">
    
        <fieldset>
        
                
        <label for="name" class="blocklabel">Your Name*</label>
        <p class="" ><input name="name" class="input_bg" type="text" id="name" value=''/></p>
        
        
        <label for="email" class="blocklabel">E-Mail*</label>
        <p class="" ><input name="email" class="input_bg" type="text" id="email" value='' /></p>
        
        
        <label for="website" class="blocklabel">Phone Number*</label>
        <p><input name="phone" class="input_bg" type="text" id="website" value=""/></p>
        
        
        <label for="message" class="blocklabel">Your Message*</label>
        <p class=""><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" ></textarea></p>
        
        
        <p>
       
        <div class="clearfix"></div>
        <input name="send" type="submit" value="SUBMIT" class="comment_submit" id="send"/></p>
                
        </fieldset>
        
        </form> 
    
    </div>
               
    <div class="one_half last">
    
        <div class="address-info">
            <h3>Address Info</h3>
                <ul>
                <li>
                <strong>Company Name</strong><br />
                Ilorin, Kwara State, Nigeria.<br />
                Telephone: +234-803-439-4972<br />
                Tel 2: +234-806-699-6189<br />
                E-mail: <a href="mailto:info@mightydemolexpublishers.com">info@mightydemolexpublishers.com</a><br />
               
                </li>
            </ul>
        </div>

         <h3>Find the Address</h3>
            <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A">View Larger Map</a></small>
        
    </div>
            
</div>

</div><!-- end content area -->


<div class="clearfix mar_top4"></div>

<div class="punch_text_02">
	
    <div class="container">
    
            Contact us today, request a quote for our services. <a href="contact.php" class="readmore_but_03"><i class="icon-envelope"></i> Contact Now!</a>
        
    </div>
    
</div>


<?php include("footer.php"); ?>



 
</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

<!-- progress bar -->
<script src="js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>

<!-- jquery jcarousel -->
<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>

<!-- top show hide plugin script-->
<script src="js/show-hide-plugin/showHide.js" type="text/javascript"></script>

<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>

<!-- accordion -->
<script type="text/javascript" src="js/accordion/custom.html"></script>



</body>

</html>
