<?php

$current_year = date("Y", time());

?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<!-- Meta Data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>e.volve - Software Development Society of NSIT</title>
        <meta name="description" content="A Template by Vossen Design"/>
        <meta name="keywords" content="HTML5, Bootstrap 3, CSS3, javascript, PHP, onepage, responsive, mobile"/>
        <meta name="author" content="Vossen Design"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
       	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> 
        
        <!-- Stlylesheet -->
        <link href="css/style.css" rel="stylesheet">
        
        <!-- Skin Color -->
        <link rel="stylesheet" href="css/colors/green.css" id="color-skins"/> 
        
	</head>
	<body>
        
        <!-- Start Preloader -->
        <div class="preloader">
            <!--<img src="img/assets/logo.png" class="preloader-logo" alt="preloader-logo">-->
            <div class="spinner"></div>
        </div>
        <!-- End Preloader -->
        
		<!-- Start Home -->
    	<section id="home" data-stellar-background-ratio="0.6">
        	<div class="parallax-overlay"></div> 
            <div class="home-container text-center">
            	<div class="home-title liquid-slider" id="slider-home">
                	<div>
                        <h1><small class="white">e.volve</small> <br><strong>Something You Love</strong></h1>
                        <p class="lead">We are digital agency that loves crafting beautiful websites with great functionality.</p>
                        <div class="home-btn">
                            <h4 class="btn-home"><a href="#about">WE'RE CREATIVE</a></h4>
                        </div>
                    </div>
                    <div>
                        <h1><small class="white">We Are Wunderkind</small> <br><strong>We Make Brands Shine</strong></h1>
                        <p class="lead">We do innovation, creativity, effectiveness and all that with love.</p>
                        <div class="home-btn">
                            <h4 class="btn-home"><a href="#about">WHAT WE DO</a></h4>
                        </div>
                    </div>
                    <div>
                        <h1><small class="white">We Are Wunderkind</small> <br><strong>Best Digital Agency</strong></h1>
                        <p class="lead">Wunderkind was honored as best agency at EdAwards in New York.</p>
                        <div class="home-btn">
                            <h4 class="btn-home"><a href="#about">MADE WITH <i class="icon ion-heart"></i></a></h4>
                        </div>
                    </div>
                    <div>
                        <h1><small class="white">We Are Wunderkind</small> <br><strong>Nice to Meet You</strong></h1>
                        <p class="lead">Let's meet up and see if there's chemistry!</p>
                        <div class="home-btn">
                            <h4 class="btn-home"><a href="#about">MEET THE TEAM</a></h4>
                        </div>
                    </div>
                    
            	</div>
            </div>
            <div class="home-bottom">
            	<div class="container text-center">
                    <div class="move">
                        <a href="#about" class="fa fa-chevron-down"></a>
                        <div class="dots"></div>  
                    </div>  
            	</div> 
            </div>
        </section>
        <!-- End Home -->
        
        <!--Start Header-->
        <section id="fixed-navbar">
			<nav class="navbar navbar-default navbar-sticky" role="navigation">
				<div class="container">
                    
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
					    </button>
                        <a class="navbar-brand" href="#"><img src="img/assets/logo.png" alt=""></a>
					</div>

                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="nav navbar-nav  navbar-right">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
						    <li><a href="#portfolio">Work</a></li>
                            
                            <li class="dropdown">
                                <span class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></span>
                                <ul class="dropdown-menu">
                                    <li><a href="#get-connected">Get Connected</a></li>
                                    <li><a href="#clients">Clients</a></li>
                                    <li><a href="#price-list">Price List</a></li>
                                    <li><a href="shortcodes.html"><span class="label label-primary">Shortcodes</span></a></li> 
                                    <li><a href="blog.html">Blog Home</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#contact-form">Contact</a></li>
                            <!-- <li><a href="http://themeforest.net/item/wunderkind-one-page-parallax-theme/7601990"><span class="btn btn-primary btn-buy">Buy Now</span></a></li>  -->
                          
                            <!-- <li><a class="social-icon" href="#"><i class="icon icon-social-twitter"></i></a></li> -->
                            <li><a class="social-icon" target="_blank" href="https://www.facebook.com/evolve.nsit/"><i class="icon icon-social-facebook"></i></a></li>
                            <li><a class="social-icon" href="mailto:evolve@nsitonline.in"><i class="icon icon-support"></i></a></li>
                          
                      </ul>
                    </div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</section>
        <!--End Header-->
        
        <div class="site-wrapper">
            <!--Start About-->
            <section id="about">
                <div class="container content">
                    
                    <div class="col-lg-12 section-title-about wow fadeInUp">
                        <!-- <h2><small>We Are Wunderkind</small> <br>Making Your Brand Shine</h2> -->
                        <p class="lead">Seeing the uproar of development events at NSIT in the recent times, <a href="http://ieeensit.org/about-cs/" target="_blank">IEEE NSIT CS Chapter</a> has recently launched ‘e.volve’, the software development society of NSIT, which has seen the merge of the top notch developers and coding enthusiasts of our Institution and will be the batton holder of all software hackathons, tech talks and open source development events at NSIT. With the establishment of this society, NSIT will witness an ever more increase in the culture of software development, reaching the paradigms of web development, and open source coding.</p>
                    </div>
                    
                    <!-- <div class="row">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="about-row">
                                <div class="about-icon">
                                    <i class="icon ion-ios-lightbulb-outline ion-3x highlight"></i>
                                    <i class="icon ion-ios-lightbulb-outline back-icon"></i>
                                </div>
                                <div class="about-info">
                                	<h4>We're Creative<br><small>Crafting With Love</small></h4>
                                	<p class="about-description">Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="about-row">
                                <div class="about-icon">
                                    <i class="icon ion-paper-airplane ion-3x highlight"></i>
                                    <i class="icon ion-paper-airplane back-icon"></i>
                                </div>
                                <div class="about-info">
                                  <h4>We're Cool Nerds<br><small>Coding With Fun</small></h4>
                                    <p class="about-description">Duis vel est nec sapien suscipit gravida. Integer vitae tortor dui. Donec libero quam, euismod sit amet enim ac, varius dictum.</p>
                                </div>
                            </div>
                        </div>
                    </div>    -->
                    
