<?php
session_start();

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
}
else{


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
        
        <title>Admin-content</title>
        
        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <!-- [favicon] end --> 
        
        <!-- CSS Main -->
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="style.css" />
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

input[type=submit]{
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    color: black;
    background-color: white;

}
input[type=submit]:hover{
    color: white;
    background-color: black;

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
                            <a class="logo-text" href="index.php" title="Mem&eacute;nto">Man<span>a</span>ge</a>                        
                        </h1>
                        <p>Your Content</p>
                    </div>
                    <!-- END LOGO -->  
                    
                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <ul id="menu-main-nav" class="level-1">
                            
                            <li>
                                <a href="index.php"><i class="icon-home"></i>Home</a>
                                
                            </li>
                            
                            <li>
                                <a href="index.php?insert_hotel"><i class="icon-film"></i>Insert Hotel</a>
                                
                            </li>
                            <li>
                                <a href="index.php?view_hotel"><i class="icon-film"></i>View all Hotels</a>
                                
                            </li>
                            
                            <li>
                                <a href="index.php?insert_tours"><i class="icon-picture"></i> Insert Tour</a>
                            </li>
                             <li>
                                <a href="index.php?view_tours"><i class="icon-picture"></i> View all Tours</a>
                            </li>
                            
                                    <li><a href="logout.php"><i class="icon-edit"></i> Logout</a></li>
                                
                            </li>
                            
                        </ul>
                    </div>
                    <!-- END NAV -->     
                </div>
            </div>
            <!-- END HEADER -->
        
            <div class="all_t">
                    <h2 align="center" style="color:red; padding-top:50px; padding-bottom:50px;"><?php echo @$_GET['loggedin']; ?></h2>
                <?php
                    include("include/db.php");
                    if(isset($_GET['insert_hotel'])){
                        include("insert_hotel.php");
                    }

                    if(isset($_GET['view_hotel'])){
                        include("view_hotel.php");
                    }

                    if(isset($_GET['insert_tours'])){
                        include("insert_tour.php");
                    }


                    if(isset($_GET['view_tours'])){
                        include("view_tours.php");
                    }

                    if(isset($_GET['edit_hotel'])){
                        include("edit_hotel.php");
                    }

                    if(isset($_GET['edit_tour'])){
                        include("edit_tour.php");
                    }
                ?>
               
            </div>

            
            <div class="clear"></div>
            
        </div>
        <!-- END WRAPPER -->
        
        <div id="footer" class="sidebar-right">
            
        </div>
        

        <!-- START FOOTER -->
        <div id="copyright" class="group">
            <div class="inner group">
                <div class="left">
                    <p>
                    	Copyright <a href="http://hotelsbooking.pk"><strong>Hotel[&]Tour</strong></a> 2017
                    	</a>
                    </p>
                </div>
                <div class="right">
                    <a href="#" class="socials facebook" style="font-size:30px;" title="Facebook">F</a>
                    <a href="#" class="socials twitter" style="font-size:30px;" title="Twitter">T</a>
                   
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



<?php   }  ?>