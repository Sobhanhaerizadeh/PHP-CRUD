<?php
    require_once("dbconfig.php"); 
    // Create a Record !
    if (isset($_POST["btnForm"])){
        $name = $_POST["contact_name"];
        $email = $_POST["contact_email"];
        $subject = $_POST["contact_subject"];
        $message = $_POST["contact_message"];
            $sql = "INSERT INTO contact (`name` , `email`, `subject` , `message`) VALUES(:name, :email, :subject, :message)";
            $query = $connect->prepare($sql);
            $query->bindParam(":name" , $name , PDO::PARAM_STR);
            $query->bindParam(":email" , $email , PDO::PARAM_STR);
            $query->bindParam(":subject" , $subject, PDO::PARAM_STR);
            $query->bindParam(":message" , $message , PDO::PARAM_STR);
            $query->execute();
            $checkLastId = $connect->lastInsertId();
            if ($checkLastId) {
                echo "<script> alert('Your message has been successfully sent'); </script>";
                echo "<script> window.location.href = 'messages.php' </script>";
    }
            else
            echo "<script> alert('ERROR => Your message has not been sent'); </script>";
            
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>The Story - Free Bootstrap Theme</title>
<!--
The Story Theme
http://www.templatemo.com/tm-480-story
-->
        <!-- load stylesheets -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="css/bootstrap.min.css">                                                <!-- Bootstrap style -->
        <link rel="stylesheet" href="css/flexslider.css">                                                   <!-- Flexslider style -->       
        <link rel="stylesheet" href="css/templatemo-style.css">                                             <!-- Templatemo style -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body class="page">
        
            
            <!-- background images -->
            <div class="page-bg-imgs-list">
                <img src="img/story-bg-1.jpg" id="page-1-img" class="main-img" alt="About">
                <img src="img/story-bg-2.jpg" id="page-2-img" alt="Gallery">
                <img src="img/story-bg-3.jpg" id="page-3-img" alt="Services">
                <img src="img/story-bg-4.jpg" id="page-4-img" alt="Contact">                            
            </div>
            
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                        
                        <div class="header">

                            <!-- site title -->
                            <header class="box box-white">
                                <a href="javascript:void(0)" class="js-site-title">
                                    <h1 class="box-text site-title-text">The Story</h1>    
                                </a>            
                            </header>
                            
                            <!-- site navigation -->
                            <nav class="js-nav">
                                <ul class="nav-items-container">

                                    <li data-nav-item-id="page-1" class="block-keep-ratio block-keep-ratio-1-1 block-width-half box box-white box-nav-item js-nav-item pull-xs-left">
                                        <a href="#page-1" class="block-keep-ratio-content box-nav-item-link">
                                            <span class="box-text box-text-nav-item flexbox-center">About</span>
                                        </a>
                                    </li>

                                    <li data-nav-item-id="page-2" class="block-keep-ratio block-keep-ratio-1-1 block-width-half box box-white box-nav-item js-nav-item pull-xs-right">
                                        <a href="#page-2" class="block-keep-ratio-content box-nav-item-link">
                                            <span class="box-text box-text-nav-item flexbox-center">Gallery</span>
                                        </a>
                                    </li>

                                    <li data-nav-item-id="page-3" class="block-keep-ratio block-keep-ratio-1-1 block-width-half box box-white box-nav-item js-nav-item pull-xs-left">
                                        <a href="#page-3" class="block-keep-ratio-content box-nav-item-link">
                                            <span class="box-text box-text-nav-item flexbox-center">Services</span>
                                        </a>
                                    </li>

                                    <li data-nav-item-id="page-4" class="block-keep-ratio block-keep-ratio-1-1 block-width-half box box-white box-nav-item js-nav-item pull-xs-right">
                                        <a href="#page-4" class="block-keep-ratio-content box-nav-item-link">
                                            <span class="box-text box-text-nav-item flexbox-center">Contact</span>
                                        </a>
                                    </li>

                                </ul>
                            </nav>    
                        </div> <!-- .header -->

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                        <div class="content-wrapper js-content-wrapper">
                            <!-- about -->
                            <section data-page-id="page-1" class="content js-content">
                                
                                <header class="box box-black margin-b-20">
                                    <h2 class="box-text page-title-text">About the story</h2>
                                </header>
                                
                                <div class="content-text">
                                    <p>Story is free Bootstrap (v4.0 alpha 2) web template provided by templatemo. You can download, modify and use this layout for any website. Please tell your friends about us. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                    <p>Vivamus imperdiet tellus lobortis tellus fermentum, at varius purus tincidunt. Aenean quis tellus molestie, laoreet massa a, maximus est. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                    </p>
                                </div>            

                            </section> <!-- #about -->

                            <!-- gallery -->
                            <section data-page-id="page-2" class="content content-gallery js-content">
                                
                                <header class="box box-black margin-b-20">
                                    <h2 class="box-text page-title-text">Galllery</h2>
                                </header>
                                
                                <div class="content-text content-text-gallery">
                                    
                                    <!-- <p>Credits go to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for images.</p> -->

                                    <div class="flexslider-wrapper">

                                        <div id="slider" class="flexslider">
                                            <ul class="slides">
                                                <li><img src="img/slider/slide1.jpg" alt="Slide 1" /></li>
                                                <li><img src="img/slider/slide2.jpg" alt="Slide 2" /></li>
                                                <li><img src="img/slider/slide3.jpg" alt="Slide 3" /></li>
                                                <li><img src="img/slider/slide4.jpg" alt="Slide 4" /></li>
                                                <li><img src="img/slider/slide5.jpg" alt="Slide 5" /></li>
                                                <li><img src="img/slider/slide6.jpg" alt="Slide 6" /></li>
                                            </ul>
                                        </div> <!-- #slider -->
                                      
                                        <div id="carousel" class="flexslider">
                                            <ul class="slides">
                                                <li><img src="img/slider/thumb1.jpg" alt="Thumbnail 1" /></li>
                                                <li><img src="img/slider/thumb2.jpg" alt="Thumbnail 2" /></li>
                                                <li><img src="img/slider/thumb3.jpg" alt="Thumbnail 3" /></li>
                                                <li><img src="img/slider/thumb4.jpg" alt="Thumbnail 4" /></li>
                                                <li><img src="img/slider/thumb5.jpg" alt="Thumbnail 5" /></li>
                                                <li><img src="img/slider/thumb6.jpg" alt="Thumbnail 6" /></li>
                                            </ul>
                                        </div>  <!-- #carousel -->

                                    </div>
                                        
                                </div>            

                            </section> <!-- #gallery -->
                            
                            <!-- services -->
                            <section data-page-id="page-3" class="content js-content">
                                
                                <header class="box box-black margin-b-20">
                                    <h2 class="box-text page-title-text">Services</h2>
                                </header>
                                
                                <div class="content-text">
                                    <p>Download the story theme from templatemo. Quisque placerat turpis non tortor fringilla, in ornare magna eleifend. Etiam mattis varius fringilla.
                                    </p>
                                    <h4>Sub Title One</h4>
                                    <p>Nullam tortor mauris, bibendum ac ex vel, auctor congue est. Aenean quis tellus molestie, laoreet massa a, maximus est. Interdum et malesuada fames ac ante ipsum primis. 
                                    </p>
                                    <h4>Sub Title Two</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut sapien quis ante faucibus tempus. Nam ut dui vitae tellus vehicula porttitor in nec lorem.
                                    </p>
                                </div>            

                            </section> <!-- #services -->

                            <!-- contact -->
                            <section data-page-id="page-4" class="content js-content">
                                
                                <header class="box box-black margin-b-20">
                                    <h2 class="box-text page-title-text">Contact</h2>
                                </header>
                                
                                <div class="content-text">
                                    <p>In felis turpis, tincidunt a odio interdum, ornare interdum magna. Proin leo tortor, adipiscing et volutpat tincidunt, imperdiet sit amet purus.
                                    </p>
                                    <form  method="post" class="contact-form">

                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group-2-col-left">
                                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required/>
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group-2-col-right">
                                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject" required/>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="contact_message" name="contact_message" class="form-control" rows="4" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary submit-btn" name="btnForm">Send</button>
                                        <input type="reset" class="btn btn-info submit-btn" value="reset"/>
                                    </form>                           
                                </div>            

                            </section> <!-- #contact -->
                        </div>
                    </div>

                </div>
                    
                <!-- footer row -->
                <footer class="row footer js-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <p class="copyright-text">Copyright &copy; 2016 Company Name</p>  

                    </div>                
                </footer>

            </div>  <!-- .container-fluid -->

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div><!-- /#preloader -->      
            
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script> <!-- jQuery -->
        <script src="js/jquery.flexslider-min.js"></script> <!-- Flex Slider -->
        <script src="js/jquery.backstretch.min.js"></script> <!-- Backstretch http://srobbin.com/jquery-plugins/backstretch/ -->
        <script src="js/templatemo-script.js"></script> <!-- Templatemo scripts -->
    
    </body>
</html>