<!--                     <div class="row">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="about-row">
                                <div class="about-icon">
                                    <i class="icon ion-ios-heart ion-3x highlight"></i>
                                    <i class="icon ion-ios-heart back-icon"></i>
                                </div>
                                <div class="about-info">
                                  <h4>We're Passionate<br><small>Available When You Need Us</small></h4>
                                    <p class="about-description">Maecenas sit amet eros luctus dui volutpat sollicitudin id vitae est. Vivamus laoreet adipiscing metus vel fermentum. Sed velit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="about-row">
                                <div class="about-icon">
                                    <i class="icon ion-speakerphone ion-3x highlight"></i>
                                    <i class="icon ion-speakerphone back-icon"></i>
                                </div>
                                <div class="about-info">
                                  <h4>We're Professional<br><small>New York Based</small></h4>
                                    <p class="about-description">Integer ornare, tellus eget lobortis cursus, metus enim ultricies eros, vitae porttitor elit sapien quis justo. Duis vitae.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
            </section>
            <!--End About-->
            
            <!-- Start Who We Are -->
            <!-- <section id="who-we-are" data-stellar-background-ratio="0.6">
                <div class="row" style="position:relative;">
                	<div class="parallax-overlay"></div> 
                    <div class="container">
                        
                        <div class="col-md-6 col-we-are wow fadeInUp">
                            <h2 class="we-are-info">Our Skills<br><small class="highlight">Crafting With Love</small></h2>          
                            <br>
                            <p class="p-info">Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet posuere. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod.</p> 
                            <p class="p-info">Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis viverra purus tristique. Integer lobortis erat in placerat fermentum. Sed luctus varius leo ac posuere. Integer eget est vitae dolor.</p>  
                        </div>
                        
                        <div class="col-md-6 col-md-skills wow fadeInUp" data-wow-delay="0.3s">
                        	<div class="skills-col">
                            	
                                <p><em>User Experience</em></p>
                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>85%</span></div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                
                                <p><em>Web & Mobile Design</em></p>
                                <div class="skillbar" data-percent="100%">
                                    <div class="skillbar-title"><span>100%</span></div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                
                                <p><em>Branding</em></p>
                                <div class="skillbar" data-percent="64%">
                                    <div class="skillbar-title"><span>64%</span></div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                
                                <p><em>Fun</em></p>
                                <div class="skillbar" data-percent="50%">
                                    <div class="skillbar-title"><span>50%</span></div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                     
                            </div>
                		</div> 
                	</div>
                </div>
            </section> -->
        	<!-- End Who We Are -->
            
            <!-- Start Team -->
            <!-- <section id="team">
            	<div class="container">
                    <div class="row">
                        
                	   <div class="col-lg-12 section-title-team wow fadeInUp">
                            <h2>Our Small Team <small>with Big Ideas</small></h2>
                            <p class="lead">Interdisciplinary teams with <span class="highlight">big ideas</span>. Design and prototyping from day one.</p>
                        </div> 
                        
                    	<div class="col-md-4 col-sm-4 team-member">
                        	<div class="effect effects">
                                <div class="img">
                                    <img src="img/team-1.jpg" class="img-responsive wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-facebook"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-twitter"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-youtube"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-dribbble"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class=" icon-envelope-open"></i></a></li>
                                        </ul>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>    
                            <div class="member-info wow fadeInUp">
                                <h4>Jack Smith<br><small class="highlight">CEO / Founder</small></h4> 
                                <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                            </div>
                        </div> 
                        
                        <div class="col-md-4 col-sm-4 team-member">
                        	<div class="effect effects">
                                <div class="img">
                                    <img src="img/team-2.jpg" class="img-responsive wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-facebook"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-twitter"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-youtube"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-dribbble"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class=" icon-envelope-open"></i></a></li>
                                        </ul>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>    
                            <div class="member-info wow fadeInUp">
                                <h4>Jane Awesome<br><small class="highlight">PR Manager</small></h4>
                                <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                            </div>
                        </div>  
                        
                        <div class="col-md-4 col-sm-4 team-member">
                        	<div class="effect effects">
                                <div class="img">
                                    <img src="img/team-3.jpg" class="img-responsive wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-facebook"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-twitter"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-youtube"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class="icon-social-dribbble"></i></a></li>
                                            <li class="social-icon"><a href="#" onClick="return false;"><i class=" icon-envelope-open"></i></a></li>
                                        </ul>
                                        <a class="close-overlay hidden">x</a>
                                    </div>
                                </div>
                            </div>    
                            <div class="member-info wow fadeInUp">
                                <h4>Mickey Blueyes<br><small class="highlight">Web Developer</small></h4>
                                <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                            </div>
                        </div> 
                        
                    </div>
                </div>
			</section> -->
            <!-- End Team -->
            
            <!-- Start Separator Video -->
            <!-- <section id="separator-video" data-stellar-background-ratio="0.6">  	
                    <div class="container">
                    	<div class="row">
                        	<div class="col-md-6 separator-video-content wow fadeInUp">
                            	<h2 class="video-info">We're Creative<br><small>Crafting With Love</small></h2>
                                
                                <br>
                                <p class="p-info">Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehic.</p>
                                <p class="p-info">Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet posuere. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod.</p> 
								<p class="p-info">Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis viverra purus tristique. Integer lobortis erat in placerat fermentum. Sed luctus varius leo ac posuere. Integer eget est vitae dolor.</p>
                                
                            </div> 
                            
                            <div class="col-md-6 fluid-width-video-wrapper">
                                <div class="video-container">
                                    <iframe src="http://www.youtube.com/embed/P36kVWtCAz0?color=white&amp;showinfo=0"></iframe>
                                </div>
                            </div>
                            
                        </div>
                    </div>
            </section> -->
        	<!-- End Separator Video -->
            
            <!-- Start Fun Facts -->
            <!-- <section id="fun-facts">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-3 col-sm-6 fact-container wow fadeInUp" data-wow-delay="0.1s">
                        	<div class="fact">
                            	<span class="counter highlight">4246</span>
                                <p class="lead">Satisfied Customers</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 fact-container wow fadeInUp" data-wow-delay="0.2s">
                        	<div class="fact">
                            	<span class="counter highlight">618</span>
                                <p class="lead">Twenkies Eaten</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 fact-container wow fadeInUp" data-wow-delay="0.3s">
                        	<div class="fact">
                            	<span class="counter highlight">240</span>
                                <p class="lead">Completed Projects</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 fact-container wow fadeInUp" data-wow-delay="0.4s">
                        	<div class="fact">
                            	<span class="counter highlight">96</span>
                                <p class="lead">Winning Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- End Fun Facts -->
            
            <!-- Start Separator-Quotes -->
            <section id="separator-quotes" data-stellar-background-ratio="0.6">
                <div class="row text-center" style="position:relative;">
                	<div class="parallax-overlay"></div> 
                    
                    <div class="quotes liquid-slider" id="quotes-slider">
                        <div class="col-lg-12">
                            <h2><i class="fa fa-quote-left highlight"></i>learn. code. evolve.<i class="fa fa-quote-right highlight"></i></h2>
                            <!-- <p class="label label-primary">ORIGIN / DESIGN TEAM</p> -->
                        </div>
                        <!-- <div class="col-lg-12">
                            <h2><i class="fa fa-quote-left highlight"></i> <small class="white">The Difference between ordinary and extraordinary is </small>just that little extra <i class="fa fa-quote-right highlight"></i></h2>
                            <p class="label label-primary">ALBERT EINSTEIN</p>
                        </div> -->
                        <!-- <div class="col-lg-12">
                            <h2><i class="fa fa-quote-left highlight"></i> The Desire to Create <small class="white">is One of the Deepest Yearnings of the Human Soul</small> <i class="fa fa-quote-right highlight"></i></h2>
                            <p class="label label-primary">DIETER F. UCHTDORF</p>
                        </div> -->
            		</div>
                    
                </div>
            </section>
        	<!-- End Separator-Quotes -->
            
            <!-- Start Services -->
            <!-- <section id="services">
                <div class="container">
                    
                    <div class="col-lg-12 section-title wow fadeIn">
                        <h2><small>What We Do</small><br><strong>Our Capabilities</strong></h2>
                        <p class="lead">A highly skilled professional service with a <span class="highlight">creative touch.</span></p>
                    </div>
                    
                    <div class="services-container">
                        <div class="row services-row">
                            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-ios-monitor-outline ion-3x highlight"></i>
                                        <i class="icon ion-ios-monitor-outline back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Graphic Design<br><small>Crafting with Love </small></h4>
                                        <p class="service-description">Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis tristique diam, ut ullamcorper tellus. Cras porttitor massa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-social-github ion-3x highlight"></i>
                                        <i class="icon ion-social-github back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Crazy Coding<br><small>Hand Developing</small></h4>
                                        <p class="service-description">Nullam id ornare magna. Nullam eu nisi porttitor, aliquam mi sit amet, viverra diam. Maecenas vitae mollis est. Nunc nec lectus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-speedometer ion-3x highlight"></i>
                                        <i class="icon ion-speedometer back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Web Optimization<br><small>Faster than Light</small></h4>
                                        <p class="service-description">Maecenas sit amet eros luctus dui volutpat sollicitudin id vitae est. Vivamus laoreet adipiscing metus vel fermentum. Sed velit.</p>
                                    </div>
                                </div>
                            </div>                
                            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-map ion-3x highlight"></i>
                                        <i class="icon ion-map back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Branding<br><small>Making a New You</small></h4>
                                        <p class="service-description">In pulvinar sapien ipsum, vel scelerisque ligula fringilla in. Donec mi urna, aliquet ac arcu vel, feugiat fermentum leo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="service">
                                    <div class="service-icon">
                                    	<i class="icon ion-ionic ion-3x highlight"></i>
                                        <i class="icon ion-ionic back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Customer Support<br><small>And Affinity</small></h4>
                                        <p class="service-description">Duis vel est nec sapien suscipit gravida. Integer vitae tortor dui. Donec libero quam, euismod sit amet enim ac, varius.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-paper-airplane ion-3x highlight"></i>
                                        <i class="icon ion-paper-airplane back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Having Fun<br><small>Office Surfing (with chairs!)</small></h4>
                                        <p class="service-description">Etiam cursus nunc vitae auctor semper. In commodo ligula eu faucibus mattis. Maecenas sed consectetur orci. Curabitur dui.</p>
                                    </div>
                                </div>
                            </div>                
                        </div>
                	</div>
                    
                </div>
            </section> -->
            <!-- End Services -->
            
            <!-- Start Separator Call to Action -->
            <!-- <section id="separator-purchase" data-stellar-background-ratio="0.6">
            	<div class="container">
                    <div class="col-sm-12 call-action-purchase text-center">
				        <span>
                            <small>Awesome, </small>easy to use <small>& the developer is super nice and answers questions quickly!</small>
                        </span>
                        <span>
                            <a href="http://themeforest.net/item/wunderkind-one-page-parallax-theme/7601990" target="_blank" class="btn btn-primary">Buy Now on ThemeForest</a>
                        </span>
					</div>
                </div>
            </section> -->
            <!-- End Separator Call to Action -->
            
            <!-- Start Portfolio Section -->  
            <section id="portfolio"> 
                <div class="container">
                    
                    <div class="col-lg-12 section-title wow fadeInUp">
                        <h2><small>Take a Look at</small><br><strong>Some of Our Work</strong></h2>
                        <p class="lead">Wide range of <span class="highlight">successful</span> digital and print projects.</p>
                    </div>

                    <div id="filters-container-fullwidth" class="cbp-l-filters-button wow fadeInUp">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".identity" class="cbp-filter-item">Identity<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".web-design" class="cbp-filter-item">Web Design<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".graphic" class="cbp-filter-item">Graphic<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".logo" class="cbp-filter-item">Logo<div class="cbp-filter-counter"></div></div>
                        <div data-filter=".motion" class="cbp-filter-item">Motion<div class="cbp-filter-counter"></div></div>
                    </div>

                    <div id="grid-container-fullwidth" class="cbp-l-grid-fullScreen">
                        <ul>   
                            
                            <li class="cbp-item effect effects identity logo">
                                <div class="img">
                                    <img src="img/portfolio/1.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-caption-title">Future Trend</li>
                                            <li class="cbp-l-caption-desc">by Vossen Design</li>
                                            <li class="cbp-l-icon"><a href="img/portfolio/fullsize/1.jpg" class="cbp-lightbox" data-title="Dashboard<br>by Wunderwelt"><i class="icon-magnifier"></i></a></li>
                                            <li class="cbp-l-icon"><a href="projects/project1.html" class="cbp-singlePage"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li> 
                            
                            <li class="cbp-item effect effects identity logo">
                                <div class="img">
                                    <img src="img/portfolio/2.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-caption-title">Pro Bicycle</li>
                                            <li class="cbp-l-caption-desc">by Vossen Design</li>
                                            <li class="cbp-l-icon"><a href="img/portfolio/fullsize/2.jpg" class="cbp-lightbox" data-title="Dashboard<br>by Wunderwelt"><i class="icon-magnifier"></i></a></li>
                                            <li class="cbp-l-icon"><a href="projects/project2.html" class="cbp-singlePage"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="cbp-item effect effects web-design">
                                <div class="img">
                                    <img src="img/portfolio/3.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-caption-title">Door Cover</li>
                                            <li class="cbp-l-caption-desc">by Vossen Design</li>
                                            <li class="cbp-l-icon"><a href="img/portfolio/fullsize/3.jpg" class="cbp-lightbox" data-title="Dashboard<br>by Wunderwelt"><i class="icon-magnifier"></i></a></li>
                                            <li class="cbp-l-icon"><a href="projects/project3.html" class="cbp-singlePage"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="cbp-item effect effects motion identity">
                                <div class="img">
                                    <img src="img/portfolio/4.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-caption-title">Pro Close-up</li>
                                            <li class="cbp-l-caption-desc">by Vossen Design</li>
                                            <li class="cbp-l-icon"><a class="cbp-lightbox" href="https://www.youtube.com/watch?v=3wbvpOIIBQA" data-title="Dashboard<br>by Wunderwelt"><i class="icon-magnifier"></i></a></li>
                                            <li class="cbp-l-icon"><a href="projects/project4.html" class="cbp-singlePage"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="cbp-item effect effects identity">
                                <div class="img">
                                    <img src="img/portfolio/5.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-caption-title">Bohemian Coding</li>
                                            <li class="cbp-l-caption-desc">by Vossen Design</li>
                                            <li class="cbp-l-icon"><a href="img/portfolio/fullsize/5.jpg" class="cbp-lightbox" data-title="Dashboard<br>by Wunderwelt"><i class="icon-magnifier"></i></a></li>
                                            <li class="cbp-l-icon"><a href="projects/project5.html" class="cbp-singlePage"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="cbp-item effect effects web-design">
                                <div class="img">
                                    <img src="img/portfolio/6.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-caption-title">Red Bridge</li>
                                            <li class="cbp-l-caption-desc">by Vossen Design</li>
                                            <li class="cbp-l-icon"><a href="img/portfolio/fullsize/6.jpg" class="cbp-lightbox" data-title="Dashboard<br>by Wunderwelt"><i class="icon-magnifier"></i></a></li>
                                            <li class="cbp-l-icon"><a href="projects/project6.html" class="cbp-singlePage"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li> 
                            
                            <li class="cbp-item effect effects identity motion">
                                <div class="img">
                                    <img src="img/portfolio/7.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-caption-title">Ergonomic Pad</li>
                                            <li class="cbp-l-caption-desc">by Vossen Design</li>
                                            <li class="cbp-l-icon"><a href="http://vimeo.com/16465813" class="cbp-lightbox" data-title="Dashboard<br>by Wunderwelt"><i class="icon-magnifier"></i></a></li>
                                            <li class="cbp-l-icon"><a href="projects/project7.html" class="cbp-singlePage"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li> 
                            
                            <li class="cbp-item effect effects web-design graphic">
                                <div class="img">
                                    <img src="img/portfolio/8.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-caption-title">Cooling Tower</li>
                                            <li class="cbp-l-caption-desc">by Vossen Design</li>
                                            <li class="cbp-l-icon"><a href="img/portfolio/fullsize/8.jpg" class="cbp-lightbox" data-title="Dashboard<br>by Wunderwelt"><i class="icon-magnifier"></i></a></li>
                                            <li class="cbp-l-icon"><a href="projects/project8.html" class="cbp-singlePage"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="cbp-item effect effects graphic logo">
                                <div class="img">
                                    <img src="img/portfolio/9.jpg" class="img-responsive" alt="" />
                                    <div class="overlay">
                                        <ul class="expand">
                                            <li class="cbp-l-caption-title">Still Motion</li>
                                            <li class="cbp-l-caption-desc">by Vossen Design</li>
                                            <li class="cbp-l-icon"><a href="img/portfolio/fullsize/9.jpg" class="cbp-lightbox" data-title="Dashboard<br>by Wunderwelt"><i class="icon-magnifier"></i></a></li>
                                            <li class="cbp-l-icon"><a href="projects/project9.html" class="cbp-singlePage"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>  
                            
                        </ul>
                    </div>
                    
                    <div class="cbp-l-loadMore-button">
                        <a href="projects/loadMore.html" class="cbp-l-loadMore-button-link wow fadeInUp">SHOW ME MORE</a>
                        <!-- Portfolio AJAX load more button will be functional only on your server. Upload to your server when testing. -->
                    </div>
                    
                </div>
            </section>
            <!-- End Portfolio Section -->   
            
            <!-- Start Separator Testimonials -->
            <section id="separator-testimonials" data-stellar-background-ratio="0.7" >
                <div class="row text-center" style="position:relative;">
                	<div class="parallax-overlay"></div>  
                    
                    <div class="liquid-slider" style="z-index: 3;" id="testimonials-slider">     
                        
                    	<div class="col-lg-12 testimonials text-center"> 
                            <h3 class="white"><small class="white">What People</small><br>Say About Us</h3> 
                            <h4 class="testimonial">
                                <i class="fa fa-quote-left highlight"></i>
                                <small> 
                                This guys are amazing! They were so quick to respond and let me tell you... they are all knowing!<br><span class="highlight">I highly recommend</span> their themes! They are all about making their clients happy
                                </small>
                                <i class="fa fa-quote-right highlight"></i>
                            </h4>
                            <p class="label label-primary">Jane Awesome - Wunder Inc.</p>  
                        </div>
                        
                        <div class="col-lg-12 testimonials text-center"> 
                            <h3 class="white"><small class="white">What People</small><br>Say About Us</h3> 
                            <h4 class="testimonial">
                                <i class="fa fa-quote-left highlight"></i>
                                <small> 
                                I have been extremely impressed with Wunderkind. It is a pleasure working<br>with</small> <span class="highlight">hihly creative</span><small class="white"> and inovative team.
                                </small>
                                <i class="fa fa-quote-right highlight"></i>
                            </h4>
                            <p class="label label-primary">Jack Smith - Spaceship</p>  
                        </div>
                        
                        <div class="col-lg-12 testimonials text-center"> 
                            <h3 class="white"><small class="white">What People</small><br>Say About Us</h3> 
                            <h4 class="testimonial">
                                <i class="fa fa-quote-left highlight"></i>
                                <small> 
                                I love Wunderkind. Absolutely amazing results and experience creating my website.<br> An environment where you interact with </small> <span class="highlight">incredible talent!
                                </small>
                                <i class="fa fa-quote-right highlight"></i>
                            </h4>
                            <p class="label label-primary">John Jackson - Galaxy Corp</p>  
                        </div> 
                        
                	</div>
                    
                </div>
            </section>
        	<!-- End Separator Testimonials -->
            
            <!-- Start Clients -->
            <section id="clients">
                <div class="container">
                    <div class="row">
                    
                        <ul class="clients-row"> 
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="img/clients/logo-1.png" class="img-responsive" alt="client"></a>    
                            </li>
                            
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="img/clients/logo-2.png" class="img-responsive" alt="client"></a>    
                            </li>
                            
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="img/clients/logo-3.png" class="img-responsive" alt="client"></a>    
                            </li>
                            
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="img/clients/logo-4.png" class="img-responsive" alt="client"></a>    
                            </li>
                        </ul>
                        
                        <ul class="clients-row-2"> 
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="img/clients/logo-5.png" class="img-responsive" alt="client"></a>    
                            </li>
                            
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="img/clients/logo-6.png" class="img-responsive" alt="client"></a>    
                            </li>
                            
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="img/clients/logo-7.png" class="img-responsive" alt="client"></a>    
                            </li>
                            
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="img/clients/logo-8.png" class="img-responsive" alt="client"></a>    
                            </li>
                        </ul> 
                        
                    </div> 
                </div>
            </section>
            <!-- End Clients -->

            <!-- Start Get Connected -->
            <!-- <section id="get-connected" data-stellar-background-ratio="0.7">
                <div class="row text-center" style="position:relative;">
                	<div class="parallax-overlay"></div> 
                	
                    <div class="container connected-row text-center">
                        <h2><small class="white">Get Connected <br></small>Follow Us</h2>
                        <p class="lead">Get connected with us on social networks!</p>

                    	<ul class="connected-icons text-center">
                            
 							<li class="connected-icon wow fadeInUp" data-wow-delay="0.1s">
                                <a target="_blank" href="#">
                                	<span class="fa-stack fa-lg fa-4x">
                                     	<i class="fa fa-circle fa-stack-2x"></i>
                                    	<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                	</span><br>
                                    <span class="lead">Facebook</span><br>
                                    <span class="white">Be Our Friend</span>
                                </a>
                            </li>
                            
                            <li class="connected-icon wow fadeInUp" data-wow-delay="0.2s">
                                <a target="_blank" href="#">
                                	<span class="fa-stack fa-lg fa-4x">
                                     	<i class="fa fa-circle fa-stack-2x"></i>
                                    	<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                	</span><br>
                                    <span class="lead">Twitter</span><br>
                                    <span class="white">Follow Us</span>
                                </a>
                            </li>
                            
                            <li class="connected-icon wow fadeInUp" data-wow-delay="0.3s">
                                <a target="_blank" href="#">
                                	<span class="fa-stack fa-lg fa-4x">
                                     	<i class="fa fa-circle fa-stack-2x"></i>
                                    	<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                	</span><br>
                                    <span class="lead">Instagram</span><br>
                                    <span class="white">See Our Pictures</span>
                                </a>
                            </li>
                            
                            <li class="connected-icon wow fadeInUp" data-wow-delay="0.4s">
                                <a target="_blank" href="#">
                                	<span class="fa-stack fa-lg fa-4x">
                                     	<i class="fa fa-circle fa-stack-2x"></i>
                                    	<i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
                                	</span><br>
                                    <span class="lead">Youtube</span><br>
                                    <span class="white">Watch Our Videos</span>
                                </a>
                            </li>
                            
                            <li class="connected-icon wow fadeInUp" data-wow-delay="0.5s">
                                <a target="_blank" href="#">
                                	<span class="fa-stack fa-lg fa-4x">
                                     	<i class="fa fa-circle fa-stack-2x"></i>
                                    	<i class="fa fa-google-plus-square fa-stack-1x fa-inverse"></i>
                                	</span><br>
                                    <span class="lead">Google+</span><br>
                                    <span class="white">Join Our Circle</span>
                                </a>
                            </li>
                            
                            <li class="connected-icon wow fadeInUp" data-wow-delay="0.6s">
                                <a target="_blank" href="#">
                                	<span class="fa-stack fa-lg fa-4x">
                                     	<i class="fa fa-circle fa-stack-2x"></i>
                                    	<i class="fa fa-vimeo-square fa-stack-1x fa-inverse"></i>
                                	</span><br>
                                    <span class="lead">Vimeo</span><br>
                                    <span class="white">Check Out New Videos</span>
                                </a>
                            </li>
                            
                    	</ul>        
                	</div>    
                </div>
            </section> -->
            <!-- End Get Connected -->    
            
            <!-- Start Price List -->
            <!-- <section id="price-list">
                <div class="container">
                    <div class="col-lg-12 section-title-price wow fadeInUp">
                        <h2><small>Pick Some of</small><br><strong>Our Latest Offers</strong></h2>
                        <p class="lead">Pick a plan that <span class="highlight">best suits</span> your needs.</p>
                    </div>
                    <div class="price-container">     
                    	<div class="row">   
                        	
							<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            	<div class="price-box text-center">
                               		<div class="price-box-info">
                                    	<h2>Free</h2>
                                        <h2>0<span>$</span><small>/mon.</small></h2>
                                    </div>  
                                    <div class="price-box-offer">
                                       <ul class="offer-list">
                                       	<li><span>Full</span> Email Support</li>
                                        <li><span>25</span> Projects</li>
                                        <li><i class="icon ion-close-round"></i></li>
                                        <li><i class="icon ion-close-round"></i></li>
                                       </ul>
                                    </div>
                                    <div class="sign-up-btn">
                                    	<a href="#"><button type="button" class="btn btn-primary">Sign Up Now</button></a>
                                    </div>
                            	</div>           
                            </div>
                            
                            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                            	<div class="price-box-big text-center">
                               		<div class="price-box-info">
                                    	<h1>Pro</h1>
                                        <h2>25<span>$</span><small>/mon.</small></h2>
                                    </div>  
                                    <div class="price-box-offer">
                                       <ul class="offer-list">
                                       	<li><span>Full</span> Email Support</li>
                                        <li><span>Unlimited</span> Projects</li>
                                        <li><span>Unlimited</span> Users</li>
                                        <li><span>1000GB</span> Storage</li>
                                       </ul>
                                    </div>
                                    <div class="sign-up-btn">
                                    	<a href="#"><button type="button" class="btn btn-primary btn-lg">Sign Up Now</button></a>
                                    </div>
                            	</div>           
                            </div>
                            
                            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                            	<div class="price-box text-center">
                               		<div class="price-box-info">
                                    	<h2>Basic</h2>
                                        <h2>15<span>$</span><small>/mon.</small></h2>
                                    </div>  
                                    <div class="price-box-offer">
                                       <ul class="offer-list">
                                       	<li><span>Full</span> Email Support</li>
                                        <li><span>Unlimited</span> Projects</li>
                                        <li><span>Unlimited</span> Users</li>
                                        <li><span>500GB</span> Storage</li>
                                       </ul>
                                    </div>
                                    <div class="sign-up-btn">
                                    	<a href="#"><button type="button" class="btn btn-primary">Sign Up Now</button></a>
                                    </div>
                            	</div>           
                            </div>
                                                                   
                    	</div>        
                	</div>
            	</div>
            </section>         -->
            <!-- End Price List -->
            
            <!-- Start Contact Details -->
