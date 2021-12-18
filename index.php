<?php
    $name = $phone = $email = $message = "";
    $valide = "";
    $icon = "";
    $padding = "";
    $emailTo = "azougarytm@gmail.com";
    $success = false;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = verifyInput($_POST['name']);
        $phone = verifyInput($_POST['phone']);
        $email = verifyInput($_POST['email']);
        $message = verifyInput($_POST['message']);
        $success = true;
        $emailText = "";

        $emailText .= "Name: $name\nphone: $phone\nEmail: $email\nMessage: $message";

        $valide = "Votre message a bien été envoyé";
        $icon = "fas fa-heart";
        $padding = "10px";

        if($success)
        {
          $headers = "From: $name <$email>\r\n Reply-To: $email";
          mail($emailTo, "un message de votre site", $emailText, $headers);
          $name = $phone = $email = $message = "";
        }
    }
    
    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);

        return $var;
    }
?>

<!doctype html>
<html lang="en">
<head>
   
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--main css-->
  <link rel="stylesheet" href="main.css">
  <!--font awesome-->
  <script src="all.js" ></script>
  <script src="https://kit.fontawesome.com/4abd30d2fa.js" crossorigin="anonymous"></script>
  <!--google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Kalam:700" rel="stylesheet">
</head>

<body>
  <header id="header">
    <nav id="navbar" class="navbar navbar-expand-lg">
      <a class="navbar-brand px-2 py-0 " href="#"><img src="img/Logo.png" alt="logo"></a>
      <div class="sociall-media px-2 text-center">
        <a href="#"><i id="sociall" class="fab fa-linkedin mr-4"></i></a>
        <a href="#"><i id="sociall" class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCb8i0olQPxgSXS8CuEg3wzA" target="_blank"><i id="sociall" class="fab fa-youtube ml-4"></i></a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </button>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link m-2 text-capitalize nav-active" href="#header">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link m-2 text-capitalize" href="#skills">Skills</a>
          </li>

          <li class="nav-item">
            <a class="nav-link m-2 text-capitalize" href="#about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link m-2 text-capitalize" href="#projects">projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link m-2 text-capitalize" href="#contact">Contact</a>
          </li>
        </ul>

      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col no-padding">
          <div id="demo-slider" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item item-1 active">
                <div class="carousel-caption mb-5 text-right">
                  <h1 class="display-3 text-capitalize mb-2 text-light">I am Developer</h1>
                  <a href="#projects" class="btn btn-lg mb-5 text-uppercase banner-btn">my work</a>
                </div>
              </div>
              <div class="carousel-item item-2">
                <div class="carousel-caption mb-5 text-center">
                  <h1 class="display-3 text-capitalize mb-2 text-light">I am Designer</h1>
                  <a href="#projects" class="btn btn-lg mb-5 text-uppercase banner-btn">my work</a>
                </div>
              </div>
              <div class="carousel-item item-3">
                <div class="carousel-caption mb-5 text-left">
                  <h1 class="display-3 text-capitalize mb-2 text-light">I am Artist</h1>
                  <a href="#projects" class="btn btn-lg mb-5 text-uppercase banner-btn">my work</a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#demo-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--skills section-->

  <section id="skills" class="pb-5">
    <div class="container">
      <!--     title-->
      <div class="row title mb-5">
        <div class="col text-center">
          <h1 class="text-uppercase">my skills</h1>
          <h3 class="text-capitalize">Programming Languages.</h3>
          <a href="#" class="mb-0"><i class="far fa-check-square"></i></a>
          <div class="title-underline"></div>

        </div>

      </div>
      <!--      end of title-->
      <div class="row">
        <!--       item-->
        <div class="col-lg-6 my-5">
          <div class="row">
            <div class="col-6 d-flex align-items-center skills-icon">
              <span><i class="fab fa-html5"></i></span>
            </div>
            <div class="col-6">
              <h3 class="text-uppercase">html</h3>
              <p class="text-muted">The HyperText Markup Language, 
                or HTML is the standard markup language for documents designed
                 to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.</p>
            </div>
          </div>
        </div>
        <!--        item-->
        <!--       item-->
        <div class="col-lg-6 my-5">
          <div class="row item-row">
            <div class="col-6 d-flex align-items-center skills-icon">
              <span><i class="fab fa-css3"></i></span>
            </div>
            <div class="col-6">
              <h3 class="text-uppercase">css, css3, css4</h3>
              <p class="text-muted">Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
            </div>
          </div>
        </div>
        <!--        item-->
        <!--       item-->
        <div class="col-lg-6 my-5">
          <div class="row item-row">
            <div class="col-6 d-flex align-items-center skills-icon">
              <span><i class="fab fa-js"></i></span>
            </div>
            <div class="col-6">
              <h3 class="text-uppercase">js(es6/es7/es8)</h3>
              <p class="text-muted">JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm.</p>
            </div>
          </div>
        </div>
        <!--        item-->
        <!--       item-->
        <div class="col-lg-6 my-5">
          <div class="row item-row">
            <div class="col-6 d-flex align-items-center skills-icon">
              <span><i class="fab fa-php"></i></span>
            </div>
            <div class="col-6">
              <h3 class="text-uppercase">php 7</h3>
              <p class="text-muted">PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.</p>
            </div>
          </div>
        </div>
        <!--        item-->
        <!--       item-->
        <div class="col-lg-6 my-5">
          <div class="row item-row">
            <div class="col-6 d-flex align-items-center skills-icon">
              <span><i class="fab fa-bootstrap"></i></i></span>
            </div>
            <div class="col-6">
              <h3 class="text-uppercase">bootstrap 3/4</h3>
              <p class="text-muted">Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.</p>
            </div>
          </div>
        </div>
        <!--        item-->
        <!--       item-->
        <div class="col-lg-6 my-5">
          <div class="row item-row">
            <div class="col-6 d-flex align-items-center skills-icon">
              <span style="background: #909090;height: 80px;border-radius: 50%;"><img src="img/jquery_512_black.png" width="80" style="
                transform: translateY(-34px);"></span>
            </div>
            <div class="col-6">
              <h3 class="text-uppercase">jquery</h3>
              <p class="text-muted">jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax. It is free, open-source software using the permissive MIT License. As of May 2019, jQuery is used by 73% of the 10 million most popular websites</p>
            </div>
          </div>
        </div>
        <!--        item-->
        <!--       item-->
        <div class="col-lg-6 my-5">
          <div class="row item-row">
            <div class="col-6 d-flex align-items-center skills-icon">
              <span><i class="fab fa-laravel"></i></span>
            </div>
            <div class="col-6">
              <h3 class="text-uppercase">laravel</h3>
              <p class="text-muted">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.</p>
            </div>
          </div>
        </div>
        <!--        item-->
      </div>
    </div>

  </section>
  <!--end of skills section-->
  <section id="about" class="pb-5">
    <div class="container">
      <!--     title-->
      <div class="row title my-5">
        <div class="col text-center">
          <h1 class="text-uppercase dm">about me</h1>
          <h3 class="text-capitalize">levels</h3>
          <a href="#" class="mb-0"><i class="fas fa-globe"></i></a>
          <div class="title-underline"></div>

        </div>

      </div>
      <!--      end of title-->
      <div class="row mb-5">
        <div class="col-md-6 about-progress mb-5 d-flex flex-column justify-content-center">
          <div class="progress-bars">
            <!--           html-->

            <div class="bar my-3">
              <h5 class="text-light text-uppercase d-flex justify-content-between">html<span>90%</span></h5>
              <div class="progress bg-light">

                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
            </div>
            <!--           end of html -->
            <!--           css-->

            <div class="bar my-3">
              <h5 class="text-light text-uppercase d-flex justify-content-between">css<span>70%</span></h5>
              <div class="progress bg-light">

                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
              </div>
            </div>
            <!--           end of css -->
            <!--           javascript-->

            <div class="bar my-3">
              <h5 class="text-light text-uppercase d-flex justify-content-between">javascript<span>50%</span></h5>
              <div class="progress bg-light">

                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
            </div>
            <!--           end of js -->
            <!--           php-->

            <div class="bar my-3">
              <h5 class="text-light text-uppercase d-flex justify-content-between">php<span>40%</span></h5>
              <div class="progress bg-light">

                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
              </div>
            </div>
            <!--           end of php -->


          </div>
        </div>
        <div class="col-md-6 py-5 about-text text-center">
          <h2 class="text-uppercase">always learning and pushing boundaries</h2>
          <p class="lead text-light my-4">My name's Mohammed Azouguagh Oualene, I was born on 06/24/2001 Morocco,
            I am a Web developer, Based on my experience, I’m able to create not only good looking visuals, I’m ready to build interfaces, that people will love to use.
            
            I also love to spread my knowledge thought my social accounts
          </p>
        </div>
      </div>
    </div>


  </section>
  <!--end of about-->
  <!--  projects-->
  <section id="projects" class="py-5">
    <div class="container">
      <!--     title-->
      <div class="row title mb-5">
        <div class="col text-center">
          <h1 class="text-uppercase">projects</h1>
          <h3 class="text-capitalize">My recent Projects</h3>
          <a href="#" class="mb-0"><i class="fas fa-camera"></i></a>
          <div class="title-underline"></div>

        </div>

      </div>
      <!--      end of title-->
      <!--      button row-->
      <div class="row">
        <div class="col text-center">
          <div class="btn-group btn-group-lg mb-5 button-group filter-button-group" role="group">
            <button type="button" class="btn text-uppercase" data-filter="*">all</button>
            <button type="button" class="btn text-uppercase" data-filter=".store">store</button>
            <button type="button" class="btn text-uppercase" data-filter=".app">app</button>
            <button type="button" class="btn text-uppercase" data-filter=".agency">agency</button>
          </div>
        </div>
      </div>
      <!--      images row-->
      <div class="row grid projects">
        <div class="col-sm-6 col-md-4 my-3 store">
          <article class="img-container">
            <img src="img/appar.png" class="img-fluid rounded project-image">
          </article>

        </div>
        <div class="col-sm-6 col-md-4 my-3 app">
          <article class="img-container">
            <img src="img/musicapp.png" class="img-fluid rounded project-image">
          </article>
        </div>
        <div class="col-sm-6 col-md-4 my-3 agency">
          <article class="img-container">
            <img src="img/agency.png" class="img-fluid rounded project-image">
          </article>
        </div>
        <div class="col-sm-6 col-md-4 my-3 store">
          <article class="img-container">
            <img src="img/cake.png" class="img-fluid rounded project-image">
          </article>
        </div>
        <div class="col-sm-6 col-md-4 my-3 app">
          <article class="img-container">
            <img src="img/musapp.png" class="img-fluid rounded project-image">
          </article>
        </div>
        <div class="col-sm-6 col-md-4 my-3 agency">
          <article class="img-container">
            <img src="img/sushi.png" class="img-fluid rounded project-image">
          </article>
        </div>
        <div class="col-sm-6 col-md-4 my-3">
          <article class="img-container" style="background: #fff;">
            <img src="" class="img-fluid rounded project-image">
          </article>
        </div>
        <div class="col-sm-6 col-md-4 my-3 agency">
          <article class="img-container">
            <img src="img/car-ag.png" class="img-fluid rounded project-image">
          </article>
        </div>
        <div class="col-sm-6 col-md-4 my-3 store">
          <article class="img-container">
            <img src="img/house.png" class="img-fluid rounded project-image">
          </article>
        </div>
        



      </div>



    </div>


  </section>



  <!-- end of projects-->
  <!--current project-->
  <section id="current-project" class="py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 py-5 about-text text-center align-self-center">
          <h2 class="text-uppercase">current project</h2>
          <p class="lead text-light">Here's  some of my past works</p>
          <a href="" class="btn btn-lg d-block w-75 mx-auto text-uppercase mb-5">learn more</a>
        </div>
        <div class="col-md-6 current-project-photo my-5">
          <img src="img/cake.png" class="current-project current-project-1 img-thumbnail">
          <img src="img/car-ag.png" class="current-project current-project-2 img-thumbnail">
          <img src="img/musapp.png" class="current-project current-project-3 img-thumbnail">
          <img src="img/house.png" class="current-project current-project-4 img-thumbnail">

        </div>
      </div>
    </div>

  </section>
  <!--end of current project-->
  <!--values-->
  <section id="values" class="py-5">
    <!--     title-->
    <div class="row title mb-5">
      <div class="col text-center">
        <h1 class="text-uppercase">my values</h1>
        <h3 class="text-capitalize">Everyday</h3>
        <a href="#" class="mb-0"><i class="fas fa-rocket"></i></a>
        <div class="title-underline"></div>

      </div>

    </div>
    <!--      end of title-->


    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-4 value text-center my-3">
          <span class="value-icon"><i class="fas fa-utensils fa-fw"></i></span>
          <span class="value-number">1</span>
          <h1 class="my-2 text-uppercase">eat</h1>
        </div>
        <div class="col-sm-6 col-lg-4 value text-center my-3">
          <span class="value-icon"><i class="fas fa-code fa-fw"></i></span>
          <span class="value-number">2</span>
          <h1 class="my-2 text-uppercase">code</h1>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto value text-center my-3">
          <span class="value-icon"><i class="fas fa-bed fa-fw"></i></span>
          <span class="value-number">3</span>
          <h1 class="my-2 text-uppercase">sleep</h1>
        </div>
      </div>
    </div>
  </section>
  <!--values-->
  <!--contact-form-->
  <section id="contact-form" class='py-5'>
    <div class="container py-5">
      <div class="row height-30 align-items-center">
        <div class="col-md-8 mx-auto text-center">
          <h1 class="text-capitalize display-3">Subscribe</h1>
          <form class="form d-flex align-items-baseline">
            <input type="text" class="form-control form-control-lg m-2" id="name" placeholder="your email here....">
            <button type="submit" class="btn btn-lg text-capitalize">Submit here</button>
            <span class="" style="padding: 10px;font-size: 28px;color: #1abc9c;
            "></span>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--contact-form-->
  <!--team-->
  <section id="team" class="py-5">
    <div class="container">
      <!--     title-->
      <div class="row title mb-5">
        <div class="col text-center">
          <h1 class="text-uppercase">my comrades</h1>
          <h3 class="text-capitalize">Dashboard</h3>
          <a href="#" class="mb-0"><i class="far fa-check-square"></i></a>
          <div class="title-underline"></div>

        </div>

      </div>
      <!--      end of title-->
    </div>
  </section>
  <!--end of team-->
  <!--  numbers-->
  <section id="numbers">
    <div class="container-fluid no-padding">
      <div class="row">
        <div class="col-sm-6 col-lg-3 text-center number py-3">
          <span><i class="fas fa-user fa-3x"></i></span>
          <h4 id="counter" class="mt-3">200</h4>

          <h3 class="text-capitalize">users</h3>
        </div>
        <div class="col-sm-6 col-lg-3 text-center number py-3">
          <span><i class="fas fa-download fa-3x"></i></span>
          <h4 class="mt-3" id="number2">356</h4>

          <h3 class="text-capitalize">downloads</h3>
        </div>
        <div class="col-sm-6 col-lg-3 text-center number py-3">
          <span><i class="fas fa-share-alt fa-3x"></i></span>
          <h4 class="mt-3 count">255</h4>

          <h3 class="text-capitalize">shares</h3>
        </div>
        <div class="col-sm-6 col-lg-3 text-center number py-3">
          <span><i class="fas fa-eye fa-3x"></i></span>
          <h4 class="mt-3 count">1234</h4>

          <h3 class="text-capitalize">views</h3>
        </div>




      </div>
    </div>
  </section>




  <!--end of numbers-->
  <!--  contact section-->
  <section id="contact" class="py-5">
    <div class="container">
      <div class="row height-60 align-items-baseline">
        <div class="col-lg-6 col-sm-10 mx-auto my-3 ">
          <div class="card text-center">
            <div class="card-header text-centertext-uppercase">
              <h1 class="text-uppercase">contact form</h1>
            </div>
            <div class="card-body">
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                  <p style="background: #fff;padding: <?php echo $padding; ?>;
                border-radius: 5px;color: #1abc9c;"><?php echo $valide; ?>
                <span class="<?php echo $icon; ?>"></span></p>
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input name="name" type="text" class="form-control form-control-lg text-capitalize" placeholder="Name" required>
                </div>
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-phone"><i class="fas fa-phone"></i></span>
                  </div>
                  <input name="phone" type="number" class="form-control form-control-lg text-capitalize" placeholder="Phone number">
                </div>
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-email"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input name="email" type="email" class="form-control form-control-lg text-capitalize" placeholder="Email" required>
                </div>
                <div class="input-group my-3">
                   <textarea name="message" id="textarea" rows="5" placeholder="Message" required></textarea> 
                </div>
                <button type="submit" class="btn btn-block btn-lg text-uppercase contact-btn"><i class="far fa-hand-point-right mr-2"></i>Send message</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block  text-center mb-5 align-self-center">
          <div class="panel">
            <h5>Phone</h5>
            <p style="color: rgb(218, 218, 218);">(+212)771804281</p>
            <h5>Email</h5>
            <p style="color: rgb(218, 218, 218);">azougarm07@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of contact section-->
  <div class="social-media px-2 py-4 text-center">
    <a target="_blank" href="https://www.linkedin.com/in/mohammed-azouguagh-oualene-1b7780219/"><i id="social" class="fab fa-linkedin mt-2"></i></a>
    <a target="_blank" href="https://www.instagram.com/azougar__code/"><i id="social" class="fab fa-instagram mt-2"></i></a>
    <a target="_blank" href="https://www.youtube.com/channel/UCb8i0olQPxgSXS8CuEg3wzA"><i id="social" class="fab fa-youtube mt-2"></i></a>
  </div>
  <!--footer-->
  <footer class="container-fluid py-2 px-3 mt-4">
        <h5 class="text-capitalize">
          &copy;2021 copyright : azougar
        </h5>
  </footer>

  <!-- Optional JavaScript -->
  
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <!--  isotope-->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
</body>
</html>
