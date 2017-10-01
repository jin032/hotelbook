<?php
include('include/db.php');
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="en-US">
    <!--<![endif]-->
    <head>
        
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        
        <title>Hotel&Tour</title>
        
        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <!-- [favicon] end --> 
        
        <!-- CSS Main -->
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="normalize.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="css/lessthen960.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/lessthen600.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="css/lessthen480.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/memento.css"  />
        
        <!-- CSS Plugin -->
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/tipsy.css" type="text/css" media="all" />
        <link rel='stylesheet' href='css/buttons.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/labels.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/wells.min.css' type='text/css' media='all' />
        
        <!-- CSS Slider -->
        <link rel="stylesheet" href="css/slider-thumbnails.css" type="text/css" media="all" />
        
        <link rel="stylesheet" type="text/css" media="all" href="css/homes/home.css" />
        

        <!-- FONTS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans&amp;subset=latin%2Ccyrillic%2Cgreek&amp;ver=3.4.1" type="text/css" media="all" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light&amp;subset=latin%2Ccyrillic%2Cgreek&amp;ver=3.4.1" type="text/css" media="all" />
        <link rel='stylesheet' href='http://yourinspirationweb.com/demo/memento/wp-content/themes/memento/core/includes/css/font-awesome.css?ver=3.4.1' type='text/css' media='all' />
        <link rel='stylesheet' href='http://yourinspirationweb.com/demo/memento/wp-content/themes/memento/fonts/socialico/stylesheet.css?ver=3.4.1' type='text/css' media='all' />
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed%3A300%7CPlayfair+Display%3A400italic&#038;ver=3.4.1' type='text/css' media='all' />
        
        <!-- JavaScripts -->
        <script type="text/javascript">
            var yiw_prettyphoto_style = 'pp_default';
        </script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="js/jquery.tweetable.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.aw-showcase.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type='text/javascript' src="js/jquery.eislideshow.js"></script>
        <script type='text/javascript' src="js/swfobject.js"></script>
        <script type='text/javascript' src='js/jquery.cookie.js'></script>
        <script type='text/javascript' src='js/buttons.min.js'></script>
        <script type='text/javascript' src='js/layerslider.kreaturamedia.jquery-min.js'></script>
        <script type='text/javascript' src='js/jquery.quicksand.js'></script>
        <style> 
