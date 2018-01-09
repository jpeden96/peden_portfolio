<?php
  require_once("admin/scripts/config.php"); //linking the page - could link directly to mail.php but config.php allows for more links with multiple pages

  if(isset($_POST['name'])){ //refers to the value name=name - not the name=other things
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $street = $_POST['street'];
    $direct = 'thankyou.php';
  //  echo $name;
    //echo $email;
    //echo $message;
    //echo $street;

    if($street === "") {
      $sendMail = submitMessage($name, $email, $message,$direct);
      //echo "street is empty";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Julia Peden Graphics</title>


      <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">


  </head>
  <body>

    <section class="container">
      <nav class="navbar navbar-default navbar-fixed-top">
        <!--<div class="container"> -->
          <div class="navbar-header">

              <img src="img/jpg-logo.png" alt="JPG Logo" id="logo">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false">
              <span class="sr-only">Toggle Nav</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse" id="mainNav">
            <ul class="nav navbar-nav navbar-right">
              <li><a class="page-scroll" href="#home">HOME</a></li>
              <li><a class="page-scroll" href="#about">ABOUT</a></li>
              <li><a class="page-scroll" href="#skills">SKILLS</a></li>
              <li><a class="page-scroll" href="#portfolio">PORTFOLIO</a></li>
              <li><a class="page-scroll" href="#contact">CONTACT</a></li>
            </ul>
        </div>
      <!-- </div> -->
      </nav>
    </section><!--end class container-->


      <section class="container header" id="home">
        <div class="gradient">
        <div class="row">
          <div class="col-xs-10 col-xs-push-1 col-sm-5 col-sm-push-0 header-overlay">
            <img src="img/jpg-logo.png" alt="JPG Logo" id="header-logo" class="img-responsive">
            <img src="img/juliapedengraphics.png" alt="Julia Peden Graphics" class="jpg img-responsive">
          </div><!--end col-sm-5-->
        </div> <!--end .row-->
      </div>
      </section> <!--end container-->
<section class="about container" id="about">
      <!--<div class="container"> -->

        <div class="row">
          <div class="col-xs-10 col-xs-push-1 aboutText hidden-md hidden-lg">
            <h1>ABOUT</h1>
          </div>
          <div class="col-xs-8 col-xs-push-2 hidden-md hidden-lg">
            <img src="img/about-sm.jpg" alt="About Portrait small" class="img-responsive about-pic">
          </div>

          <div class="col-xs-10 col-xs-push-1 col-md-6 col-md-push-1 aboutText">
            <h1 class="hidden-xs hidden-sm">ABOUT</h1><br>
            <p>Welcome to my online portfolio.</p><p>My name is Julia Peden. I am a graphic designer and motion artist. I started off as a visual artist and used those skills to transition into a digital platform. I study Media, Information, and Technoculture at Western University which provides me with a strong theoretical background on the industry of media and technology. I also study Interactive Media Design at Fanshawe College which teaches me hands-on skills required for graphic and motion design. I hope you enjoy going through my portfolio!</p>

            <h1 class="subHeader">INTERESTS</h1> <br>

            <div class="col-xs-4 col-md-3 facts">
              <img src="img/fact1.png" alt="fact1" class="fact-img img-responsive">
              <p class="fact-text">Ultimate Frisbee</p>
            </div>
            <div class="col-xs-4 col-md-3 facts">
              <img src="img/fact2.png" alt="fact2" class="fact-img img-responsive">
              <p class="fact-text">Craft Beer<br>Enthusiast</p>
            </div>
            <div class="col-xs-4 col-md-3 facts">
              <img src="img/fact3.png" alt="fact3" class="fact-img img-responsive">
              <p class="fact-text">Dog Lover</p>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-5 about-pic hidden-sm hidden-xs">
              <!--<img src="img/about-gradient.png" alt="gradient" id="about-gradient" class="img-responsive"> -->
              <img src="img/about-complete.jpg" alt="About Portrait" class="img-responsive">
          </div>
        </div>
    <!-- </div> -->
  </section>
<section class="skills container" id="skills">
<div class="bgGradient">
  <div class="row">
    <div class="col-xs-12 col-md-5 skillsOverlay">
    <div class="col-md-6 col-md-push-2 skillsText">
      <h1>SKILLS</h1>
      <p>Over the years, I have collected a variety skills surrounding graphic and motion design. I focus on four main areas, Branding, Marketing, Design, and Motion. </p>
  </div>
</div>
</div>
<div class="row">
    <div class="col-xs-10 col-xs-push-1 col-md-6 col-md-push-4" id="whiteOverlay">

      <div class="row topSkills">
      <div class="col-xs-6 skillsItems">
        <img src="img/branding.png" alt="Branding Icon" class="thumb">
        <h3>BRANDING</h3>
        <ul><li>Brand Style Guide</li><li>Event & Initiative Branding</li><li>Brand Development</li></ul>
      </div>
      <div class="col-xs-6 skillsItems">
        <img src="img/marketing.png" alt="Marketing Icon" class="thumb">
        <h3>MARKETING</h3>
        <ul><li>Social Media Strategies</li><li>Print & Web Advertising</li><li>Campaign Planning</li></ul>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 skillsItems">
        <img src="img/design.png" alt="Design Icon" class="thumb">
        <h3>DESIGN</h3>
        <ul><li>Logo Design</li><li>Illustrations</li><li>Print & Web Design</li></ul>
      </div>
      <div class="col-sm-6 skillsItems">
        <img src="img/motion.png" alt="Motion Icon" class="thumb">
        <h3>MOTION</h3>
        <ul><li>Live Action Videos</li><li>Typographic Animations</li><li>2D Animations</li></ul>
      </div>
    </div>
    </div>
  </div>
  </div>
</section>

<section class="portfolio container" id="portfolio">
  <div class="row">
    <div class="col-sm-12 col-md-4 col-md-push-1">
      <h1>PORTFOLIO</h1>
      <p>Take a look at some of my work. You’ll find some of my best branding style guides, logo designs, print designs, social media strategies, and animation videos.</p>
</div>

    <div class="row">
    <div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-1 portContent thumbRow">
      <div class="col-xs-6 col-md-4 portfolioPieces column">
        <img src="img/portThumbs/imwell-500x500.jpg" alt="IMWell Thumbnail" onclick="openModal();currentSlide(1)" class="thumbs img-responsive hover-shadow">
      </div>
      <div class="col-xs-6 col-md-4 portfolioPieces column">
        <img src="img/portThumbs/eyeball-500x500.jpg" alt="Eyeball Thumbnail" onclick="openModal();currentSlide(2)" class ="thumbs img-responsive hover-shadow">
      </div>
      <div class="col-xs-6 col-md-4 portfolioPieces column">
      <img src="img/portThumbs/smh-500x500.jpg" alt="SMH Thumbnail" onclick="openModal();currentSlide(3)" class ="thumbs img-responsive hover-shadow">
    </div>

  <div class="thumbRow">
    <div class="col-xs-6 col-md-4 portfolioPieces column">
      <img src="img/portThumbs/tc-500x500.jpg" alt="IMWell Thumbnail" onclick="openModal();currentSlide(4)" class ="thumbs bottomRow img-responsive hover-shadow">
    </div>
    <div class="col-xs-6 col-md-4 portfolioPieces column">
      <img src="img/portThumbs/techliveshere-500x500.jpg" alt="Eyeball Thumbnail" onclick="openModal();currentSlide(5)" class ="thumbs bottomRow img-responsive hover-shadow">
    </div>
    <div class="col-xs-6 col-md-4 portfolioPieces column">
      <img src="img/portThumbs/flex-500x500.jpg" alt="SMH Thumbnail" onclick="openModal();currentSlide(6)" class ="thumbs bottomRow img-responsive hover-shadow">
    </div>
  </div> <!-- end thumbrow 2-->
</div><!-- end all contents -->
    </div>

    <!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img/portfolio/piece1-1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img/portfolio/piece2-1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img/portfolio/piece3-1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img/portfolio/piece4-1.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="thumb" src="img/portThumbs/imwell-500x500.jpg" onclick="currentSlide(1)" alt="I.M. Well Poster Campaign">
    </div>

    <div class="column">
      <img class="thumb" src="img/portThumbs/smh-500x500.jpg" onclick="currentSlide(2)" alt="Saugeen-Maitland Hall">
    </div>

    <div class="column">
      <img class="thumb" src="img/portThumbs/eyeball-500x500.jpg" onclick="currentSlide(3)" alt="Personal Projects">
    </div>

    <div class="column">
      <img class="thumb" src="img/portThumbs/tc-500x500.jpg" onclick="currentSlide(4)" alt="TC 1972">
    </div>
    <div class="column">
      <img class="thumb" src="img/portThumbs/flex-500x500.jpg" onclick="currentSlide(4)" alt="Flex">
    </div>
    <div class="column">
      <img class="thumb" src="img/portThumbs/techliveshere-500x500.jpg" onclick="currentSlide(4)" alt="Tech Lives Here">
    </div>

  </div>
</div>

</div>
</section>


<section class="contact container" id="contact">
  <div class="col-xs-12 col-md-4 col-md-push-1 contact-text">
    <h1>CONTACT</h1>
    <p>Like what you see? Or just interested in getting to know more of my skills? I am always excited to work on new projects. I also love meeting new people, whether we meet over a coffee or a beer in the afternoon.<br>Please fill out my form if you have any project proposals or just want to meet up!</p>
  </div>
  <div class="col-xs-8 col-xs-push-2 col-md-7 col-md-push-1 contactForm">
    <form action="index.php" method="post">
       <label>NAME </label><input name="name" type="text" size="21" maxlength="30" />
      <br><label>EMAIL </label><input name="email" type="text" size="21" maxlength="30" />
       <br><label for="street" class="street">STREET </label><input class="street" name="street" type="text" size="21" maxlength="30" />
       <br><label for="message">MESSAGE </label><textarea name="message"></textarea>
       <br>
       <div class="col-xs-offset-10"><input class="submit" name="submit" type="submit" value="Send" /></div>
    </form>
  </div>
</section>



<script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/lightbox.js"></script>
<script src="js/pagescroll.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    </body>
</html>
