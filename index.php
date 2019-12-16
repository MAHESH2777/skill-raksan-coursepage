
<!doctype html>
<html>

<head>
	<meta charset=utf-8>
	<title>SKILLMONKS</title>
	<meta name=description content="">
	<meta name=keywords content="">
	<meta name=viewport content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" href=images/favicon2.ico type=image/x-icon>
	<link rel=icon href="images/logo.png" type=image/x-icon>
	<link href="css/skill-styles.css" type=text/css media=all rel=stylesheet />
	<link href="css/responsive-styles.css" type=text/css media=all rel=stylesheet />
	<link href="css/jquery.mCustomScrollbar.min.css" type=text/css media=all rel=stylesheet />
	<link href="css/swiper.min.css" type=text/css media=all rel=stylesheet>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<?php include 'dbconfig.php'; ?>

	<script type=text/javascript>
		window.smartlook || (function (f) {
			var b = smartlook = function () {
					b.api.push(arguments)
				},
				a = f.getElementsByTagName("head")[0];
			var g = f.createElement("script");
			b.api = new Array();
			g.async = true;
			g.type = "text/javascript";
			g.charset = "utf-8";
			g.src = "https://rec.smartlook.com/recorder.js";
			a.appendChild(g)
		})(document);
		smartlook("init", "b4f8099de129bd57a3792a43173580cd8fa9d736");
	</script>
<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//awstats.moolya.global/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '3']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

</head>