input[type=text] {
    width: 230px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 2px 2px; 
    background-repeat: no-repeat;
    
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 300px;
}
input[type=submit]{
  box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    color: white;
    background-color: black;

}
input[type=submit]:hover{
    color: black;
    background-color: white;

}
</style>
    </head>
    <body class="no_js responsive boxed-layout chrome ">
        
        <!-- TOPBAR -->
        <div id="topbar">
            <div class="inner group">
                
                <div class="topbar-left">
                    <!-- START TWITTER -->
                    <div id="twitter-slider" class="group">
                        <div class="tweets-list"></div>
                        <script type="text/javascript" src="js/twitter.js" ></script>	
                    </div>
                    <!-- END TWITTER -->
                </div>
                
                <div class="topbar-right">
                    
                    <ul class="topbar-level-1">
                        <li style="padding-right:400px; color:white;">Call Us-0321-8484087</li>
                        <li>
                            <form action="result.php" method="get" enctype="multipart/form-data">
                            <input type="text" name="user_query" placeholder="Search Hotel Name....">
                            <input type="submit" name="search" value="Search" >
                            </form>
                        </li>
                        <li><a href="contact.php"><i class="icon-envelope"></i> Mail us</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        <!-- END TOPBAR -->
        
        <!-- START WRAPPER -->
        <div class="wrapper group">
            <!-- START HEADER -->
            <div id="header" class="group">
                <div class="group inner">
                    
                    <!-- START LOGO -->
                    <div id="logo" class="group">
                        <h1>
                            <a class="logo-text" href="index.php" title="Mem&eacute;nto">Hotel<span>-</span>Tour</a>                        
                        </h1>
                       
                    </div>
                    <!-- END LOGO -->  
                    
                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <ul id="menu-main-nav" class="level-1">
                            
                            <li>
                                <a href="index.php"><i class="icon-home"></i>Home</a>
                                <ul class="sub-menu">
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="image.php">Images</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li>
                                <a href="tours.php"><i class="icon-film"></i>Tours</a>
                            </li>
                            
                            <li>
                                <a href="all_hotel.php"><i class="icon-picture"></i> Hotels</a>
                            </li>
                            
                            <li>
                                <a href="faqs.html"><i class="icon-file"></i>Faq</a>
                            </li>
                            
                            <li>
                                <a href="404.html"><i class="icon-calendar"></i>Blog</a>
                                
                            </li>
                            
                            <li>
                                <a href="contact.php"><i class="icon-list-alt"></i>Contacts</a>
                            </li>
                            
                            <li>
                                        <a href="#"><i class="icon-leaf"></i>Gallery</a>
                                        <ul class="sub-menu">
                                            <li><a href="gallery-responsive.html">Responsive</a></li>
                                            <li><a href="gallery-filterable.html">Filterable</a></li>
                                        </ul>
                                    </li>
                            
                        </ul>
                    </div>
                    <!-- END NAV -->     
                </div>
            </div>
            <!-- END HEADER -->
        
            <!-- SLIDER -->
            <!-- START SLIDER -->
            <div id="slider" class="thumbnails group inner">
                <div class="showcase group">
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <!-- If the slide contains multiple elements you should wrap them in a div with the class
                                .showcase-content-wrapper. We usually wrap even if there is only one element,
                                because it looks better. -->
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/001.jpg" width="1920" height="380" alt="A fresh &amp; clean design" />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/001-228x100.jpg" />
                        </div>
                        <div class="showcase-text">
                            <h2>A fresh & clean view</h2>
                            <p>
                            <p>another nice and beautiful destination</p>
                            </p>
                        </div>
                    </div>
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/Bedroom-Sets-Banner-2000px-x-400px.jpg" width="1920" height="364" alt="Vintage. Sensual." />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/80061189.jpg"/>
                        </div>
                        <div class="showcase-text">
                            <h2>Vintage. Sensual.</h2>
                            <p>
                            <p>a great place for your tours.</p>
                            </p>
                        </div>
                    </div>
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/003.jpg" width="1920" height="380" alt="M&egrave;mento style." />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/003-228x100.jpg" />
                        </div>
                        <div class="showcase-text">
                            <h2>Mèmento style.</h2>
                            <p>
                            <p>Love this place and love the nature.</p>
                            </p>
                        </div>
                    </div>
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/Dining-Room-Banner-2000px-x-400px.jpg" width="1920" height="380" alt="Lovely Theme" />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/images (6).jpg" height="400"/>
                        </div>
                        <div class="showcase-text">
                            <h2>Lovely Destination</h2>
                            <p>
                            <p>a sensual feminine image</p>
                            </p>
                        </div>
                    </div>
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/Kaghan_Valley_Banner.jpg" width="1920" height="380" alt="Wow. Love it." />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/DSC04853-660x330.jpg" />
                        </div>
                        <div class="showcase-text">
                            <h2>Wow. Love it.</h2>
                            <p>
                            <p>a creative corporate place</p>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- END SLIDER -->
            <script type="text/javascript">      
	            var 	yiw_slider_type = 'thumbnails',
	                          yiw_slider_thumbnails_fx = 'fade',
	            yiw_slider_thumbnails_speed = 500, yiw_slider_thumbnails_timeout = 5000;
	        </script>
	        <!-- /SLIDER -->
            
            <div class="inner home-row group">
                
                <div class="widget-first widget one-third widget-icon-text group">
                    <h2><img class="icon-img" src="images/icons/smile.png" alt="" /> Meet Us</h2>
                    <p>suitable for business/corporate peoples,  creative destinations and personal places. </p>
                </div>
                
                <div class="widget one-third widget-icon-text group">
                    <h2><i class="icon-envelope"></i> Contact the team!</h2>
                    <p>Feel free to contact us for additional info or for a free quote!</p>
                </div>
                
                <div class="widget-last widget one-third widget-icon-text group">
                    <h2><i class="icon-heart-empty reverse"></i> You will <span>love us</span>.</h2>
                    <p>You have only to try us. We are sure: you will love our services.</p>
                </div>
                
            </div>
            <div class="tour">
                <section>
                <div id="hea">
                    <h2>TOP TOUR DESTINATIONS</h2>
                </div>
                <div id="t_img">
                    
                    <?php
                        $sel_t = "select * from tour order by rand() LIMIT 0,3";
                        $run_t = mysqli_query($con, $sel_t);
                        while($row_t = mysqli_fetch_array($run_t)){
                        $t_id = $row_t['t_id'];
                        $t_title = $row_t['t_title'];
                        $t_img = $row_t['t_img1'];
                        echo "
                       <div id='single'>
                        <a href='tour_detail.php?t_id=$t_id'><img src='admin/t_image/$t_img' height='150' width='200'></a>
                        <p><h2>$t_title</h2><p/>
                        </div>
                        ";
                            }
                    ?>

                </div>
            </div>

            <div class="hotel">
                <div id="hea1">
                    <h2><a href="all_hotel.php">ALL HOTELS</a></h2>
                </div>
                
                    <?php
                        $get_hotel = "select * from hotel order by rand() LIMIT 0,6";
                        $run_hotel = mysqli_query($con, $get_hotel);
                        while($row_hotel=mysqli_fetch_array($run_hotel)){
                        $h_id =  $row_hotel['h_id'];
                        $h_name =  $row_hotel['h_title'];
                        $h_image =  $row_hotel['h_image'];

                        echo "
                        
                        <div id='h_img'>
                        <div id='single'>
                        <a href='detail.php?h_id=$h_id'><img src='admin/h_image/$h_image' height='150' width='200' alt=''></a> 
                        <p><h2>$h_name</h2><p/>
                        </div>
                        </div>

                                ";
                            }
                    ?>
                
            </div>
            </section>
            
            <div class="clear"></div>
            
        </div>
        <!-- END WRAPPER -->
        
        <div id="footer" class="sidebar-right">
            <div class="group inner footer_row_1 footer_cols_3">
                
                
                
                <div class="widget widget_nav_menu">
                    <h3>Custom menu</h3>
                    <div class="menu-footer-menu-container">
                        <ul id="menu-footer-menu" class="menu">
                            <li class="columns2"><a href="404.html">Blog</a></li>
                            <li class="columns2"><a href="faqs.html">Faq</a></li>
                            <li class="columns2"><a href="image.php">Images</a></li>
                            <li class="columns2"><a href="contact.php">Contact</a></li>
                            <li class="columns2"><a href="tours.php">Tours</a></li>
                            <li class="columns2"><a href="all_hotel.php">Hotels</a></li>
                            <li class="columns2"><a href="services.php">Services</a></li>
                            <li class="columns2"><a href="gallery-filterable.html">Filterable Gallery</a></li>
                            <li class="columns2"><a href="gallery-responsive.html">Responsive Gallery</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="quick-contact-widget widget two-third last">
                    <div class="widget-last widget quick-contact">
                        <h3>Quick Contact</h3>
                        <form id="contact-form-example" class="contact-form" method="post" action="" enctype="multipart/form-data">
                            <div class="usermessagea"></div>
                            <fieldset>
                                <ul>
                                    <li class="text-field">
                                        <label for="name-example">
                                        <span class="label">Name</span>
                                        </label>
                                        <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><input type="text" name="name" id="name-example" class="required" value="" /></div>
                                        <div class="msg-error"></div>
                                    </li>
                                    <li class="text-field">
                                        <label for="email-example">
                                        <span class="label">Email</span>
                                        </label>
                                        <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="email" id="email-example" class="required email-validate" value="" /></div>
                                        <div class="msg-error"></div>
                                    </li>
                                    <li class="textarea-field">
                                        <label for="message-example">
                                        <span class="label">Message</span>
                                        </label>
                                        <div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span><textarea name="message" id="message-example" rows="8" cols="30" class="required"></textarea></div>
                                        <div class="msg-error"></div>
                                    </li>
                                    <li class="submit-button">
                                        <input type="submit" name="submit" value="send message" class="sendmail alignright" />           
                                    </li>
                                </ul>
                            </fieldset>
                        </form>
                        <?php


if (isset($_POST['submit'])) {
    $to = "qasim@travel-culture.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    mail($to, $name, $email, $msg);
}


?>
                    </div>
                </div>
                
            </div>
        </div>
        

        <!-- START FOOTER -->
        <div id="copyright" class="group">
            <div class="inner group">
                <div class="left">
                    <p>
                    	Copyright <a href="http://hotelsbooking.pk"><strong>Hotel[&]Tour</strong></a> 2017
                    </p>
                </div>
                <div class="right">
                    <a href="#" class="socials facebook" style="font-size:30px;" title="Facebook"><img src="img/facebook-7-256.gif" width="25" height="23"> </a>
                    <a href="#" class="socials twitter" style="font-size:30px;" title="Twitter"><img src="img/twitter-4-512.png" width="25" height="23"></a>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="js/jquery.custom.js"></script>
        <script type="text/javascript" src="js/contact.js"></script>
        
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36516261-21']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>		
    </body>
</html>