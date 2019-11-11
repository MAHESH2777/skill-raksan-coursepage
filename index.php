
<!doctype html>
<html>

<head>
	<meta charset=utf-8>
	<title>SKILL MONKS</title>
	<meta name=description content="">
	<meta name=keywords content="">
	<meta name=viewport content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" href=images/favicon2.ico type=image/x-icon>
	<link rel=icon href="images/logo.png" type=image/x-icon>
	<link href="css/raksan-styles.css" type=text/css media=all rel=stylesheet />
	<link href="css/responsive-styles.css" type=text/css media=all rel=stylesheet />
	<link href="css/jquery.mCustomScrollbar.min.css" type=text/css media=all rel=stylesheet />
	<link href="css/swiper.min.css" type=text/css media=all rel=stylesheet>
	<?php include 'dbconfig.php'; ?>

	<style>
		* {
		  box-sizing: border-box;
		}
		
		input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  resize: vertical;
		}
		
		label {
		  padding: 12px 12px 12px 0;
		  display: inline-block;
		}
		form{
			padding: 29px 72px;
		}
		input{
			margin:6px 0px;
		}
		
		input[type=submit] {
		  background-color: #4CAF50;
		  color: white;
		  padding: 12px 20px;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		  float: left;
		}
		
		input[type=submit]:hover {
		  background-color: #45a049;
		}
		.header_block3, .header_block4 {
    width: 30%;
    float: left;
    text-align:center;
    padding-right: 10px;
    padding: 29px 3px 29px 155px;
}
		
		.container {
	
		  background-color: #ffffff;
		  padding: 20px;
		}
		
		.col-25 {
		  float: left;
		  width: 25%;
		  margin-top: 6px;
		}
		
		.col-75 {
		  float: left;
		  width: 75%;
		  margin-top: 6px;
		}
		
		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		
		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		  .col-25, .col-75, input[type=submit] {
			width: 100%;
			margin-top: 0;
		  }
		}
		@media screen and (max-width: 720px) {
	        .desktop-view{
             display:none;
			 
			}

		}
		@media screen and (min-width: 721px) {
	        .form-mobile{
             display:none;
			 padding-top:10px;
			}
			.right-cont-img{
				margin: 2px 83px;
			}
			.contents{
				padding:10px 70px;
			}
		}
		
		@media screen and (max-width: 720px) {
	        form{
				padding: 48px 41px;
			}
			.contents{padding:0px 0px 10px 0px}
			
		}
		</style>
		
	<script>
		(function (d, f, k, j, h, c, b) {
			d.GoogleAnalyticsObject = h;
			d[h] = d[h] || function () {
				(d[h].q = d[h].q || []).push(arguments)
			}, d[h].l = 1 * new Date();
			c = f.createElement(k), b = f.getElementsByTagName(k)[0];
			c.async = 1;
			c.src = j;
			b.parentNode.insertBefore(c, b)
		})(window, document, "script", "https://www.google-analytics.com/analytics.js", "ga");
		ga("create", "UA-83920813-1", "auto");
		ga("send", "pageview");
	</script>
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
$sql = "INSERT INTO student_details1 (name, number, email, city, course,date)
VALUES ('" . $_POST["name"] . "','" . $_POST["number"] . "','" . $_POST["email"] . "','" . $_POST["city"] . "','" . $_POST["course"] . "','" . $mysqltime . "')";

$result = mysqli_query($conn, $sql);
echo "<script type='text/javascript'>window.top.location='thankyou.html';</script>";
exit;
}
?> 
	<div class=mob_menu>
		<ul>
			<li class=m_about>JAVA</li>
			<li class=m_cap>PYTHON</li>
			<li class=m_pr>UI TECH</li>
			<li class=m_cl>DIGITAL MARKETING</li>
			<li class=m_km>DOTNET</li>
			<li class=m_ot>ANGULAR</li>
			<li class=m_car>MACHINE LEARNING	</li>
			<li class=m_con>PHP</li>
		</ul>
	</div>
	<div class=header>
		<div class=header_block1>
		</div>
		<div class=header_block2>
			<a href=index.html>
				<img src="images/logo.png" width="60px" alt="">
			</a>

		</div>
		<div class=header_block3>
			<!-- <p class=b_blue> <span class=r_red>s</span>trategic <span class=r_red>c</span>onsulting <span class=r_red>p</span>artner</p>