<!--             <section id="contact-details" data-stellar-background-ratio="0.7">
            	<div class="row text-center" style="position:relative;">
                	<div class="parallax-overlay"></div> 
                    <div class="container">
                        	<div class="details col-lg-12 wow fadeInUp">
                            	<div class="phone-info">
                                    <h1><i class="fa fa-phone"></i> 48-1516-2342</h1>
                                </div>
                                <div class="col-lg-12">
                                    
                                    <h3><small class="white">support@<span class="highlight">domain.com</span></small></h3>
                                    
                                    <h3><small class="white">Wunderkind, 36th Floor, 5th Ave. </small><span class="highlight">New York</span></h3>
                                </div>
                            </div>
                    </div>
            	</div>
            </section> -->
            <!-- End Contact Details -->
            
            <!-- Start Contact Form -->
<!--             <section id="contact-form">
            	<div class="container">
                	<div class="col-lg-12 section-title-price wow fadeInUp">
                        <h2><small>Get In Touch</small><br><strong>Contact Us</strong></h2>
                        <p class="lead">We would like to <span class="highlight">hear from you.</span></p>
                    </div>
                	<div class="col-lg-12 text-center wow fadeInUp" id="contact">
                    	<div id="message"></div>
                        <form method="post" action="contact.php" name="contactform" id="contactform">
                        <fieldset>
                        <div class="col-md-6"> 
                            <input name="name" type="text" id="name" size="30" value="" placeholder="Name"/>
                            <br />
                            <input name="email" type="text" id="email" size="30" value="" placeholder="Email"/>
                            <br /> 
                            <input name="phone" type="text" id="phone" size="30" value="" placeholder="Phone"/>
                		</div>
                        <div class="col-md-6"> 
                            <textarea name="comments" cols="40" rows="5" id="comments" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <input type="submit" class="submit" id="submit" value="Submit" />
                        </div>
                        </fieldset>
                        </form>
                    </div>
                </div>
            </section> -->
            <!-- End Contact Form -->
            
            <!-- Start Google Map -->
            <section>
            	<div id="map"></div>
            </section>
            <!-- End Google Map -->
             
            <!-- Start Footer -->
            <footer id="footer">
            	<div class="col-lg-12 text-center">
            		<div class="back-to-top">
                        <i class="fa fa-angle-double-up"></i>
                    </div>
                </div>
            	<div class="container text-center">
                	<div class="row">
                    	<div class="col-md-12 footer-social">
                            <ul class="connected-icons text-center">
                                <!-- <li class="connected-icon"><a target="_blank" href="#"><i class="fa fa-twitter fa-2-5x"></i></a></li> -->
                                <li class="connected-icon"><a target="_blank" href="https://www.facebook.com/evolve.nsit/"><i class="fa fa-facebook fa-2-5x"></i></a></li>
                                <li class="connected-icon"><a href="mailto:evolve@nsitonline.in"><i class="fa fa-envelope-o fa-2-5x"></i></a></li>
                                <!-- <li class="connected-icon"><a target="_blank" href="#"><i class="fa fa-instagram fa-2-5x"></i></a></li> -->
                            </ul>
                        </div>
                        
                        <p>learn. code. evolve.</p>
                        <h4 class="footer-logo"><a href="#">e.volve</a></h4>
                        
                        <div class="col-lg-12 footer-menu">
                            <span class="pull-left">Copyright © <?php echo $current_year; ?> <a href="#" style="margin:0;">e.volve</a>. All Rights Reserved.</span>
                            <span class="pull-right">
                                <a href="#home">Home</a>
                                <a href="#about">About</a>
                                <a href="#services">Services</a>
                                <a href="#portfolio">Work</a>
                                <a href="#contact">Contact</a>
                                <a href="http://themeforest.net/item/wunderkind-one-page-parallax-theme/7601990"><span class="btn btn-primary btn-buy">Buy Now</span></a> 
                            </span>
                        </div>
                        
                       
        			</div>
                </div>
            </footer>
            <!-- End Footer -->
		</div>
    
        <!-- Start Theme Panel Style Switcher -->