<body>
<?php
if (isset($_POST['submit'])) {
$mysqltime = date_create()->format('Y-m-d H:i:s');
$sql = "INSERT INTO student_details2 (name, number, email, city, course,date)
VALUES ('" . $_POST["name"] . "','" . $_POST["number"] . "','" . $_POST["email"] . "','" . $_POST["city"] . "','" . $_POST["course"] . "','" . $mysqltime . "')";

$result = mysqli_query($conn, $sql);
echo "<script type='text/javascript'>
alert('Thanks For Registring.');
window.setTimeout(window.location.href = 'https://www.skillmonks.com',5000);</script>";
exit;
}
?> 
	<div class=mob_menu>
		<ul>
			<li class=m_about>DATA SCIENCE</li>
			<li class=m_cap> FULL STACK JAVA</li>
			<li class=m_pr> CYBER SECURITY</li>
			<li class=m_cl>IOS</li>
			<li class=m_km>AWS+DEVOPS</li>
			<li class=m_ot>MULTIMEDIA</li>
			<li class=m_car> DIGITAL MARKETING</li>
			<li class=m_con>SAP</li>
		</ul>
	</div>
	<header id="topnav" class="defaultscroll sticky bg-white">
            <div class="container headlogo">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="http://beta.skillmonks.com"><img src="images/logo.png" class="logo-responsive mainlogo"><span class="text-primary"></span></a>
                </div>                 
                <!--<div class="buy-button">
                    <a href="http://beta.skillmonks.com" target="_blank" class="btn btn-primary rounded">Visit Website</a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <!--<li><a href="experts.php">Experts</a></li>--> 
					
                        <li><a>Email: contact@skillmonks.com</a></li>
                        <li class="last-elements"><a>Phone: +91 9578 800 900</a></li>
                        
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header>
		<div class="headone">
		<div>
		<div>
		<h3 class="toptext">Explore in Demand IT skills - 2020</h3>
		
		</div>
		</div>
		
		</div>
	<div class="main_body">
		<div class="web_blocks">
			<div class="default_slot">
				<div class="outer_block" name=about_block>
					<div class="inner_block block1" id='one'>
						<div class="block_content" style="background-color:#d2b122bf">
							<h2 class="">DATA SCIENCE</h2>
							<span>Without data you’re just another person with an opinion.
								<br>
							
							</span>
						</div>
					</div>
				</div>
				<div class="outer_block" name="cteam_block">
					<div class="inner_block block5 two" id='two'>
						<div class="block_content" style="background-color:#00eb33c2" >
							<h2>AWS+DEVOPS</h2>
							<span>The most powerful tool we have as developers is automation.
								<br>
						
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class=default_slot>
				<div class=outer_block name=capabilities_block>
					<div class="inner_block block2" id='three'>
						<div class="block_content" style="background-color:#841539c7">
							<h2>CYBER SECURITY</h2>
							<span>There are only two types of companies: those that have been hacked, and those that will be.
								<br>
					
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=our_team_block>
					<div class="inner_block block6" id='four'>
						<div class="block_content" style="background-color:#00a394c2">
							<h2>IOS</h2>
							<span>Be a part of the future of smart applications!!
								<br>
							
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class=default_slot>
				<div class=outer_block name=products_block>
					<div class="inner_block block3" id='five'>
						<div class="block_content" style="background-color:#3e3e3eb8">
							<h2>FULL STACK JAVA</h2>
							<span>Try to learn something about everything and everything about something.
								<br>
						
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=careers_block>
					<div class="inner_block block7" id='six'>
						<div class="block_content" style="background-color:#0069ebc2">
							<h2>MULTIMEDIA</h2>
							<span>You can’t use up creativity - The more you use, the more you have!!
								<br>
					
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class=default_slot>
				<div class=outer_block name=clients_block>
					<div class="inner_block block4" id='seven'>
						<div class="block_content" style="background-color:#0a169fc2">
							<h2>DIGITAL MARKETING</h2>
							<span>Focus on how to be social, not how to do social.
								<br>
						
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=contact_block>
					<div class="inner_block block8" id='eight'>
						<div class="block_content" style="background-color:#cc0101c2">
							<h2>SAP</h2>
							<span>Data is the key to business, but data without Data Processing is purposeless.
								<br>
							
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class=mobile_blocks>
			<div class=gallery>
				<div class=outer_block name=about_block>
					<div class="inner_block block1" id='one1'>
						<div class="block_content" style="background-color:#d2b122bf">
							<h2>DATA SCIENCE</h2>
							<span>Without data you’re just another person with an opinion.
								<br>
						
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=cteam_block>
					<div class="inner_block block5" id='two1'>
						<div class="block_content" style="background-color:#00eb33c2">
							<h2>AWS+DEVOPS</h2>
							<span>The most powerful tool we have as developers is automation.
								<br>
							
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=capabilities_block>
					<div class="inner_block block2" id='three1'>
						<div class="block_content" style="background-color:#841539c7">
							<h2>CYBER SECURITY</h2>
							<span>There are only two types of companies: those that have been hacked, and those that will be.
								<br>
					
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=our_team_block>
					<div class="inner_block block6" id='four1'>
						<div class="block_content" style="background-color:#00a394c2" >
							<h2>IOS</h2>
							<span>Be a part of the future of smart applications!!
								<br>
					
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=products_block>
					<div class="inner_block block3" id='five1'>
						<div class="block_content" style="background-color:#3e3e3eb8">
							<h2>FULL STACK JAVA</h2>
							<span>Try to learn something about everything and everything about something.
								<br>
					
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=careers_block>
					<div class="inner_block block7" id='six1'>
						<div class="block_content" style="background-color:#0069ebc2">
							<h2>MULTIMUDIA</h2>
							<span>It is never late too be, what you might have been
								<br>
							
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=clients_block>
					<div class="inner_block block4" id='seven1'>
						<div class="block_content" style="background-color:#0a169fc2">
							<h2>DIGITAL MARKETING</h2>
							<span>Focus on how to be social, not how to do social.
								<br>
						
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=contact_block>
					<div class="inner_block block8" id='eight1'>
						<div class="block_content" style="background-color:#cc0101c2">
							<h2>SAP</h2>
							<span>Data is the key to business, but data without Data Processing is purposeless.
								<br>
							
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class=swiper_navigation>
				<div class="unslider-arrow prev">
                       
				</div>
				<div class="unslider-arrow next">

				</div>
			</div>
		</div>
		<div class="content_block about_block">
			<div class=content_left>
				<div class="desktop-view">
			<?php include 'form.php'; ?>
                  </div>
			</div>
			<div class=content_right>
			 <a href=# class="close_block close_page">
					<img src=images/close.png alt="close button" />
				</a>
				<div class=content_inner_block>
				<div class="form-mobile">
							<?php include 'form.php'; ?>
							<br>
							</div>

					<h2 style="color:#01783d;font-size: 25px;">DATA 
						<span>
							<span>SCIENCE</span>
				
						</span>
					</h2>
					<p>
						<span class=logo_text>
							
						
						</span>Information is the oil of the 21st century and analytics is the combustion engine.</p>
					<p>
							<div class="maintext">
				<h4 class="texthead">Why Go For Data Science?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> 50,000 job vacancies for Data Scientists in India  </li>
				<li><i class="fa fa-check-circle"></i> 7x growth of Indian Data Science industry by the next 5 years</li>
				<li> <i class="fa fa-check-circle"></i> 36% salary hike with additional Java and ML skills</li>
					<li> <i class="fa fa-check-circle"></i> An average pay scale of 10 laks p.a.</li>
				</ul>
				</div>
				<div class="mobilewhy">
				<h4 class="texthead">Why Choose SkillMonks?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Top Courses only from the best Training Institutions</li>
				<li><i class="fa fa-check-circle"></i>Personalized career guidance from real-time Working Professionals</li>
				<li><i class="fa fa-check-circle"></i> Best Course Price, Money Back Guarantee and Cash Back offers</li>
				<li><i class="fa fa-check-circle"></i>Executive, Certification and Placement Programs</li>
				</ul>
				</div>
				<br>
					<h4 class="whychoose">Why Choose SkillMonks?</h4>
					<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/curriculam.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Top Courses only from the best Training Institutions </li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/discount.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Executive, Certification and Placement Programs</li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->

				
				</div>
				<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/quality.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Best Course Price, Money Back Guarantee and Cash Back offers</li>
							
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
	                  <div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/proven-expart.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Personalized career guidance from real-time Working Professionals</li>
					
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
					
				</div>
				<br>
				<br>
						<span class="r_red">I</span>ndia’s First Education Market Place which helps you discover appropriate courses and then get enrolled with training providers in the country.
		
				</div>
			</div>
		</div>
		<div class="content_block capabilities_block">
				<div class=content_left>
				<?php include 'form.php'; ?>
					</div>
				<div class=content_right>
			 <a href=# class="close_block close_page">
					<img src=images/close.png alt="close button" />
				</a>
				<div class=content_inner_block>
				<div class="form-mobile">
							<?php include 'form.php'; ?>
							<br>
							</div>

					<h2 style="color:#01783d;font-size: 25px;">CYBER 
						<span>
							<span>SECURITY</span>
				
						</span>
					</h2>
					<p>
						<span class=logo_text>
							
						
						</span>Earn more and secure more with your hackproof skills </p>
							<div class="maintext">
				<h4 class="texthead">Why Go For Cybersecurity?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> More than 30,000 Cybersecurity jobs in India </li>
				<li><i class="fa fa-check-circle"></i> The Indian Cybersecurity market growth to reach 2.4 trillion INR</li>
				<li> <i class="fa fa-check-circle"></i> 80% of companies hire Chief Information Security Officer (CISO)</li>
						<li> <i class="fa fa-check-circle"></i> Over 50-100% hike in salary</li>
				</ul>
				</div>
				<div class="mobilewhy">
				<h4 class="texthead">Why Choose SkillMonks?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Top Courses only from the best Training Institutions</li>
				<li><i class="fa fa-check-circle"></i>Personalized career guidance from real-time Working Professionals</li>
				<li><i class="fa fa-check-circle"></i> Best Course Price, Money Back Guarantee and Cash Back offers</li>
				<li><i class="fa fa-check-circle"></i>Executive, Certification and Placement Programs</li>
				</ul>
				</div>
					<p>
					<h4 class="whychoose">Why Choose SkillMonks?</h4>
					<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/curriculam.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Top Courses only from the best Training Institutions </li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->

					
						<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/discount.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Executive, Certification and Placement Programs</li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				</div>
				<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/quality.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Best Course Price, Money Back Guarantee and Cash Back offers</li>
							
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
                     <div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/proven-expart.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Personalized career guidance from real-time Working Professionals</li>
					
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				
				</div>
		
					<br>
				<br>
						<span class="r_red">I</span>ndia’s First Education Market Place which helps you discover appropriate courses and then get enrolled with training providers in the country.
		
				</div>
		</div>
		</div>
		<div class="content_block products_block">
				<div class=content_left>
				<?php include 'form.php'; ?>
						  
					</div>
			<div class=content_right>
			 <a href=# class="close_block close_page">
					<img src=images/close.png alt="close button" />
				</a>
				<div class=content_inner_block>
				<div class="form-mobile">
							<?php include 'form.php'; ?>
							<br>
							</div>

					<h2 style="color:#01783d;font-size: 25px;">FULL  
						<span>
							<span>STACK JAVA</span>
				
						</span>
					</h2>
					<p>
						<span class=logo_text>
							
						
						</span>All-in-one software development role in high demand in the industry</p>
							<div class="maintext">
				<h4 class="texthead">Why Go For Full Stack Java?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> 20% demand growth for Full Stack developers in India </li>
				<li><i class="fa fa-check-circle"></i> Only 3.84% have required skills of the total engineers in the IT sector</li>
				<li> <i class="fa fa-check-circle"></i> 2.5-3 million job opportunity in Indian IT/ITeS industry</li>
					<li> <i class="fa fa-check-circle"></i> Entry-level package of 7 lakhs p.a</li>
				</ul>
				</div>
				<div class="mobilewhy">
				<h4 class="texthead">Why Choose SkillMonks?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Top Courses only from the best Training Institutions</li>
				<li><i class="fa fa-check-circle"></i>Personalized career guidance from real-time Working Professionals</li>
				<li><i class="fa fa-check-circle"></i> Best Course Price, Money Back Guarantee and Cash Back offers</li>
				<li><i class="fa fa-check-circle"></i>Executive, Certification and Placement Programs</li>
				</ul>
				</div>
					<p>
					<h4 class="whychoose">Why Choose SkillMonks?</h4>
					<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/curriculam.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Top Courses only from the best Training Institutions </li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
		             <div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/discount.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Executive, Certification and Placement Programs</li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
			
				</div>
				<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/quality.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Best Course Price, Money Back Guarantee and Cash Back offers</li>
							
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
							<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/proven-expart.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Personalized career guidance from real-time Working Professionals</li>
					
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				</div>
		        <br>
				<br>
						<span class="r_red">I</span>ndia’s First Education Market Place which helps you discover appropriate courses and then get enrolled with training providers in the country.
		
				</div>
		</div>
		</div>
		<div class="content_block clients_block">
				<div class=content_left>
				
				<?php include 'form.php'; ?>
					</div>
			<div class=content_right>
			 <a href=# class="close_block close_page">
					<img src=images/close.png alt="close button" />
				</a>
				<div class=content_inner_block>
				<div class="form-mobile">
							<?php include 'form.php'; ?>
							<br>
							</div>

					<h2 style="color:#01783d;font-size: 25px;">DIGITAL  
						<span>
							<span>MARKETING</span>
				
						</span>
					</h2>
					<p>
						<span class=logo_text>
							
						
						</span>Get paid for browsing through your social media - Digital Marketing is today’s big trend!!</p>
						<div class="maintext">
				<h4 class="texthead">Why Go For Digital Marketing?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i>  A broad spectrum of 20 lakhs Digital Marketing jobs in India</li>
				<li><i class="fa fa-check-circle"></i> Indian digital advertising industry has an annual growth rate of 33.5%</li>
				<li> <i class="fa fa-check-circle"></i> Over 32% salary hike with different Digital Marketing skills</li>
				<li> <i class="fa fa-check-circle"></i> An annual income of 3-6 lakhs</li>
				</ul>
				</div>
				<div class="mobilewhy">
				<h4 class="texthead">Why Choose SkillMonks?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Top Courses only from the best Training Institutions</li>
				<li><i class="fa fa-check-circle"></i>Personalized career guidance from real-time Working Professionals</li>
				<li><i class="fa fa-check-circle"></i> Best Course Price, Money Back Guarantee and Cash Back offers</li>
				<li><i class="fa fa-check-circle"></i>Executive, Certification and Placement Programs</li>
				</ul>
				</div>
					<p>
					<h4 class="whychoose">Why Choose SkillMonks?</h4>
					<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/curriculam.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Top Courses only from the best Training Institutions </li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
		           <div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/discount.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Executive, Certification and Placement Programs</li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				</div>
				<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/quality.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Best Course Price, Money Back Guarantee and Cash Back offers</li>
							
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->

					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/proven-expart.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Personalized career guidance from real-time Working Professionals</li>
					
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
			
				</div>
		        <br>
		 		<br>
						<span class="r_red">I</span>ndia’s First Education Market Place which helps you discover appropriate courses and then get enrolled with training providers in the country.
		
				</div>
		</div>
		</div>
		<div class="content_block careers_block">
				<div class=content_left>
				<?php include 'form.php'; ?>
					</div>
			<div class=content_right>
			 <a href=# class="close_block close_page">
					<img src=images/close.png alt="close button" />
				</a>
				<div class=content_inner_block>
				<div class="form-mobile">
							<?php include 'form.php'; ?>
							<br>
							</div>

					<h2 style="color:#01783d;font-size: 25px;">
						<span>
							<span>MULTIMEDIA</span>
				
						</span>
					</h2>
					<p>
						<span class=logo_text>
						</span>Rule with the two C’s of media - Creativity and Communication!!</p>
							<div class="maintext">
				<h4 class="texthead">Why Go For Multimedia?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> 140k-150k professional requirement by the Indian Media & Entertainment industry for the next 5 years </li>
				<li><i class="fa fa-check-circle"></i> The Media & Entertainment industry to have a 15% growth rate</li>
				<li> <i class="fa fa-check-circle"></i> Around 800 private satellite TV channels broadcasted in India</li>
				<li> <i class="fa fa-check-circle"></i> An average salary of upto 3 lakhs p.a.</li>
				</ul>
				</div>
				<div class="mobilewhy">
				<h4 class="texthead">Why Choose SkillMonks?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Top Courses only from the best Training Institutions</li>
				<li><i class="fa fa-check-circle"></i>Personalized career guidance from real-time Working Professionals</li>
				<li><i class="fa fa-check-circle"></i> Best Course Price, Money Back Guarantee and Cash Back offers</li>
				<li><i class="fa fa-check-circle"></i>Executive, Certification and Placement Programs</li>
				</ul>
				</div>
					<p>
					<h4 class="whychoose">Why Choose SkillMonks?</h4>
					<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/curriculam.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Top Courses only from the best Training Institutions </li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
	                <div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/discount.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Executive, Certification and Placement Programs</li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
			
				</div>
				<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/quality.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Best Course Price, Money Back Guarantee and Cash Back offers</li>
							
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
							<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/proven-expart.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Personalized career guidance from real-time Working Professionals</li>
					
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				</div>
	            <br>
				
				<br>
						<span class="r_red">I</span>ndia’s First Education Market Place which helps you discover appropriate courses and then get enrolled with training providers in the country.
		
				</div>
		</div>
		</div>
		<div class="content_block contact_block">
				<div class=content_left>
				<?php include 'form.php'; ?>
						  
					</div>
			<div class=content_right>
			 <a href=# class="close_block close_page">
					<img src=images/close.png alt="close button" />
				</a>
				<div class=content_inner_block>
				<div class="form-mobile">
							<?php include 'form.php'; ?>
							<br>
							</div>

					<h2 style="color:#01783d;font-size: 25px;"> 
						<span>
							<span>SAP</span>
				
						</span>
					</h2>
					<p>
						<span class=logo_text>
						</span>SAP is the standard for business software.</p>
						<div class="maintext">
				<h4 class="texthead">Why Go For SAP?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Upto 22% salary hike with different SAP skills </li>
				<li><i class="fa fa-check-circle"></i> Indian SAP market recorded a 70% growth rate</li>
				<li> <i class="fa fa-check-circle"></i> 6-8 lakhs average pay for SAP Consultant</li>
					<li> <i class="fa fa-check-circle"></i> Reliance, Airtel, Vodafone use SAP software - job opportunities!!</li>
				</ul>
				</div>
				<div class="mobilewhy">
				<h4 class="texthead">Why Choose SkillMonks?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Top Courses only from the best Training Institutions</li>
				<li><i class="fa fa-check-circle"></i>Personalized career guidance from real-time Working Professionals</li>
				<li><i class="fa fa-check-circle"></i> Best Course Price, Money Back Guarantee and Cash Back offers</li>
				<li><i class="fa fa-check-circle"></i>Executive, Certification and Placement Programs</li>
				</ul>
				</div>
					<p>
					<h4 class="whychoose">Why Choose SkillMonks?</h4>
					<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/curriculam.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Top Courses only from the best Training Institutions </li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->

					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/discount.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Executive, Certification and Placement Programs</li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				
				</div>
				<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/quality.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Best Course Price, Money Back Guarantee and Cash Back offers</li>
							
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->

						<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/proven-expart.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Personalized career guidance from real-time Working Professionals</li>
					
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				</div>
	            <br>
				<br>
						<span class="r_red">I</span>ndia’s First Education Market Place which helps you discover appropriate courses and then get enrolled with training providers in the country.
		
				</div>
		</div>
		</div>
		<div class="content_block cteam_block">
				<div class=content_left>
				
				<?php include 'form.php'; ?> 
					</div>
				<div class=content_right>
			 <a href=# class="close_block close_page">
					<img src=images/close.png alt="close button" />
				</a>
				<div class=content_inner_block>
				<div class="form-mobile">
							<?php include 'form.php'; ?>
							<br>
							</div>

					<h2 style="color:#01783d;font-size: 25px;">AWS+
							<span>DEVOPS</span>
				
						</span>
					</h2>
					<p>
						<span class=logo_text>
							
						
						</span>The most powerful tool we have as developers is automation.</p>
						<div class="maintext">
				<h4 class="texthead">Why Go For AWS+DevOps?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Highest pay of over 30 lakhs p.a. Package to DevOps professionals </li>
				<li><i class="fa fa-check-circle"></i> 80% of Fortune 500 companies to adopt DevOps</li>
				<li> <i class="fa fa-check-circle"></i> Annual average salary of 6-7 lakhs with AWS certification</li>
				<li> <i class="fa fa-check-circle"></i> Chance to work with ADP, eBay, GE, ING, Intuit, PayPal, Splunk, Uber</li>
				</ul>
				</div>
				<div class="mobilewhy">
				<h4 class="texthead">Why Choose SkillMonks?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Top Courses only from the best Training Institutions</li>
				<li><i class="fa fa-check-circle"></i>Personalized career guidance from real-time Working Professionals</li>
				<li><i class="fa fa-check-circle"></i> Best Course Price, Money Back Guarantee and Cash Back offers</li>
				<li><i class="fa fa-check-circle"></i>Executive, Certification and Placement Programs</li>
				</ul>
				</div>
				<br>
					<p>
					<h4 class="whychoose">Why Choose SkillMonks?</h4>
					<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/curriculam.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Top Courses only from the best Training Institutions </li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/discount.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Executive, Certification and Placement Programs</li>
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				</div>
				<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/quality.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Best Course Price, Money Back Guarantee and Cash Back offers</li>
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->

					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/proven-expart.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Personalized career guidance from real-time Working Professionals</li>
					
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				</div>
				
				<br>
	            <br>
						<span class="r_red">I</span>ndia’s First Education Market Place which helps you discover appropriate courses and then get enrolled with training providers in the country.
		
				</div>
		</div>
		</div>
		<div class="content_block our_team_block">
				<div class=content_left>
				<?php include 'form.php'; ?>
					</div>
						<div class=content_right>
			 <a href=# class="close_block close_page">
					<img src=images/close.png alt="close button" />
				</a>
				<div class=content_inner_block>
				<div class="form-mobile">
							<?php include 'form.php'; ?>
							<br>
							</div>

					<h2 style="color:#01783d;font-size: 25px;">IOS
							<span></span>
				
						</span>
					</h2>
					<p>
						<span class=logo_text>
						</span>Get a leap in your career with iPhone assistance.</p>
						<div class="maintext">
				<h4 class="texthead">Why Go For IOS?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Over 873,000 job opportunities in India</li>
				<li><i class="fa fa-check-circle"></i> An average salary of 4-5 lakhs p.a.</li>
				<li> <i class="fa fa-check-circle"></i> Indian iPhone market witnessed 19% growth</li>
				<li> <i class="fa fa-check-circle"></i> IOS programmers earned 424 billion INR for 2.2 million apps in AppStore</li>
				</ul>
				</div>
					<div class="mobilewhy">
				<h4 class="texthead">Why Choose SkillMonks?</h4>
				<ul>
				<li><i class="fa fa-check-circle"></i> Top Courses only from the best Training Institutions</li>
				<li><i class="fa fa-check-circle"></i>Personalized career guidance from real-time Working Professionals</li>
				<li><i class="fa fa-check-circle"></i> Best Course Price, Money Back Guarantee and Cash Back offers</li>
				<li><i class="fa fa-check-circle"></i>Executive, Certification and Placement Programs</li>
				</ul>
				</div>
				<br>
					<p>
					<h4 class="whychoose">Why Choose SkillMonks?</h4>
					<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/curriculam.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Top Courses only from the best Training Institutions </li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
								<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/discount.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Executive, Certification and Placement Programs</li>
						
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->

				</div>
				<div class="row ca-initvalues-applied lqd-animations-done" style="display: inline-flex" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.lqd-column&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;160&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;translateX&quot;:-37,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateX&quot;:0,&quot;opacity&quot;:1}}">
					
					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-paper"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							 <img src="images/quality.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>Best Course Price, Money Back Guarantee and Cash Back offers</li>
							
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->

					<div class="lqd-column col-md-6 lqd-unit-animation-done" style="transform: translateX(0px); opacity: 1;">

						<div class="iconbox iconbox-side iconbox-circle iconbox-sm iconbox-heading-sm" data-plugin-options="{&quot;color&quot;: &quot;#fff&quot;}">
							<div class="iconbox-icon-wrap">
								<span class="iconbox-icon-container bg-secondary">
									<span class="iconbox-icon-hover-bg bg-primary"></span>
									<i class="icon-ion-ios-calculator"></i>
								</span>
							</div><!-- /.iconbox-icon-wrap -->
							<div class="contents">
							<img src="images/proven-expart.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>Personalized career guidance from real-time Working Professionals</li>
					
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
		
				</div>
				<br>
	            <br>
						<span class="r_red">I</span>ndia’s First Education Market Place which helps you discover appropriate courses and then get enrolled with training providers in the country.
		
				</div>
		</div>
		</div>
	</div>
	<div class=footer>
		<p class=left_align>©
			<span class=r_red>SKILL MONKS</span>
		 All Rights Reserved 2019.
			
		</p>
		<p class=right_align>
			<a href="https://www.facebook.com/SKILL-MONKS-1201759963330100/" target=_blank>
				<img src=images/facebook_page.png alt="">
			</a>
			<a href="https://www.youtube.com/channel/UCY0mc8kDBKzyJ13ESiVcBFw/featured" target=_blank>
				<img src="images/youtube (1).png" alt="">
			</a>
			<a target=_blank href="https://twitter.com/SkillMonks">
				<img src=images/twitter_profile.png alt="">
			</a>
			<a target=_blank href="https://www.linkedin.com/company/skill-monks">
				<img src=images/linkedin_profile.png alt="">
			</a>
			
		</p>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/swiper.min.js" type=text/javascript></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script  src="js/jquery.flipping-gallery.js" type='text/javascript'></script>
	<script>
		if (screen && screen.width < 480) {
			document.write('<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"><\/script>')
		}
	</script>
	<script>
	$('#one').click(function(){
		$('.one').val('DATA SCIENCE');
	});
	$('#one1').click(function(){
		$('.one').val('DATA SCIENCE');
	});
	</script>

	<script>
	$('#two').click(function(){
		$('.two').val('AWA+DEVOPS');
	});
	$('#two1').click(function(){
		$('.two').val('AWA+DEVOPS');
	});
	</script>

		<script>
	$('#three').click(function(){
		$('.three').val('CYBER SECURITY');
	});
	$('#three1').click(function(){
		$('.three').val('CYBER SECURITY');
	});
	</script>

		<script>
	$('#four').click(function(){
		$('.four').val('IOS');
	});
	$('#four1').click(function(){
		$('.four').val('IOS');
	});

	</script>

		<script>
	$('#five').click(function(){
		$('.five').val('FULL STACK JAVA');
	});
	$('#five1').click(function(){
		$('.five').val('FULL STACK JAVA');
	});
	</script>

		<script>
	$('#six').click(function(){
		$('.six').val('MULTIMEDIA');
	});
	$('#six1').click(function(){
		$('.six').val('MULTIMEDIA');
	});
	</script>

		<script>
	$('#seven').click(function(){
		$('.seven').val('DIGITAL MARKETING');
	});
	$('#seven1').click(function(){
		$('.seven').val('DIGITAL MARKETING');
	});
	</script>
	
	<script>
	$('#eight').click(function(){
		$('.eight').val('SAP');
	});
	$('#eight1').click(function(){
		$('.eight').val('SAP');
	});
	</script>

	<script src="js/custom-scripts.js" type=text/javascript></script>
	<script>
		document.addEventListener("touchstart", function () {}, false);
		(function ($) {
			"use strict";
			$(function () {
				var randNumber_1 = parseInt(Math.ceil(Math.random() * 15), 10);
				var randNumber_2 = parseInt(Math.ceil(Math.random() * 15), 10);
				humanCheckCaptcha(randNumber_1, randNumber_2);
			});

			function humanCheckCaptcha(randNumber_1, randNumber_2) {
				$("#humanCheckCaptchaBox").html("Solve The Math ");
				$("#firstDigit").html('<input name="mathfirstnum" id="mathfirstnum" class="form-control" type="text" value="' +
					randNumber_1 + '" readonly>');
				$("#secondDigit").html('<input name="mathsecondnum" id="mathsecondnum" class="form-control" type="text" value="' +
					randNumber_2 + '" readonly>');
			}

		})(jQuery);
	</script>
	<script>
		(function ($) {
			"use strict";
			$(function () {
				var randNumber_2 = parseInt(Math.ceil(Math.random() * 15), 10);
				var randNumber_3 = parseInt(Math.ceil(Math.random() * 15), 10);
				humanCheckCaptcha1(randNumber_2, randNumber_3);
			});

			function humanCheckCaptcha1(randNumber_2, randNumber_3) {
				$("#humanCheckCaptchaBox1").html("Solve The Math ");
				$("#firstDigit1").html('<input name="mathfirstnum1" id="mathfirstnum1" class="form-control" type="text" value="' +
					randNumber_2 + '" readonly>');
				$("#secondDigit1").html(
					'<input name="mathsecondnum1" id="mathsecondnum1" class="form-control" type="text" value="' + randNumber_3 +
					'" readonly>');
			}

		})(jQuery);
	</script>

	<script>
		(function (f, i, d, c, b, g) {
			f.hj = f.hj || function () {
				(f.hj.q = f.hj.q || []).push(arguments)
			};
			f._hjSettings = {
				hjid: 447513,
				hjsv: 5
			};
			b = i.getElementsByTagName("head")[0];
			g = i.createElement("script");
			g.async = 1;
			g.src = d + f._hjSettings.hjid + c + f._hjSettings.hjsv;
			b.appendChild(g)
		})(window, document, "//static.hotjar.com/c/hotjar-", ".js?sv=");
	</script>
</body>

</html>
