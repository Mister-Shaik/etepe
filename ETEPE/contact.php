<?php
	include('dbConfig.php');
	session_start();
	$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
	if(!empty($sessData['status']['msg'])){
		$statusicon = $sessData['status']['icon'];
		$statusMsg = $sessData['status']['msg'];
		$statusMsgType = $sessData['status']['type'];
		unset($_SESSION['sessData']['status']);
	}
	
	?>
<!doctype php>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-5740106443816262",
		enable_page_level_ads: true
	  });
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T8TTKW3');</script>
	<!-- End Google Tag Manager -->
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="Contact us - we're friendly and available to chat, Reach out to us anytime and we'll happily answer your questions. To upload any book send it us through email or contact us and we will connect book from your place and return your book later after 1 or 2 days.">
	<meta name="keywords" content="stunotes,contact us,notes,events,hyderabad,articles,blog">
	<title>Contact us - We're friendly and available to chat, Reach out to us anytime and we'll happily answer your questions</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/material-kit.css" rel="stylesheet"/>

</head>

<body class="landing-page">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8TTKW3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '469921476694677',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
	 js.async=true;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    <nav class="navbar navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
		<?php	if(!empty($statusMsg)){?>
			<div class="alert alert-<?php echo $statusMsgType; ?>">
				<div class="container-fluid">
				  <div class="alert-icon">
					<i class="material-icons"><?php echo $statusicon; ?></i>
				  </div>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"><i class="material-icons">clear</i></span>
				  </button>
				  <b><?php echo $statusMsgType; ?> alert:</b> <?php echo $statusMsg; ?>
				</div>
			</div>
			<?php } ?>
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="http://www.stunotes.com">StuNotes</a>
				<?php if(empty($sessData['userLoggedIn']) && empty($sessData['userID'])){?><a href="signup.php" class="btn btn-success btn-xs hidden-md hidden-lg hidden-sm" style="margin-top : 10px;float:right;"><i class="fa fa-user-plus" ></i> SignUp</a>
				<a href="login.php" class="btn btn-info btn-xs hidden-md hidden-lg hidden-sm" style="margin-top : 10px;float:right;"><i class="fa fa-sign-in"></i> Login</a><?php } 
				else{?><a href="userAccount.php?logoutSubmit=1" class="btn btn-danger btn-xs hidden-md hidden-lg hidden-sm" style="margin-top : 10px;float:right;"><i class="fa fa-sign-in"></i>Logout</a><?php } ?>
        	</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li><li class="active"><a href="contact.php">Contact us</a></li>
					<li><a href="notes.php">Notes</a></li>
					<li><a href="events.php">Events</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Articles <b class="caret"></b></a>
						<ul class="dropdown-menu" style="columns:3;-webkit-columns:3;-moz-columns:3;">								
							<li><a href="articles.php">All</a></li>
							<li><a href="articles.php?cate=education">Education</a></li>
							<li><a href="articles.php?cate=environment">Environment</a></li>
							<li><a href="articles.php?cate=technology">Technology</a></li>
							<li><a href="articles.php?cate=career">Career</a></li>
							<li><a href="articles.php?cate=fiction">Fiction</a></li>
							<li><a href="articles.php?cate=non-fiction">Non-Fiction</a></li>
							<li><a href="articles.php?cate=humor">Humor</a></li>
							<li><a href="articles.php?cate=story">Short Story/Essay</a></li>
							<li><a href="articles.php?cate=hobby">Hobbies</a></li>
							<li><a href="articles.php?cate=motivational">Motivational</a></li>
							<li><a href="articles.php?cate=business">Business</a></li>
							<li><a href="articles.php?cate=health">Health</a></li>
							<li><a href="articles.php?cate=software">software</a></li>
							<li><a href="articles.php?cate=stories">Stories</a></li>
							<li><a href="articles.php?cate=food">Food</a></li>
							<li><a href="articles.php?cate=travel">Travel</a></li>
							<li><a href="articles.php?cate=family">Family</a></li>
							<li><a href="articles.php?cate=sports">Sports</a></li>
							<li><a href="articles.php?cate=social">Social Service</a></li>
							<li><a href="articles.php?cate=self">Self Help</a></li>
							<li><a href="articles.php?cate=internet">Internet</a></li>
							<li><a href="articles.php?cate=achievements">Achievements</a></li>
							<li><a href="articles.php?cate=science">Science</a></li>
							<li><a href="articles.php?cate=gaming">Gaming</a></li>
							<li><a href="articles.php?cate=other">other</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
						<ul class="dropdown-menu">
						   
						  <li><a href="prevpapers.php">Previous Papers</a></li>
						  <li><a href="#">Projects</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Add <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><?php if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){ ?><a href="add_book.php">Add a Book</a><?php } else {?><a href="#">login to Add a Book</a><?php } ?></li>
						  <li><?php if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){ ?><a href="add_event.php">Add an Event</a><?php } else {?><a href="#">login to Add an Event</a><?php } ?></li>
						  <li><?php if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){ ?><a href="add_article.php">Write an Article</a><?php } else {?><a href="#">login to Add an Article</a><?php } ?></li>
						</ul>
					</li>
				</ul>
				<?php
					if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
					include 'user.php';
					$user = new User();
					$conditions['where'] = array(
						'id' => $sessData['userID'],
					);
					$conditions['return_type'] = 'single';
					$userData = $user->getRows($conditions);
					
				?>
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden-xs"><h4 class="text-center"><?php echo $userData['first_name'].' '.$userData['last_name']; ?></h4></li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="profile.php">settings</a></li>
						   
						  <li><a href="content.php">My Content</a></li>
						  <li><a href="userAccount.php?logoutSubmit=1">Logout</a></li>
						</ul>
					</li>
				</ul>
					<?php } else { ?>
				<ul class="nav navbar-nav navbar-right hidden-xs">
					<li><a href="login.php" class="btn btn-info btn-raised btn-sm"><i class="fa fa-sign-in"></i> Login</a></li>
				    <li><a href="signup.php" class="btn btn-success btn-raised btn-sm"><i class="fa fa-user-plus"></i> SignUp</a></li>
				</ul>
					<?php }  ?>
			</div>
    	</div>
			
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background:linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),rgba(0,0,0,0.45) url('img/contact.jpg') no-repeat center;background-size: cover;background-position: center center;color: #fff;height:500px;">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-lg-12 ">
						<h1 class="title text-center">Get in touch</h1>	
						<h3 class="title text-center">We're amicable and available to fulfill your needs, Reach out to us anytime and we'll happily answer your questions</h3>
					</div>
                </div>
            </div>
        </div>

		<div class="main main-raised">
			<div class="container">
				
	        	<div class="section landing-section card" >
	                <div class="row">
	                    <div class="col-md-8 col-lg-8  col-md-offset-2">
	                        <h2 class="text-center title">Contact Us</h2>
							<h4 class="text-center description">We're amicable and available to chat to fulfill your needs, Reach out to us anytime and we'll happily answer your questions. If you want to upload your book contact us and we will pickup the notes from your location for copying or send it to shaikshamc2@gmail.com and we will upload it after some tweeks.</h4>
	                        <form class="contact-form" action="sendmail.php" method="post">
	                            <div class="row">
	                                <div class="col-md-6 col-lg-6 ">
										<div class="form-group label-floating">
											<label class="control-label" style="padding-left:15px;">Your Name</label>
											<input type="text" class="form-control"  name="name" />
										</div>
	                                </div>
	                                <div class="col-md-6 col-lg-6 ">
										<div class="form-group label-floating">
											<label class="control-label" style="padding-left:15px;">Your Email</label>
											<input type="email" class="form-control"  name="email" />
										</div>
	                                </div>
	                            </div>
								
								<div class="form-group label-floating">
									<label class="control-label" style="padding-left:15px;">Subject</label>
									<input type="text" class="form-control" name="subject" />
								</div>
								
								<div class="form-group label-floating">
									<label class="control-label" style="padding-left:15px;">Your Messge</label>
									<textarea class="form-control" rows="4" name="message"></textarea>
								</div>

	                            <div class="row">
	                                <div class="col-md-4 col-lg-4  col-md-offset-4 text-center">
	                                    <button class="btn btn-primary btn-raised" type="submit" name="submit">
											Send Message
										</button>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>

	    <footer class="footer">
	        <div class="container">
	            <nav class="pull-left">
	                <ul>
	                    <li>
	                        <a href="index.php">
	                            Stunotes
	                        </a>
	                    </li>
						<li>
	                        <a href="about.php">
	                           About Us
	                        </a>
	                    </li>
	                    <li>
	                        <a href="contact.php">
	                            Contact Us
	                        </a>
	                    </li>
	                    <li>
	                        <a href="privacy.php">
	                           Privacy Policy
	                        </a>
	                    </li>
	                    <li>
	                        <a href="disclaimer.php">
	                           Disclaimer Policy
	                        </a>
	                    </li>
	                    <li>
	                        <a href="terms.php">
	                            Terms of use
	                        </a>
	                    </li>
	                </ul>
	            </nav>
	            <div class="copyright pull-right">
	                &copy; 2016, Stunotes - All Rights Reserved
									<a href="https://www.facebook.com/stunotez/" class="btn btn-simple btn-just-icon btn-info"><i class="fa fa-facebook-square"></i></a>
									<a href="https://twitter.com/stunotez" class="btn btn-simple btn-just-icon btn-info"><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/stunotes/" class="btn btn-simple btn-just-icon btn-info"><i class="fa fa-instagram"></i></a>
	            </div>
	        </div>
	    </footer>

	</div>
</body>

	<!--   Core JS Files   -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/material.min.js"></script>

 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102156966-1', 'auto');
  ga('send', 'pageview');

</script>
 

 
 

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="js/material-kit.js" type="text/javascript"></script>

</html>