<!--         <section id="theme-panel" class="panel-close">
            <a class="panel-btn"><i class="ion-gear-a"></i></a>
            <div class="theme-panel-title">
                <h4>Style Switcher</h4>
            </div>
            <div class="colors-container">
                <p class="" style="line-height:0;">15 Color Skins</p>
                <a title="pink" class="color-switch pink"></a>
                <a title="blue-2" class="color-switch blue-2"></a>
                <a title="blue" class="color-switch blue"></a>
                <a title="purple" class="color-switch purple"></a>
                <a title="green" class="color-switch green"></a>
                <a title="yellow" class="color-switch yellow"></a>
                <a title="orange" class="color-switch orange"></a>
                <a title="red" class="color-switch red"></a>
                <a title="red-2" class="color-switch red-2"></a>
                <a title="red-3" class="color-switch red-3"></a>
                <a title="pink-2" class="color-switch pink-2"></a>
				<a title="midnight" class="color-switch midnight"></a>
                <a title="green-2" class="color-switch green-2"></a>
				<a title="beige" class="color-switch beige"></a>
				<a title="black" class="color-switch black"></a>
            </div>
            <div class="colors-container">
            	<p class="" style="color:#999;font-size:11px;">These Color Skins are included inside the theme, and also you can easily create your own one! There are unlimited possibilities!</p>
            </div>
        </section> -->
    	<!-- End Theme Panel Style Switcher -->  
        
        <!-- jQuery Plugins -->
        <script src="js/plugins/jquery.min.js"></script>
        <script src="js/plugins/bootstrap.min.js"></script> 
        <script src="js/plugins/smoothscroll.js"></script>
        <script src="js/plugins/jquery.liquid-slider.js"></script>
        <script src="js/plugins/jquery.stellar.js" type="text/javascript"></script>    
        <script src="js/plugins/jquery.sticky.js" type="text/javascript"></script> 
        <script src="js/plugins/waypoints.min.js" type="text/javascript"></script>
        <script src="js/plugins/wow.min.js" type="text/javascript"></script>
        <script src="js/plugins/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="js/plugins/moderniz.min.js"></script> 
		<script src="js/plugins/jquery.easing.1.3.min.js"></script>
		<script src="js/plugins/jquery.touchSwipe.min.js"></script>
        <script src="js/plugins/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="js/plugins/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="js/plugins/jquery.mb.YTPlayer.js" type="text/javascript"></script>
		<script src="js/plugins/jquery.backstretch.min.js"></script>
        <script src="js/plugins/tweetie.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> 
        <script src="js/plugins/gmap3.min.js" type="text/javascript"></script> 
        <script src="js/plugins/revslider.min.js" type="text/javascript"></script> 
		<script src="js/scripts.js" type="text/javascript"></script> 
        
        <script src="theme_panel/theme_panel.js"></script>
 
	</body>
</html>