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
        
        <title>Tour Result </title>
        
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
                            <a class="logo-text" href="index.php" title="Mem&eacute;nto">Hotel<span>&</span>tour</a>                        
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
        
            <div class="all_h">
                <div id="tour_ser">
                    <h2 align="center" style="margin-bottom:20px; color:#888888;">BROWSE TOURS</h2>
                    <form action="result.php" method="get" enctype="multipart/form-data">
                        <input type="text" name="user_query" placeholder="Search Tour Name....">
                        <input type="submit" name="search" value="Search" >
                    </form>
                </div>

                <div id="hotels">
                    <?php
        if(isset($_GET['search'])){
          $user_query = $_GET['user_query'];
        $get_tour = "select * from tour where t_title like '%$user_query%'";
            $run_tour = mysqli_query($con, $get_tour);
            while($row_tour=mysqli_fetch_array($run_tour)){
              $t_id =  $row_tour['t_id'];
              $t_name =  $row_tour['t_title'];
              $t_desc =  $row_tour['t_desc'];
              $t_price =  $row_tour['t_price'];
              $t_image =  $row_tour['t_img1'];

              echo "
              <div id='single'>
               <a href='tour_detail.php?t_id=$t_id'><img src='admin/t_image/$t_image' height='150' width='150' alt=''></a>
            
              <p><h2>$t_name</h2><p/> 
              </div>
              ";
            }
          }
        ?>
                </div>
               
            </div>

            
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