<a href=index.html><img src=images/gartner.png alt="gartner logo"></a>  -->
<p>Contact Us:+919578 800 900  </p>
<p>Email : info@skillmonks.com</p>
		</div>
		<!-- <div class=header_block4  style="padding: 20px 10px;">


		</div> -->
		
	</div>
	<div class=main_body>
		<div class=web_blocks>
			<div class=default_slot>
				<div class=outer_block name=about_block>
					<div class="inner_block block1" id='one'>
						<div class="block_content">
							<h2>JAVA</h2>
							<span>Self Confidence is the first requisite to great undertakings
								<br>
								<b> - Samuel Johnson</b>
							</span>
						</div>
					</div>
				</div>
				<div class="outer_block" name="cteam_block">
					<div class="inner_block block5 two" id='two'>
						<div class="block_content">
							<h2>DOTNET</h2>
							<span>Leadership and Learning are indispensable to each other
								<br>
								<b> – JFK</b>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class=default_slot>
				<div class=outer_block name=capabilities_block>
					<div class="inner_block block2" id='three'>
						<div class=block_content>
							<h2>PYTHON</h2>
							<span>Nothing great in the world has been accomplished without passion
								<br>
								<b>- Georg Hegel</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=our_team_block>
					<div class="inner_block block6" id='four'>
						<div class=block_content>
							<h2>ANGULAR</h2>
							<span>A successful team is a group of many hands and one mind
								<br>
								<b>– Bill Bethel</b>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class=default_slot>
				<div class=outer_block name=products_block>
					<div class="inner_block block3" id='five'>
						<div class=block_content>
							<h2>UI TECH</h2>
							<span>'Great Companies' are built on 'Great Products'
								<br>
								<b>- Elon Musk</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=careers_block>
					<div class="inner_block block7" id='six'>
						<div class=block_content>
							<h2>M & L</h2>
							<span>It is never late too be, what you might have been
								<br>
								<b>- George Eliot</b>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class=default_slot>
				<div class=outer_block name=clients_block>
					<div class="inner_block block4" id='seven'>
						<div class=block_content>
							<h2>D & M</h2>
							<span>Care about your customers more than about yourself, and you will do well
								<br>
								<b>- Derek Sivers</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=contact_block>
					<div class="inner_block block8" id='eight'>
						<div class=block_content>
							<h2>CONTACT US</h2>
							<span>Communication must be HOT - That’s Honest, Open and Two-Way
								<br>
								<b>- Dan Oswald</b>
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
						<div class=block_content>
							<h2>JAVA</h2>
							<span>Self Confidence is the first requisite to great undertakings
								<br>
								<b> - Samuel Johnson</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=cteam_block>
					<div class="inner_block block5" id='two1'>
						<div class=block_content>
							<h2>DOTNET</h2>
							<span>Leadership and Learning are indispensable to each other
								<br>
								<b> – JFK</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=capabilities_block>
					<div class="inner_block block2" id='three1'>
						<div class=block_content>
							<h2>PYTHON</h2>
							<span>Nothing great in the world has been accomplished without passion
								<br>
								<b>- Georg Hegel</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=our_team_block>
					<div class="inner_block block6" id='four1'>
						<div class=block_content >
							<h2>ANGULAR</h2>
							<span>A successful team is a group of many hands and one mind
								<br>
								<b>– Bill Bethel</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=products_block>
					<div class="inner_block block3" id='five1'>
						<div class=block_content>
							<h2>UI TECH</h2>
							<span>Great Companies are built on Great Products
								<br>
								<b>- Elon Musk</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=careers_block>
					<div class="inner_block block7" id='six1'>
						<div class=block_content>
							<h2>MACHINE LEARNING</h2>
							<span>It is never late too be, what you might have been
								<br>
								<b>- George Eliot</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=clients_block>
					<div class="inner_block block4" id='seven1'>
						<div class=block_content>
							<h2>DIGITAL MARKETING</h2>
							<span>Care about your customers more than about yourself, and you will do well
								<br>
								<b>- Derek Sivers</b>
							</span>
						</div>
					</div>
				</div>
				<div class=outer_block name=contact_block>
					<div class="inner_block block8" id='eight1'>
						<div class=block_content>
							<h2>PHP</h2>
							<span>Communication must be HOT - That’s Honest, Open and Two-Way
								<br>
								<b>- Dan Oswald</b>
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

					<h2>JAVA
						<span class=logo_text>
							<span>Java</span>
							<span>Course</span>
						</span>
					</h2>
					<p>
						<span class=logo_text>
							
						
						</span>SKILL MONKS is an integrated incubator for globally scalable SaaS platforms/startups.</p>
					<p>
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
							 <img src="images/student.png" width="50px" class="right-cont-img">
							 <ul style="list-style: none;text-align: start;">
								<li>lorem text pharetra risus pharetra </li>
								<li>lorem text pharetra risus pharetra </li>
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
							<img src="images/book.png" width="50px" class="right-cont-img">
							<ul style="list-style: none;text-align: start;">
								<li>lorem text pharetra risus pharetra </li>
								<li>lorem text pharetra risus pharetra </li>
								</ul>
							</div><!-- /.contents -->
						</div><!-- /.iconbox -->

					</div><!-- /.col-md-4 -->
				</div>
						<span class="r_red">W</span>e discover, ideate, engineer and incubate scalable SaaS platforms in-house.
						<span class="r_red">W</span>e own 100% equity in our in-house incubated platforms/startups. </p>
					<p>
						<span class="r_red">W</span>e believe that the present model of incubation is not experiential, patches resources, borrows temporary skillsets
						and is observatory in style.
						<span class="r_red">S</span>o - we chose to engineer an integrated and experiential process of incubation. </p>
					<p>
						<span class="r_red">W</span>e have a unique ‘IBC’ recurring value business model: ‘Ideate – Build – Capitalize’.
						<span class="r_red">W</span>e build scalable platforms and assign an able senior team to scale it up, while moving on to a new idea to
						be incubated into the next big thing.</p>
					<div class=sub_content_block>
					
						<p>
							<span class=r_red>infinity</span>
							<span class=b_blue>labs</span> is our crucible of innovation and our idea-proving ground, where our most potent product ideas are brewed.</p>
					</div>
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
		
							<h2>About
								<span class=logo_text>
									<span>Python</span>
									<span>Course</span>
								</span>
							</h2>
							<p>
								<span class=logo_text>
								
								</span>SKILL MONKS is an integrated incubator for globally scalable SaaS platforms/startups.</p>
							<p>
								<span class="r_red">W</span>e discover, ideate, engineer and incubate scalable SaaS platforms in-house.
								<span class="r_red">W</span>e own 100% equity in our in-house incubated platforms/startups. </p>
							<p>
								<span class="r_red">W</span>e believe that the present model of incubation is not experiential, patches resources, borrows temporary skillsets
								and is observatory in style.
								<span class="r_red">S</span>o - we chose to engineer an integrated and experiential process of incubation. </p>
							<p>
								<span class="r_red">W</span>e have a unique ‘IBC’ recurring value business model: ‘Ideate – Build – Capitalize’.
								<span class="r_red">W</span>e build scalable platforms and assign an able senior team to scale it up, while moving on to a new idea to
								be incubated into the next big thing.</p>
							<div class=sub_content_block>
							
								<p>
									<span class=r_red>infinity</span>
									<span class=b_blue>labs</span> is our crucible of innovation and our idea-proving ground, where our most potent product ideas are brewed.</p>
							</div>
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
		
							<h2>About
								<span class=logo_text>
									<span>java</span>
									<span>Course</span>
								</span>
							</h2>
							<p>
								<span class=logo_text>
								
								</span>SKILL MONKS is an integrated incubator for globally scalable SaaS platforms/startups.</p>
							<p>
								<span class="r_red">W</span>e discover, ideate, engineer and incubate scalable SaaS platforms in-house.
								<span class="r_red">W</span>e own 100% equity in our in-house incubated platforms/startups. </p>
							<p>
								<span class="r_red">W</span>e believe that the present model of incubation is not experiential, patches resources, borrows temporary skillsets
								and is observatory in style.
								<span class="r_red">S</span>o - we chose to engineer an integrated and experiential process of incubation. </p>
							<p>
								<span class="r_red">W</span>e have a unique ‘IBC’ recurring value business model: ‘Ideate – Build – Capitalize’.
								<span class="r_red">W</span>e build scalable platforms and assign an able senior team to scale it up, while moving on to a new idea to
								be incubated into the next big thing.</p>
							<div class=sub_content_block>
							
								<p>
									<span class=r_red>infinity</span>
									<span class=b_blue>labs</span> is our crucible of innovation and our idea-proving ground, where our most potent product ideas are brewed.</p>
							</div>
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
		
							<h2>About
								<span class=logo_text>
									<span>java</span>
									<span>Course</span>
								</span>
							</h2>
							<p>
								<span class=logo_text>
								
								</span>SKILL MONKS is an integrated incubator for globally scalable SaaS platforms/startups.</p>
							<p>
								<span class="r_red">W</span>e discover, ideate, engineer and incubate scalable SaaS platforms in-house.
								<span class="r_red">W</span>e own 100% equity in our in-house incubated platforms/startups. </p>
							<p>
								<span class="r_red">W</span>e believe that the present model of incubation is not experiential, patches resources, borrows temporary skillsets
								and is observatory in style.
								<span class="r_red">S</span>o - we chose to engineer an integrated and experiential process of incubation. </p>
							<p>
								<span class="r_red">W</span>e have a unique ‘IBC’ recurring value business model: ‘Ideate – Build – Capitalize’.
								<span class="r_red">W</span>e build scalable platforms and assign an able senior team to scale it up, while moving on to a new idea to
								be incubated into the next big thing.</p>
							<div class=sub_content_block>
							
								<p>
									<span class=r_red>infinity</span>
									<span class=b_blue>labs</span> is our crucible of innovation and our idea-proving ground, where our most potent product ideas are brewed.</p>
							</div>
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
		
							<h2>About
								<span class=logo_text>
									<span>java</span>
									<span>Course</span>
								</span>
							</h2>
							<p>
								<span class=logo_text>
								
								</span>SKILL MONKS is an integrated incubator for globally scalable SaaS platforms/startups.</p>
							<p>
								<span class="r_red">W</span>e discover, ideate, engineer and incubate scalable SaaS platforms in-house.
								<span class="r_red">W</span>e own 100% equity in our in-house incubated platforms/startups. </p>
							<p>
								<span class="r_red">W</span>e believe that the present model of incubation is not experiential, patches resources, borrows temporary skillsets
								and is observatory in style.
								<span class="r_red">S</span>o - we chose to engineer an integrated and experiential process of incubation. </p>
							<p>
								<span class="r_red">W</span>e have a unique ‘IBC’ recurring value business model: ‘Ideate – Build – Capitalize’.
								<span class="r_red">W</span>e build scalable platforms and assign an able senior team to scale it up, while moving on to a new idea to
								be incubated into the next big thing.</p>
							<div class=sub_content_block>
							
								<p>
									<span class=r_red>infinity</span>
									<span class=b_blue>labs</span> is our crucible of innovation and our idea-proving ground, where our most potent product ideas are brewed.</p>
							</div>
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
		
							<h2>About
								<span class=logo_text>
									<span>java</span>
									<span>Course</span>
								</span>
							</h2>
							<p>
								<span class=logo_text>
								
								</span>SKILL MONKS is an integrated incubator for globally scalable SaaS platforms/startups.</p>
							<p>
								<span class="r_red">W</span>e discover, ideate, engineer and incubate scalable SaaS platforms in-house.
								<span class="r_red">W</span>e own 100% equity in our in-house incubated platforms/startups. </p>
							<p>
								<span class="r_red">W</span>e believe that the present model of incubation is not experiential, patches resources, borrows temporary skillsets
								and is observatory in style.
								<span class="r_red">S</span>o - we chose to engineer an integrated and experiential process of incubation. </p>
							<p>
								<span class="r_red">W</span>e have a unique ‘IBC’ recurring value business model: ‘Ideate – Build – Capitalize’.
								<span class="r_red">W</span>e build scalable platforms and assign an able senior team to scale it up, while moving on to a new idea to
								be incubated into the next big thing.</p>
							<div class=sub_content_block>
							
								<p>
									<span class=r_red>infinity</span>
									<span class=b_blue>labs</span> is our crucible of innovation and our idea-proving ground, where our most potent product ideas are brewed.</p>
							</div>
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
		
							<h2>About
								<span class=logo_text>
									<span>java</span>
									<span>Course</span>
								</span>
							</h2>
							<p>
								<span class=logo_text>
								
								</span>SKILL MONKS is an integrated incubator for globally scalable SaaS platforms/startups.</p>
							<p>
								<span class="r_red">W</span>e discover, ideate, engineer and incubate scalable SaaS platforms in-house.
								<span class="r_red">W</span>e own 100% equity in our in-house incubated platforms/startups. </p>
							<p>
								<span class="r_red">W</span>e believe that the present model of incubation is not experiential, patches resources, borrows temporary skillsets
								and is observatory in style.
								<span class="r_red">S</span>o - we chose to engineer an integrated and experiential process of incubation. </p>
							<p>
								<span class="r_red">W</span>e have a unique ‘IBC’ recurring value business model: ‘Ideate – Build – Capitalize’.
								<span class="r_red">W</span>e build scalable platforms and assign an able senior team to scale it up, while moving on to a new idea to
								be incubated into the next big thing.</p>
							<div class=sub_content_block>
							
								<p>
									<span class=r_red>infinity</span>
									<span class=b_blue>labs</span> is our crucible of innovation and our idea-proving ground, where our most potent product ideas are brewed.</p>
							</div>
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
		
							<h2>About
								<span class=logo_text>
									<span>PHP</span>
									<span>Course</span>
								</span>
							</h2>
							<p>
								<span class=logo_text>
								
								</span>SKILL MONKS is an integrated incubator for globally scalable SaaS platforms/startups.</p>
							<p>
								<span class="r_red">W</span>e discover, ideate, engineer and incubate scalable SaaS platforms in-house.
								<span class="r_red">W</span>e own 100% equity in our in-house incubated platforms/startups. </p>
							<p>
								<span class="r_red">W</span>e believe that the present model of incubation is not experiential, patches resources, borrows temporary skillsets
								and is observatory in style.
								<span class="r_red">S</span>o - we chose to engineer an integrated and experiential process of incubation. </p>
							<p>
								<span class="r_red">W</span>e have a unique ‘IBC’ recurring value business model: ‘Ideate – Build – Capitalize’.
								<span class="r_red">W</span>e build scalable platforms and assign an able senior team to scale it up, while moving on to a new idea to
								be incubated into the next big thing.</p>
							<div class=sub_content_block>
							
								<p>
									<span class=r_red>infinity</span>
									<span class=b_blue>labs</span> is our crucible of innovation and our idea-proving ground, where our most potent product ideas are brewed.</p>
							</div>
						</div>
					</div>
		</div>
	</div>
	<div class=footer>
		<p class=left_align>©
			<span class=r_red>SKILL</span>
			<span class=b_blue>MONKS</span> Consulting Private Limited. 2019
			<a href=# class=privacy_popup>Privacy Policy</a>
			<a href=# class=tc_popup>Terms Of Usage</a>
		</p>
		<p class=right_align>
			
		
			
			<a href="https://www.facebook.com/SKILL-MONKS-1201759963330100/" target=_blank>
				<img src=images/raksan_facebook_page.png alt="">
			</a>
			<a href="https://www.youtube.com/channel/UCY0mc8kDBKzyJ13ESiVcBFw/featured" target=_blank>
				<img src="images/youtube (1).png" alt="">
			</a>
			<a target=_blank href="https://twitter.com/SkillMonks">
				<img src=images/raksan_twitter_profile.png alt="">
			</a>
			<a target=_blank href="https://www.linkedin.com/company/skill-monks">
				<img src=images/raksan_linkedin_profile.png alt="">
			</a>
			
		</p>
	</div>
	<div class=careers_content>
		<div class=popup_mask></div>
		<div class=popup_gen>
			<h2>Send Resume
				<a href=# class=careers_close>
					<img src=images/close.png alt="close button">
				</a>
			</h2>
			<div class=popup_gen_main>
				<p>We would love to hear from you...Drop us a line and we will quickly revert if your profile fits ! </p>
				<form method=post name=uploadResume id=applySendResumeForm enctype=multipart/form-data>
					<input type=text placeholder="full Name" name=fullName id=fullName />
					<br>
					<input type=text placeholder="mobile no" name=mobile id=mobile />
					<br>
					<input type=text placeholder="email id" name=email id=email />
					<br>
					<input type=file name=resumes id=attc-file accept=.pdf,.doc,.docx,.rtf,.txt,.odt,.sxw />
					<br>
					<textarea placeholder=message name=message id=message></textarea>
					<br>

					<div class="form-group col-sm-12">



						<div id="humanCheckCaptchaBox2"></div>
						<div id="firstDigit2"></div> +
						<div id="secondDigit2"></div> =
						<input name="humanCheckCaptchaInput2" id="humanCheckCaptchaInput2" placeholder="" maxlength="3" class="form-control" type="text"
						    data-error="Please solve Human Check Captcha">

					</div>


					<input type=submit data-role=none value="transmit message" /> </form>
				<div class="career_msg_p succ_msg">
					<p>Thanks for contacting us. </p>
					<p>If we find your profile suitable, you should hear from us within 5 – 6 working days. We will also revert in case we
						need more details from you.
						<br> Thank you and Best of Luck.</p>
				</div>
			</div>
		</div>
	</div>
	<div class=feedback_content>
		<div class=popup_mask></div>
		<div class=popup_gen>
			<h2>Feedback
				<a href=# class=feedback_close>
					<img src=images/close.png alt="close button">
				</a>
			</h2>
			<div class=popup_gen_main>
				<p>We would love to hear from you... </p>
				<form name=contact-form2 method=post id=contact-form2 enctype=multipart/form-data>
					<input type=text placeholder="full name" id=fullName name=fullName />
					<br>
					<input type=text placeholder=mobile id=mobile name=mobile />
					<br>
					<input type=text placeholder="email Id" id=email name=email />
					<br>
					<textarea placeholder=message id=message name=message></textarea>
					<br>
					<div class="form-group col-sm-12">



						<div id="humanCheckCaptchaBox1"></div>
						<div id="firstDigit1"></div> +
						<div id="secondDigit1"></div> =
						<input name="humanCheckCaptchaInput1" id="humanCheckCaptchaInput1" placeholder="" maxlength="3" class="form-control" type="text"
						    data-error="Please solve Human Check Captcha">

					</div>

					<input type=submit data-role=none value="transmit message" /> </form>
				<div class="succ_msg feedback_msg_p">
					<p>Thanks for contacting us. We have received your query / feedback and we will revert as soon as possible, if required.</p>
					<p>If this is an urgent requirement, please contact us at: +91 93813 13647 or email us at sales@SKILL MONKS</p>
				</div>
			</div>
		</div>
	</div>
	<div class=privacy_policy_content>
		<div class=popup_mask></div>
		<div class=popup_gen>
			<h2>Privacy Policy:
				<span class=logo_text>
					<span>rak</span>
					<span>san</span>
				</span>
				<a href=# class=privacy_popup_close>
					<img src=images/close.png alt="close button">
				</a>
			</h2>
			<div class=popup_gen_main>
				<p>Welcome to our Privacy Policy.</p>
				<p>Your privacy is critically important to us.</p>
				<p>
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> is located at:
					<br>
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> Consulting Pvt. Ltd.
					<br> #1002, 10th Floor, The Platina, Gachibowli Road, hyderabad, telangana 500032, india,
					<br> Mobile: 91-99664 08213</p>
				<p>It is
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s policy to respect your privacy regarding any information we may collect while operating our website. This Privacy
					Policy applies to
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.in (hereinafter, "us", "we", or "
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.in"). We respect your privacy and are committed to protecting personally identifiable information you may provide us
					through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected
					on our Website, how we use this information, and under what circumstances we may disclose the information to third parties.
					This Privacy Policy applies only to information we collect through the Website and does not apply to our collection
					of information from other sources.
					<br> This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and
					policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required
					to agree to additional terms and conditions.</p>
				<h3>Website Visitors</h3>
				<p>Like most website operators,
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> collects non-personally-identifying information of the sort that web browsers and servers typically make available,
					such as the browser type, language preference, referring site, and the date and time of each visitor request.
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s purpose in collecting non-personally identifying information is to better understand how
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s visitors use its website. From time to time,
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage
					of its website.</p>
				<p>
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users
					and for users leaving comments on http://
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.in blog posts.
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying
					information as described below.</p>
				<h3>Gathering of Personally-Identifying Information</h3>
				<p>Certain visitors to
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s websites choose to interact with
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> in ways that require
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> to gather personally-identifying information. The amount and type of information that
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at http://
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.in to provide a username and email address.</p>
				<h3>Security</h3>
				<p>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet,
					or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your
					Personal Information, we cannot guarantee its absolute security.</p>
				<h3>Advertisements</h3>
				<p>Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow
					the ad server to recognize your computer each time they send you an online advertisement to compile information about
					you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements
					that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> and does not cover the use of cookies by any advertisers.</p>
				<h3>Links To External Sites</h3>
				<p>Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you
					will be directed to that third party's site. We strongly advise you to review the Privacy Policy and terms and conditions
					of every site you visit.
					<br> We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party
					sites, products or services.</p>
				<h3>
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.in uses Google AdWords for remarketing</h3>
				<p>
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.in uses the remarketing services to advertise on third party websites (including Google) to previous visitors to our
					site. It could mean that we advertise to previous visitors who haven’t completed a task on our site, for example using
					the contact form to make an enquiry. This could be in the form of an advertisement on the Google search results page,
					or a site in the Google Display Network. Third-party vendors, including Google, use cookies to serve ads based on someone’s
					past visits. Of course, any data collected will be used in accordance with our own privacy policy and Google’s privacy
					policy.
					<br> You can set preferences for how Google advertises to you using the Google Ad Preferences page, and if you want to you
					can opt out of interest-based advertising entirely by cookie settings or permanently using a browser plugin.</p>
				<h3>Protection of Certain Personally-Identifying Information</h3>
				<p>
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> discloses potentially personally-identifying and personally-identifying information only to those of its employees,
					contractors and affiliated organizations that (i) need to know that information in order to process it on
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s behalf or to provide services available at
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s website, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated
					organizations may be located outside of your home country; by using
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s website, you consent to the transfer of such information to them.
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than
					to its employees, contractors and affiliated organizations, as described above,
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> discloses potentially personally-identifying and personally-identifying information only in response to a subpoena,
					court order or other governmental request, or when
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> believes in good faith that disclosure is reasonably necessary to protect the property or rights of
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>, third parties or the public at large.</p>
				<p>If you are a registered user of http://
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.in and have supplied your email address,
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date
					with what’s going on with
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> and our products. We primarily use our blog to communicate this type of information, so we expect to keep this type
					of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms),
					we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other
					users.
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of
					potentially personally-identifying and personally-identifying information.</p>
				<h3>Aggregated Statistics</h3>
				<p>
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> may collect statistics about the behavior of visitors to its website.
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> may display this information publicly or provide it to others. However,
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> does not disclose your personally-identifying information.</p>
				<h3>Affiliate Disclosure</h3>
				<p>This site uses affiliate links and does earn a commission from certain links. This does not affect your purchases or
					the price you may pay.</p>
				<h3>Cookies</h3>
				<p>To enrich and perfect your online experience,
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> uses "Cookies", similar technologies and services provided by others to display personalized content, appropriate advertising
					and store your preferences on your computer.</p>
				<p>A cookie is a string of information that a website stores on a visitor’s computer, and that the visitor’s browser provides
					to the website each time the visitor returns.
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> uses cookies to help
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> identify and track visitors, their usage of http://
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.in, and their website access preferences.
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before
					using
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s websites, with the drawback that certain features of
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s websites may not function properly without the aid of cookies.</p>
				<p>By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>'s use of cookies.</p>
				<h3>E-commerce</h3>
				<p>Those who engage in transactions with
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> – by purchasing
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>'s services or products, are asked to provide additional information, including as necessary the personal and financial
					information required to process those transactions. In each case,
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> collects such information only insofar as is necessary or appropriate to fulfill the purpose of the visitor’s interaction
					with
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> does not disclose personally-identifying information other than as described below. And visitors can always refuse to
					supply personally-identifying information, with the caveat that it may prevent them from engaging in certain website-related
					activities.
				</p>
				<h3>Business Transfers</h3>
				<p>If
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>, or substantially all of its assets, were acquired, or in the unlikely event that
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> goes out of business or enters bankruptcy, user information would be one of the assets that is transferred or acquired
					by a third party. You acknowledge that such transfers may occur, and that any acquirer of
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> may continue to use your personal information as set forth in this policy.</p>
				<h3>Privacy Policy Changes</h3>
				<p>Although most changes are likely to be minor,
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> may change its Privacy Policy from time to time, and in
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s sole discretion.
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this
					site after any change in this Privacy Policy will constitute your acceptance of such change.</p>
			</div>
		</div>
	</div>
	<div class=tc_content>
		<div class=popup_mask></div>
		<div class=popup_gen>
			<h2>Welcome to
				<span class=logo_text>
					<span>rak</span>
					<span>san</span>
				</span>!
				<a href=# class=tc_close>
					<img src=images/close.png alt="close button">
				</a>
			</h2>
			<div class=popup_gen_main>
				<p>These terms and conditions outline the rules and regulations for the use of
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>'s Website. </p>
				<p>
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s india Office is located at:
					<br> #1002, 10th Floor, The Platina, Gachibowli Road, Hyderabad, Telangana 500032, india</p>
				<p>Its
					<span style=text-transform:uppercase>US</span> Office is located at:
					<br>
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> Consulting Inc., 5 Walden Trail Streamwood,
					<span style=text-transform:uppercase>IL</span> 60107,
					<span style=text-transform:uppercase>USA</span>
				</p>
				<p>By accessing this website we assume you accept these terms and conditions in full. Do not continue to use
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>'s website if you do not accept all of the terms and conditions stated on this page.</p>
				<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all
					Agreements: "Client", “You” and “Your” refers to you, the person accessing this website and accepting the Company’s
					terms and conditions. "The Company", “Ourselves”, “We”, “Our” and "Us", refers to our Company. “Party”, “Parties”, or
					“Us”, refers to both the Client and ourselves, or either the Client or ourselves. All terms refer to the offer, acceptance
					and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate
					manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the Client’s
					needs in respect of provision of the Company’s stated services/products, in accordance with and subject to, prevailing
					law of india. Any use of the above terminology or other words in the singular, plural, capitalisation and/or he/she
					or they, are taken as interchangeable and therefore as referring to same.</p>
				<h3>Cookies</h3>
				<p>We employ the use of cookies. By using
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>'s website you consent to the use of cookies in accordance with
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s privacy policy.</p>
				<p>Most of the modern day interactive websites use cookies to enable us to retrieve user details for each visit. Cookies
					are used in some areas of our site to enable the functionality of this area and ease of use for those people visiting.
					Some of our affiliate / advertising partners may also use cookies.</p>
				<h3>License</h3>
				<p>Unless otherwise stated,
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> and/or it’s licensors own the intellectual property rights for all material on
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span> All intellectual property rights are reserved. You may view and/or print pages from http://
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>.in for your own personal use subject to restrictions set in these terms and conditions.</p>
				<ul>
					<li>You must not:</li>
					<li>Republish material from http://
						<span class=logo_text>
							<span>rak</span>
							<span>san</span>
						</span>.in</li>
					<li>Sell, rent or sub-license material from http://
						<span class=logo_text>
							<span>rak</span>
							<span>san</span>
						</span>.in</li>
					<li>Reproduce, duplicate or copy material from http://
						<span class=logo_text>
							<span>rak</span>
							<span>san</span>
						</span>.in</li>
					<li>Redistribute content from
						<span class=logo_text>
							<span>rak</span>
							<span>san</span>
						</span> (unless content is specifically made for redistribution).</li>
				</ul>
				<h3>User Comments</h3>
				<ul>
					<li>This Agreement shall begin on the date hereof.</li>
					<li>Certain parts of this website offer the opportunity for users to post and exchange opinions, information, material and
						data ('Comments') in areas of the website.
						<span class=logo_text>
							<span>rak</span>
							<span>san</span>
						</span> does not screen, edit, publish or review Comments prior to their appearance on the website and Comments do not reflect
						the views or opinions of
						<span class=logo_text>
							<span>rak</span>
							<span>san</span>
						</span>, its agents or affiliates. Comments reflect the view and opinion of the person who posts such view or opinion. To
						the extent permitted by applicable laws
						<span class=logo_text>
							<span>rak</span>
							<span>san</span>
						</span> shall not be responsible or liable for the Comments or for any loss cost, liability, damages or expenses caused and
						or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</li>
					<li>
						<span class=logo_text>
							<span>rak</span>
							<span>san</span>
						</span> reserves the right to monitor all Comments and to remove any Comments which it considers in its absolute discretion
						to be inappropriate, offensive or otherwise in breach of these Terms and Conditions.</li>
					<li>You warrant and represent that:
						<ul>
							<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
							<li>The Comments do not infringe any intellectual property right, including without limitation copyright, patent or trademark,
								or other proprietary right of any third party;</li>
							<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material or material
								which is an invasion of privacy</li>
							<li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful
								activity.
							</li>
							<li>You hereby grant to
								<span class=logo_text>
									<span>rak</span>
									<span>san</span>
								</span> a non-exclusive royalty-free license to use, reproduce, edit and authorize others to use, reproduce and edit any
								of your Comments in any and all forms, formats or media.</li>
						</ul>
					</li>
				</ul>
				<h3>Hyperlinking to our Content:</h3>
				<ul>
					<li>The following organizations may link to our website without prior written approval:
						<ul>
							<li>Government agencies;</li>
							<li>Search engines;</li>
							<li>News organizations;</li>
							<li>Online directory distributors when they list us in the directory may link to our website in the same manner as they
								hyperlink to the websites of other listed businesses; and</li>
							<li>Systemwide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising
								groups which may not hyperlink to our website.</li>
						</ul>
					</li>
					<li>These organizations may link to our home page, to publications or to other website information so long as the link:
						(a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or approval of the linking party
						and its products or services; and (c) fits within the context of the linking party's site.</li>
					<li>We may consider and approve in our sole discretion other link requests from the following types of organizations:
						<ul>
							<li>commonly-known consumer and/or business information sources such as Chambers of Commerce, American Automobile Association,
								AARP and Consumers Union;</li>
							<li>dot.com community sites;</li>
							<li>associations or other groups representing charities, including charity giving sites,</li>
							<li>online directory distributors;</li>
							<li>internet portals;</li>
							<li>accounting, law and consulting firms whose primary clients are businesses; and</li>
							<li>educational institutions and trade associations.</li>
						</ul>
					</li>
				</ul>
				<p>We will approve link requests from these organizations if we determine that: (a) the link would not reflect unfavorably
					on us or our accredited businesses (for example, trade associations or other organizations representing inherently suspect
					types of business, such as work-at-home opportunities, shall not be allowed to link); (b)the organization does not have
					an unsatisfactory record with us; (c) the benefit to us from the visibility associated with the hyperlink outweighs
					the absence of
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>; and (d) where the link is in the context of general resource information or is otherwise consistent with editorial
					content in a newsletter or similar product furthering the mission of the organization.</p>
				<p>These organizations may link to our home page, to publications or to other website information so long as the link: (a)
					is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and
					it products or services; and (c) fits within the context of the linking party's site.</p>
				<p>If you are among the organizations listed in paragraph 2 above and are interested in linking to our website, you must
					notify us by sending an e-mail to contact@skillmonks.com. Please include your name, your organization name, contact
					information (such as a phone number and/or e-mail address) as well as the URL of your site, a list of any URLs from
					which you intend to link to our website, and a list of the URL(s) on our site to which you would like to link. Allow
					2-3 weeks for a response.</p>
				<p>Approved organizations may hyperlink to our website as follows:</p>
				<ul>
					<li>By use of our corporate name; or</li>
					<li>By use of the uniform resource locator (Web address) being linked to; or</li>
					<li>By use of any other description of our website or material being linked to that makes sense within the context and format
						of content on the linking party's site.</li>
				</ul>
				<p>No use of
					<span class=logo_text>
						<span>rak</span>
						<span>san</span>
					</span>’s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
				<h3>Iframes</h3>
				<p>Without prior approval and express written permission, you may not create frames around our Web pages or use other techniques
					that alter in any way the visual presentation or appearance of our website.</p>
				<h3>Content Liability</h3>
				<p>We shall have no responsibility or liability for any content appearing on your Website. You agree to indemnify and defend
					us against all claims arising out of or based upon your Website. No link(s) may appear on any page on your website or
					within any context containing content or materials that may be interpreted as libelous, obscene or criminal, or which
					infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
				<h3>Reservation of Rights</h3>
				<p>We reserve the right at any time and in its sole discretion to request that you remove all links or any particular link
					to our website. You agree to immediately remove all links to our Website upon such request. We also reserve the right
					to amend these terms and conditions and its linking policy at any time. By continuing to link to our website, you agree
					to be bound to and abide by these linking terms and conditions.</p>
				<h3>Removal of links from our website</h3>
				<p>If you find any link on our website or any linked website objectionable for any reason, you may contact us about this.
					We will consider requests to remove links but will have no obligation to do so or to respond directly to you.</p>
				<p>Whilst we endeavor to ensure that the information on this website is correct, we do not warrant its completeness or accuracy;
					nor do we commit to ensuring that the website remains available or that the material on the website is kept up to date.</p>
				<h3>Disclaimer</h3>
				<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating
					to our website and the use of this website (including, without limitation, any warranties implied by law in respect
					of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer
					will:
				</p>
				<ul>
					<li>limit or exclude our or your liability for death or personal injury resulting from negligence;</li>
					<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
					<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
					<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
				</ul>
				<p>The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a) are subject
					to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or in relation to the subject
					matter of this disclaimer, including liabilities arising in contract, in tort (including negligence) and for breach
					of statutory duty.</p>
				<p>To the extent that the website and the information and services on the website are provided free of charge, we will not
					be liable for any loss or damage of any nature.</p>
			</div>
		</div>
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
		$('.one').val('JAVA');
	});
	$('#one1').click(function(){
		$('.one').val('JAVA');
	});
	</script>

	<script>
	$('#two').click(function(){
		$('.two').val('DOTNET');
	});
	$('#two1').click(function(){
		$('.two').val('DOTNET');
	});
	</script>

		<script>
	$('#three').click(function(){
		$('.three').val('PYTHON');
	});
	$('#three1').click(function(){
		$('.three').val('PYTHON');
	});
	</script>

		<script>
	$('#four').click(function(){
		$('.four').val('ANGULAR');
	});
	$('#four1').click(function(){
		$('.four').val('ANGULAR');
	});

	</script>

		<script>
	$('#five').click(function(){
		$('.five').val('UI technology');
	});
	$('#five1').click(function(){
		$('.five').val('UI technology');
	});
	</script>

		<script>
	$('#six').click(function(){
		$('.six').val('MACHINE LEARNING');
	});
	$('#six1').click(function(){
		$('.six').val('MACHINE LEARNING');
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
		$('.eight').val('PHP');
	});
	$('#eight1').click(function(){
		$('.eight').val('PHP');
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
