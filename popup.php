<?php 
session_start();
include_once 'inc/config.inc.php';?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->
    <head>
          <title><?php echo SITE_TITLE;?></title>
          <?php include 'inc/common.php'; ?>
    </head>
    
    <?php	// session variable to store information which will be used in signup_or_login page 
    	if( isset($_POST['action']) && $_POST['action'] != "" )
    	{
    		$close_popup = 1;
    		$_SESSION['email']		=	$_POST['email'];
    		$_SESSION['password']	=	$_POST['password'];
    		$_SESSION['action']		=	'signup';
    	}else{
    		$close_popup = 0;
    	}
    ?>
    <body>
		<div class="popUpContainer">
			<div class="title">SHOP &#x0026; EARN CASH BACK!</div>
			<div class="body">
				<div class="welcomeContainer">
					<div class="welcomeTitle">WELCOME TO</div>
					<div><img alt="" src="<?php echo SITE_URL?>img/logo.png"/></div>
				</div>
				<div class="popUpContent">
					<div class="popUpContentLeft">
						<div class="heading">HOW IT WORKS</div>
						<div class="howItWorksSteps popUpSteps">
							<div class="stepSection howItWorksStepOne">
								<div><img src="<?php echo SITE_URL?>img/popUpOne.jpg" alt=""/></div>
								<div class="stepTitle">Sign up<br/><span>(it&#x2019;s free)</span></div>
							</div>
							<div class="stepSection howItWorksStepTwo">
								<div><img src="<?php echo SITE_URL?>img/popUpTwo.jpg" alt=""/></div>
								<div class="stepTitle">Select a Store &#x0026; Shop</div>
							</div>
							<div class="stepSection last howItWorksStepThree">
								<div><img src="<?php echo SITE_URL?>img/popUpThree.jpg" alt=""/></div>
								<div class="stepTitle">Get Cash Back!</div>
							</div>
							<div class="cb"></div>
						</div>						
					</div>
					<div class="popUpContentRight">
						<div class="formHeader">SIGN UP TODAY!</div>
						<div class="formBody">
							<div class="fbApi"><a href=""><img alt="" src="<?php echo SITE_URL?>img/fbApi.jpg"/></a></div>
							<div class="signUpWithEmail">Or- Sign up with Email</div>

							<form action="" method="post">
								<div class="customInputBox"><input id="popupEmail" type="text" name="email" placeholder="Email"/></div>
								<div class="customInputBox"><input type="password" name="password" placeholder="Password"/></div>
								<div class="formActions">
									<div class="formActionsLeft">
										<button type="submit" id='submitform' class="customButton customButtonHomePage"><span>SIGN UP</span></button>	                            		
									</div>
									<div class="formActionsRight">
										<div class="alreadyMember">Already a Member?</div>
										<div class="login" ><a href="" id='loginLink'>LOGIN</a></div>
									</div>
									<div class="cb"></div>
								</div>
								<input type='hidden' name='action' value='signup'>
							</form>
							
						</div>
					</div>
					
				<!-- Close the pop up and refresh the parent -->
					<script>
						$(function(){
							<?php if($close_popup){ ?>
							parent.location.href = '<?php echo SITE_URL;?>signup_or_login.php';
							<?php } ?>
							$('#loginLink').click(function(){
								parent.location.href = '<?php echo SITE_URL;?>signup_or_login.php';
							});
						});
						
					</script>
					
					
					<div class="cb"></div>
				</div>
				<div class="CashBackStores">EARN CASH BACK AT THESE STORES PLUS MORE!</div>
				<div class="storeIconsContainer">
					<div class="sites"><img src="<?php echo SITE_URL?>img/storeLogos/sample1.jpg" alt=""/></div>
					<div class="sites"><img src="<?php echo SITE_URL?>img/storeLogos/sample6.jpg" alt=""/></div>
					<div class="sites"><img src="<?php echo SITE_URL?>img/storeLogos/sample2.jpg" alt=""/></div>
					<div class="sites"><img src="<?php echo SITE_URL?>img/storeLogos/sample3.jpg" alt=""/></div>
					<div class="sites"><img src="<?php echo SITE_URL?>img/storeLogos/sample4.jpg" alt=""/></div>
					<div class="cb"></div>
				</div>
				<div class="WhyToJoinContainer">
					<div class="WhyToJoinContainerContent">
						<div class="WhyToJoinContainerLeft">
							<div>WHY YOU</div>
							<div class="heightChange">SHOULD JOIN</div>
						</div>
						<div class="WhyToJoinContainerRight">
							<div>You get cash back at <span>OVER 200 STORES</span> when you start your shopping trip at FashionCache.com. <br/>There are no fees, tricks, or gimmicks. Simply click on your desired store and begin shopping. Retailers pay Fashion Cache a commission for sending you their way and we use the commission to <span>GIVE YOU CASH BACK</span>. To get started simply enter your email address so we can let you know when we have your check ready.</div>
						</div>	
						<div class="cb"></div>
					</div>
				</div>
			</div>
		</div>
	   <script type="text/javascript" src="<?php echo SITE_URL?>js/plugins.js"></script>
	   <script type="text/javascript" src="<?php echo SITE_URL?>js/main.js"></script>
	   <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	   <script type="text/javascript">
		   (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		   function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		   e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		   e.src='//www.google-analytics.com/analytics.js';
		   r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		   ga('create','UA-XXXXX-X');ga('send','pageview');
	   </script>
  </body>
</html>		