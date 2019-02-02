<?php

$error = '';
$name = '';
$email = '';
$tname = '';
$institute = '';
$phone = '';
$members = '';
$eventname = '';
$accomodation = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
    $name = clean_text($_POST["name"]);
    $email = clean_text($_POST["email"]);
    $tname = clean_text($_POST["tname"]);
    $institute = clean_text($_POST["institute"]);
    $phone = clean_text($_POST["phone"]);
    $members = $_POST["members"];
    $eventname = $_POST["eventname"];
    $accomodation = $_POST["accomodation"];


	if($error == '')
	{

		$file_open = fopen("cultural.csv", "a");
		$no_rows = count(file("cultural.csv"));
		 if($no_rows > 1)
		{
			$no_rows = ($no_rows - 1) + 1;
		}

		$form_data = array(
			'rows'      =>  $no_rows,
			'name'		=>	$name,
			'email'		=>	$email,
			'phone'		=>	$phone,
			'institute'	=>	$institute,
			'teamname' 	=>	$tname,
			'members'	=>	$members,
			'eventname'	=>	$eventname,
			'accomodation'=>$accomodation
		);
		fputcsv($file_open, $form_data);
		$error = '<label class="text-success">Thank you for contacting us</label>';
		$name = '';
		$email = '';
		$phone = '';
		$members = '';
		$eventname = '';
		$institute = '';
		$tname = '';
		$accomodation = '';
		echo "<script type='text/javascript'>alert('We will contact you soon');</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Apratim 2k18 | Registration - Cultural Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="apple-touch-icon" href="images/ap.png" />
		<link rel="icon" href="images/ap.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Ubuntu:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <script type="text/javascript">
        function isChecked(checkbox, submit)
	 {

	   var button = document.getElementById(submit);


           if (checkbox.checked === true)
	   {

		button.disabled = "";

	   }
	   else
	   {
   button.disabled = "disabled";

	}
    };
      </script>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="images/aplogo.svg" height="50px">Apratim 2k18</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#sponsers" class="nav-link">Our Sponsors</a></li>
            <li class="nav-item active"><a href="#events" class="nav-link">Our Events</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">Meet Our CORE</a></li>
            <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#footer" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- END nav -->


<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/cultural1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
							<img src="images/aplogo.svg" height="400px">
              <h1 class="mb-3">Cultural Events</h1>
           </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/cultural2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">Till The Music Is Gone, Let's Party On</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
			<div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
						<h3>Team Events - 100 per person</h3>
						<h3>Solo Events - 50 per person</h3>
						<p>Registration Fee to be payed on the spot at entry into fest, Teams/Participants with prior registration will be given preference.</p>
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Register for an Event !</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 ftco-animate img" style="background-image: url(images/code4.jpg);"></div>
          <div class="col-md-8 ftco-animate makereservation p-5 bg-light">
            <form method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" required placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Team Name</label>
                    <input type="text" name="tname" class="form-control" required placeholder="Team Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Institute</label>
                    <input type="text" name="institute" class="form-control" required placeholder="College/Institute Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="tel" name="phone" class="form-control" required placeholder="Phone" pattern="[0-9]{10}" size="10">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Members</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="members" id="" class="form-control" required>
                        <option value="">Number of Team Members</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4+">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Accomodation</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="accomodation" id="" class="form-control" required>
                        <option value="">Yes/No</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Event Name</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="eventname" required id="" class="form-control" >
                        <option value="">Event Name</option>
                        <option value="AD MAD">AD MAD</option>
                        <option value="Street Play">Street Play</option>
                        <option value="Short Movie">Short Movie</option>
                        <option value="Antakshri">Antakshri</option>
                        <option value="Solo Instrumental">Solo Instrumental</option>
                        <option value="Fusion Band">Fusion Band</option>
                        <option value="Skit">Skit</option>
                        <option value="Mono Act">Mono Act</option>
                        <option value="Mime">Mime</option>
                        <option value="Solo Dance">Solo Dance</option>
                        <option value="Solo Singing">Solo Singing</option>
                        <option value="Duet Dance">Duet Dance</option>
                        <option value="Fahion Show">Fashion Show</option>
                        <option value="Tatoo Making">Tatoo Making</option>
                        <option value="Rangoli Making">Rangoli Making</option>
                        <option value="Group Dance">Group Dance</option>
                        <option value="Street Dance">Street Dance</option>
                        <option value="Folk Dance">Folk Dance</option>
                        <option value="Face Painting">Face Painting</option>
                        <option value="Online Competition">Online Competion</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="toggle" id="toggle" onchange="isChecked(this, 'submit')"> I am solely responsible of all my details filled and my action during the fest.
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary py-3 px-5" disabled="disabled" >
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/instaim1.jpg" class="insta-img image-popup" style="background-image: url(images/instaim1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/instaim2.jpg" class="insta-img image-popup" style="background-image: url(images/instaim2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/instaim3.jpg" class="insta-img image-popup" style="background-image: url(images/instaim3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/instaim4.jpg" class="insta-img image-popup" style="background-image: url(images/instaim4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/instaim5.jpg" class="insta-img image-popup" style="background-image: url(images/instaim5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

		<footer class="ftco-footer ftco-bg-dark ftco-section" id="footer">
	    <div class="container">
	      <div class="row mb-5">
	        <div class="col-md">
	          <div class="ftco-footer-widget mb-4">
	            <h2 class="ftco-heading-2">Apratim 2k18</h2>
	            <p>Far far away, in the depths of the City Beautiful, a band of engineers thrives to create a fest like no other.<br>
	                This led to the creation of what we call today as <strong> Apratim </strong>, and as we always say "The pheonix has risen again"</p>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
	              <li class="ftco-animate"><a href="https://www.facebook.com/apratimccet/"><span><img class="logo" src="images/facebook-logo.svg"></span></a></li>
	              <li class="ftco-animate"><a href="https://www.instagram.com/ccetapratim/"><span><img class="logo" src="images/instagram-logo.svg"></span>  </a></li>
	            </ul>
	            <a href="#"><img src="images/aplogo.svg" height="100px"></a>
	          </div>
	        </div>
	        <div class="col-md">
	          <div class="ftco-footer-widget mb-4">
	            <h2 class="ftco-heading-2">Opening Hours</h2>
	            <ul class="list-unstyled">
	              <li><a href="#" class="py-2 d-block">Monday: <span>08: - 22:00</span></a></li>
	              <li><a href="#" class="py-2 d-block">Tuesday: <span>08: - 22:00</span></a></li>
	              <li><a href="#" class="py-2 d-block">Wednesday: <span>08: - 22:00</span></a></li>
	              <li><a href="#" class="py-2 d-block">Thursday: <span>08: - 22:00</span></a></li>
	              <li><a href="#" class="py-2 d-block">Friday: <span>08: - 22:00</span></a></li>
	              <li><a href="#" class="py-2 d-block">Saturday: <span>08: - 22:00</span></a></li>
	              <li><a href="#" class="py-2 d-block">Sunday: <span>08: - 22:00</span></a></li>
	            </ul>
	          </div>
	        </div>
	        <div class="col-md">
	          <div class="ftco-footer-widget mb-4">
	            <h2 class="ftco-heading-2">Contact Information</h2>
	            <ul class="list-unstyled">
	              <li><a href="#" class="py-2 d-block">Chandigarh College of Engineering
	                and Technology(Degree Wing), Sector 26 Chandigarh</a></li>
	              <li><a href="#" class="py-2 d-block">Yajur - +91 7087905260</a></li>
	              <li><a href="#" class="py-2 d-block">Chetanjit - +91 9781760861</a></li>
	              <li><a href="#" class="py-2 d-block">Vanshdeep - +91 9750000034</a></li>
	              <li><a href="http://ccet.ac.in/" class="py-2 d-block">Visit College Site</a></li>
	              <li><a href="#" class="py-2 d-block">ccet.apratim18@gmail.com</a></li>
	            </ul>
	          </div>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-12 text-center">
	          <p>Copyright &copy;<script>
	              document.write(new Date().getFullYear());
	            </script> All rights reserved | CCET</p>
	          <p>Website Design by Website Committee Apratim</p>
	        </div>
	      </div>
	    </div>
	  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
