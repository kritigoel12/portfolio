<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="utf-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>My Resume</title>

 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

 <link rel="stylesheet" href="css/font-awesome.min.css">

 <link rel="stylesheet" type="text/css" href="css/style.css">

 <link rel="stylesheet" type="text/css" href="css/media.css">

</head>

<?php include'connection.php';?> 
<?php 
	if(isset($_POST['formsubmit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$message=$_POST['message'];
		$dbquery=mysql_query("INSERT INTO user_details(name, email, mobile, message) VALUES ('$name','$email','$mobile','$message')");
	}
 ?>


<?php 
	if(isset($_POST['formsubmit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$message=$_POST['message'];
		$dbquery=mysql_query("INSERT INTO user_details(name, email, mobile, message) VALUES ('$name','$email','$mobile','$message')");
		// die();

		$recipient="krti0392@gmail.in";
	    $subject="Landing Page contact us info";
	    $sender="info@theme.in";
	    $senderEmail= $_POST["email"];

	    $message= "<b>SENDER NAME = $name</b><br>";
	    $message .="<b>SENDER EMAIL = $senderEmail</b><br>";
	    $message .="<b>SENDER CONTACT = $mobile</b><br>";


	    // $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
	    // mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");



	    $header = "From:info@theme.in \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail ($recipient,$subject,$message,$header);



        $to = $email;
        $subject = "Thank you for contact us .";       
        $message = "<b>Dear $name,</b>";
        $message .= "<p>Thank you for contacting us.We Will get you back to you soon.</p>";
        
        $header = "From:info@theme.in \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail ($to,$subject,$message,$header);

      // echo '<script type="text/javascript">alert("Thankyou for contacting us.")</script>';
	}
 ?>


<body>
	<div class="container-fluid fullsection">


		<!-- HEADER SECTION STARTS-->
		<header>


			<!-- NAVIGATION  STARTS-->
				<nav class="navbar navbar-default hidden-xs">
				  <div class="container-fluid">
				    <!-- Brand -->
				    <div class="navbar-header">
				      <a class="navbar-brand" href="#">KRITI
				      </a>
				      	<img src="img/kriti.png" width="150px">			  
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->				   
				      <ul class="nav navbar-nav navbar-left">
				        <li><a href="#about" class="scroll">About me</a></li>
				        <li><a href="#myskills" class="scroll">My Skills</a></li>
				        <li><a href="#experience" class="scroll">Experience</a></li>
				        <li><a href="#education" class="scroll">Education</a></li>
				        <li><a href="#portfolio" class="contact scroll">Portfolio</a></li>
				      </ul>	

				      </div><!-- /.container-fluid -->
				</nav>
				<!-- NAVIGATION  ENDS-->



				<!--MOBILE NAVIGATION  STARTS-->
				<nav class="navbar navbar-default navbar-fixed-top visible-xs">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Theme</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				   
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#services" class="scroll"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Our Story</a></li>
				        <li><a href="#numbersection" class="scroll"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">features</a></li>
				        <li><a href="#aboutservicessection" class="scroll"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">pricing</a></li>
				        <li><a href="#clientssection" class="scroll"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">clients</a></li>
				        <li><a href="#contactussection" class="contact scroll"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">contact</a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				<!-- NAVIGATION  ENDS-->



				<!-- BANNER STARTS -->
				<!-- <div class="row" id="banner">
					<div class="tagline">
						We're small but <br><span class="bold">Dreams are big</span>
					</div> -->


						<!-- MAILCHIMP -->
						<!-- 
						<div id="mc_embed_signup">
						<form action="//facebook.us14.list-manage.com/subscribe/post?u=b0b9913ad48f7b10a623dfb30&amp;id=abd27b7906" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email" required>
						    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class=""></div>
						</form>
						</div> -->

						<!-- MAILCHIMP -->

<!-- 
					<img src="img/piano.png" class="piano-img">
					<img src="img/stepler.png" class="stepler-img">
					<img src="img/glass.png" class="glass-img">
					<img src="img/cup.png" class="cup-img">
				</div> -->
				<!-- BANNER ENDS -->

		</header>
		<!-- HEADER SECTION ENDS-->
		<div class="row" id="empty">
		</div>

		<!-- SERVICES SECTION STARTS-->
		<section class="row gap commonsection" id="about">
			<div class="col-sm-9 col-sm-offset-1">
				<!-- Heading -->
				<div class="section-heading">ABOUT</div>
				<!-- Heading -->
				<div class="heading2">PROFESSIONAL PROFILE</div>
				<p class="section-para">I am a UI developer in Editsoft Solutions Pvt. Ltd. I have 3.7 years of experience. I joined as a trainee over here then got the job offer from here itself. I love to learn new things. This is a startup company, we got the music with the work and I like that, somewhere it makes you more enthusiastic towards your work.</p>

				<table>
					<tr>
						<th>Name</th>
						<td>Kriti Goel</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>kritigoel78@gmail.com</td>
					</tr>
					<tr>
						<th>Phone</th>
						<td>+91- 8802727166</td>
					</tr>
					<!-- <tr>
						<th>Date of birth</th>
						<td>04 Mar, 1992</td>
					</tr>
					<tr>
						<th>Address</th>
						<td>302, Neelkanth Residency, Model Town, Ghaziabad</td>
					</tr>
					<tr> -->
						<th>Citizenship</th>
						<td>Indian</td>
					</tr>

				</table>

			</div>
		</section>
		<!-- SERVICES SECTION ENDS-->
		<!-- SERVICES SECTION STARTS-->
		<section class="row gap commonsection" id="myskills">
			<div class="col-sm-10 col-sm-offset-1">
				<!-- Heading -->
				<div class="section-heading">MY SKILLS</div>
				<!-- Heading -->
				<p class="section-para">I know about the frontend technologies not all, but yes the one I needed and would love too learn more in that.</p>
				<div class="row pd-t-50 inline-text">
					
						<div class="heading1">HTML</div>
					
					
						<!-- <div class="progress">
						  <div class="progress-bar bggreen progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
						    <span class="sr-only">70% Complete (success)</span>
						  </div>
						</div> -->
						<p class="section-para">
							My core responsibility is to create websites, so yes my proficiency with HTML is high. 
						</p>
					
				</div>
				<div class="row pd-t-50 inline-text">
					<!-- <div class=""> -->
						<!-- <div class="progress">
						  <div class="progress-bar bggreen progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
						    <span class="sr-only">70% Complete (success)</span>
						  </div>
						</div> -->
						<p class="section-para">
							CSS- As this is the queen for design, I love CSS specially, did try with CSS3 , keyframes, animations , z-index and all other style properties.
						</p>
					<!-- </div> -->
					<!-- <div class=""> -->
						<div class="heading1">CSS3</div>
					<!-- </div> -->
				</div>
				<div class="row pd-t-50 inline-text">
					<div class="">
						<div class="heading1">JQuery</div>
					</div>
					<div class="">
						<!-- <div class="progress">
						  <div class="progress-bar bggreen progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						    <span class="sr-only">60% Complete (success)</span>
						  </div>
						</div> -->
						<p class="section-para">
							Jquery is a pretty big, I made a lot use of jquery in my projects to create clicks ,popups and a lot.
						</p>
					</div>
				</div>
				<div class="row pd-t-50 inline-text">
					<div class="">
						<!-- <div class="progress">
						  <div class="progress-bar bggreen progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						    <span class="sr-only"> 80% Complete (success)</span>
						  </div>
						</div> -->
						<p class="section-para">
							My every website is responsive and based on bootstrap framework. So, basically know most about this framework..:)
						</p>
					</div>
					<div class="">
						<div class="heading1">Bootstrap Framework</div>
					</div>
				</div>
				<!-- <div class="row pd-t-50">
					<div class="col-sm-3">
						<div class="heading1">PHP</div>
					</div>
					<div class="col-sm-9">
						<div class="progress">
						  <div class="progress-bar bggreen progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div>
						<p class="section-para">
							I made use of php too, but little, But yes on my own, I learned this scripting language too, so know about backend forms like that.
						</p>
					</div>
				</div> -->
				<div class="row pd-t-50 inline-text">
					<div class="col-sm-3">
						<div class="heading1">Angular</div>
					</div>
					<div class="">
						<!-- <div class="progress">
						  <div class="progress-bar bggreen progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div> -->
						<p class="section-para">
							I have recently working on angular projects. So have basic knowledge about it.
							Its a JS framework. Basically its a combination of Html , CSS or SASS and typescript.
						</p>
					</div>
				</div>
				<div class="row pd-t-50 inline-text">
					<div class="">
						<!-- <div class="progress">
						  <div class="progress-bar bggreen progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						    <span class="sr-only">40% Complete (success)</span>
						  </div>
						</div> -->
						<p class="section-para">
							<!-- Somehow, now I felt that I like deisigning too, I know the basic functionality of both the photoshop and illustrator too, Love too learns in this, I have tried some insane things on illustrators, tried some logos from the youtube, and i felt that ,I really liked that, will attach my trial work in my portfolio.  -->

							I have little bit knowlegde about photoshop and illustrator too.
							Have done small work with both like taking assests from psd's and creating some logos and designs in illustrator just to learn.
						</p>
					</div>
					<div class="">
						<div class="heading1">Adobe Photoshop & Adobe Illustrator</div>
					</div>
				</div>
			</div>
		</section>
		<!-- SERVICES SECTION ENDS-->

		<!-- SERVICES SECTION STARTS-->
		<section class="row gap commonsection" id="experience">
			<div class="col-sm-10 col-sm-offset-1">
				<!-- Heading -->
				<div class="section-heading">EXPERIENCE</div>

				<!-- Heading -->
				<p class="section-para"></p>
				<hr>
				<div class="row ">
					<div class="col-sm-5">
						<i class="fa fa-bookmark fa-3x green fa-fw"></i>
						<span class="heading1">UI Developer</span>
					</div>
					<div class="col-sm-7">
						<p class="section-para">I am working as in editsoft as a UI developer. I am having 3.7 years of experience in Web developing.
							My work streams are.<br>
							-Websites development.<br>
							-Responsive Layouts.<br>
							-PSD to HTML.<br>
							-Using Bootstrap Framework.<br>
							-Working with  Angular 4 recently in projects too <br>
							<!-- -Backend Portions.(Forms implementation)<br> -->
							-Small task with Photoshop and Illustrator.(related to the web).
						</p>
					</div>
				</div>
				<hr>
				<div class="row ">
					<div class="col-sm-5">
						<i class="fa fa-bookmark fa-3x green fa-fw"></i>
						<span class="heading1">Trainee</span>
					</div>
					<div class="col-sm-7">
						<p class="section-para">I worked as a trainee for 3 months, It was a good experience. I got to learns a lot new things. I did my training in the Frontend itself.
						</p>
					</div>
				</div>
				<hr>
			</div>
		</section>
		<!-- SERVICES SECTION ENDS-->

		<!-- SERVICES SECTION STARTS-->
		<section class="row gap commonsection" id="education">
			<div class="col-sm-10 col-sm-offset-1">
				<!-- Heading -->
				<div class="section-heading">EDUCATION</div>

				<!-- Heading -->
				<p class="section-para"></p>
				<hr>
				<div class="row ">
					<div class="col-sm-5">
						<div class="heading1">B.Tech</div>
						<div class="heading3">2010-2014</div>
						<div class="heading4">ABESIT</div>
					</div>
					<div class="col-sm-7">
						<p class="section-para">I have completed my Btech in 2014 in Computer Science Stream from ABESIT college, Ghaziabad. I have scored 69.8% in Btech.
						</p>
					</div>
				</div>
				<hr>
				<div class="row ">
					<div class="col-sm-5">
						<div class="heading1">12th Standard</div>
						<div class="heading3">2008-2009</div>
						<div class="heading4">CCDPS</div>
					</div>
					<div class="col-sm-7">
						<p class="section-para">I have scored 78% in my 12th Standard.
						</p>
					</div>
				</div>
				<hr>
				<div class="row ">
					<div class="col-sm-5">
						<div class="heading1">10th Standard</div>
						<div class="heading3">2006-2007</div>
						<div class="heading4">GPS</div>
					</div>
					<div class="col-sm-7">
						<p class="section-para">I got 86.4% in my 10th standard. I was the school topper in 10th.
						</p>
					</div>
				</div>
				<hr>
			</div>
		</section>
		<!-- SERVICES SECTION ENDS-->

		<!-- SERVICES SECTION STARTS-->
		<section class="row gap commonsection" id="portfolio">
			<div class="col-sm-10 col-sm-offset-1">
				<!-- Heading -->
				<div class="section-heading">PORTFOLIO</div>

				<!-- Heading -->
				<p class="section-para">I am providing the list of most of the project that I have done.</p>
                <div class="row ">
                    <div class="col-sm-5">
                        <div class="heading1">Coal India</div>
                        <div class="heading4">
                        	<!-- <a href=" http://139.59.23.221/coal-front-espl/dist/">Coal India</a> -->
                        	<a href=" http://coal.annova.tech">Coal India</a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <p class="section-para">
                            Coal India is a coal sample tracking application. Basically we have have diffent users like 
                        </p>
                    </div>
                </div>
                <hr>

                <!-- <div class="row ">
                    <div class="col-sm-5">
                        <div class="heading1">Kasovious Landing</div>
                        <div class="heading4"><a href="http://unilever-ecommerce.com/">Kasovious Landing</a></div>
                    </div>
                    <div class="col-sm-7">
                        <p class="section-para">
                            Unilever is a big brand as in the product like soaps, shampoo, cleanser and a lot more that we know ,It contains, lux, dove, lipton and much more brands in it. I have worked on this project, we have created the singapore based site of the unilever, the frontend development, is done by me.
                        </p>
                    </div>
                </div>
                <hr> -->
                <!-- <div class="row ">
                    <div class="col-sm-5">
                        <div class="heading1">Tata Trust</div>
                        <div class="heading4"><a href="http://unilever-ecommerce.com/">Unilever</a></div>
                    </div>
                    <div class="col-sm-7">
                        <p class="section-para">
                            Unilever is a big brand as in the product like soaps, shampoo, cleanser and a lot more that we know ,It contains, lux, dove, lipton and much more brands in it. I have worked on this project, we have created the singapore based site of the unilever, the frontend development, is done by me.
                        </p>
                    </div>
                </div>
                <hr> -->

                <div class="row ">
                    <div class="col-sm-5">
                        <div class="heading1">Assessor</div>
                        <div class="heading4"><a href="http://assessor.qcitech.org/">Assessor</a></div>
                        <!-- <div class="heading4"><a href="http://139.59.37.93/">Assessor</a></div> -->
                    </div>
                    <div class="col-sm-7">
                        <p class="section-para">
                            Assessors play a critical role in the entire process of skills assessments and the quality of assessments is linked to efficiency of the Assessor. Assessor application provides platform to ensure right set of assessors are selected for a particular project to conduct assessment.
                        </p>
                    </div>
                </div>
                <hr>

                <div class="row ">
                    <div class="col-sm-5">
                        <div class="heading1">SnappBox</div>
                        <div class="heading4"><a href="https://snapp-box.com/">SnappBox</a></div>
                    </div>
                    <div class="col-sm-7">
                        <p class="section-para">
                           SnappBox is a delivery system company in Dubai. They do the deliveries in a easy timely manner , in all kind of businesses.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row ">
                    <div class="col-sm-5">
                        <div class="heading1">LMS</div>
                        <div class="heading4"><a href="http://learnmaxpro.com/">Unilever</a></div>
                    </div>
                    <div class="col-sm-7">
                        <p class="section-para">
                      		LMS is a Learning Management System ,what they does is they will be providing modules for the students to learn and on completion they will be conducting quizes.Its contains whole bunch of courses for that. Its a project fron Singapore.

                        </p>
                    </div>
                </div>
				<hr>
                <!-- <div class="row ">
                    <div class="col-sm-5">
                        <div class="heading1">STMS</div>
                        <div class="heading4"><a href="http://modernstageservice.in/">Stms</a></div>
                    </div>
                    <div class="col-sm-7">
                        <p class="section-para">
                            School Trip Management System is a trip management system by a 
                        </p>
                    </div>
                </div>
				<hr> -->
                <div class="row ">
                    <div class="col-sm-5">
                        <div class="heading1">MODERN STAGE SERVICES</div>
                        <div class="heading4"><a href="http://modernstageservice.in/">Modern Stage Service</a></div>
                    </div>
                    <div class="col-sm-7">
                        <p class="section-para">
                           Modern Stage Service has been the pioneer in the field of lighting and designing stagecraft equipment. 
                        </p>
                    </div>
                </div>
				<hr>
				<div class="row ">
					<div class="col-sm-5">
						<div class="heading1">UNILEVER</div>
						<!-- <div class="heading4"><a href="http://unilever-ecommerce.com/">Unilever</a></div> -->
					</div>
					<div class="col-sm-7">
						<p class="section-para">
							Unilever is a big brand as in the product like soaps, shampoo, cleanser and a lot more that we know ,It contains, lux, dove, lipton and much more brands in it. I have worked on this project, we have created the singapore based site of the unilever, the frontend development, is done by me.
						</p>
					</div>
				</div>
				<hr>
				<div class="row ">
					<div class="col-sm-5">
						<div class="heading1">Go Mechanic</div>
						<div class="heading4"><a href="http://gomechanic.in/">Go Mechanic</a></div>
					</div>
					<div class="col-sm-7">
						<p class="section-para">
							It's a car service based client's website. Basically they want to provide the online booking for the car services acording to the car model. You can book and can pay later. I have created the frontend of this website.
						</p>
					</div>
				</div>
				<hr>
				<div class="row ">
					<div class="col-sm-5">
						<div class="heading1">SUDEVA</div>
						<div class="heading4"><a href="http://www.sudeva.in/">Sudeva</a></div>
					</div>
					<div class="col-sm-7">
						<p class="section-para">
							It's a sports academy. Basically for the children under 10 to 19 for the Tennis, Badminton and Football.
						</p>
					</div>
				</div>
				<hr>

				<div class="row ">
					<div class="col-sm-5">
						<div class="heading1">Biswamil</div>
						<div class="heading4"><a href="http://www.biswamil.com/">Biswamil</a></div>
					</div>
					<div class="col-sm-7">
						<p class="section-para">
							This was an event website under the jnu.
						</p>
					</div>
				</div>
				<hr>

				<div class="row ">
					<div class="col-sm-5">
						<div class="heading1">Sunstone</div>
						<!-- <div class="heading4"><a href="http://sunstone.in/management-program">Sunstone Management </a></div> -->
						<div class="heading4"><a href="http://sunstonecampus.com">Sunstone Business School </a></div>
					</div>
					<div class="col-sm-7">
						<p class="section-para">
							Its a management college that is based on the industrial based environment. Basically a business school for the MBA, PGDM, BBA etc.
						</p>
					</div>
				</div>
				<hr>

	<!-- 			<div class="row ">
					<div class="col-sm-5">
						<div class="heading1">EditSoft Landing Page</div>
						<div class="heading4"><a href="http://editsoft.in/landingpages/">EditSoft Landing Page</a></div>
					</div>
					<div class="col-sm-7">
						<p class="section-para">
							Its the landing page of my company website.
						</p>
					</div>
				</div>
 -->				<hr>

				<!-- <div class="row ">
					<div class="col-sm-5">
						<div class="heading1">Eduwhiz</div>
						<div class="heading4"><a href="http://eduwhiz.in/">Eduwhiz</a></div>
					</div>
					<div class="col-sm-7">
						<p class="section-para">
							Its a product of our company,in which they are providing the training for the courses like Android, Marketing, Oveseas Education etc.
						</p>
					</div>
				</div> -->
				<!-- <hr> -->

			</div>

		</section>
		<!-- SERVICES SECTION ENDS-->

	</div
>


<!-- REGISTER -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/external.js"></script>

<script type="text/javascript">

</script>
</body>
</html>