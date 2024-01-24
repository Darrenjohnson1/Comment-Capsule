<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comment Capsule - Project</title>

  <!-- Bootstrap Stylesheet -->
  <script src="js/jquery-3.7.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/main.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>


  <!-- Header Start -->
  <header class="header container-custom p-3 position-absolute start-0 top-0 end-0">
    <div class="d-flex justify-content-between align-items-center">
      <a href="/" class="text-decoration-none text-white fs-5 fw-bold">Comment Capsule</a>

      <div>
        <?php
          include("src/security.php"); 
          if (!security_loggedIn()) {
            echo('
              <a href="login.php" class="mt-2 btn btn-default btn-outline-light" role="button">Log In</a>
              <a href="signup.php" class="mt-2 btn btn-default btn-light" role="button">Sign Up</a>
            ');
          }
          if(security_loggedIn()) {
            echo('
              <div class="d-flex justify-content-between">
                <div class="text-white my-auto">Welcome, User</div>
                <a href="profile.php" class="btn btn-default my-auto" role="button"><img width="35" height="35" src="img/user-interface.png"/></a>
              </div>
            ');
          }
          ?>
      </div>

    </div>
  </header>
  <!-- Header End -->

  <!-- Hero Start -->
  <section class="hero">

    <div class="hero__overlay"></div>

    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" loading="lazy" class="hero__video">
      <source src="img/pexels-juancarlos-córdova-7492690 (1080p).mp4" type="video/mp4">
    </video>

    <div class="hero__content h-100 position-relative">
      <div class="d-flex h-100 container-custom align-items-center hero__content-width">
        <div class="text-white">
          <h1 class="hero__heading fw-bold mb-4">The Writing Is On The Wall</h1>
          <p class="lead mb-4">One day future digital archaeologists may study the way we were. <br><br> Leave behind a legacy with an anonymous message on our wall.</p>
          <a href="#scroll-down" class="mt-2 btn btn-lg btn-outline-light" data-toggle="tooltip" data-placement="bottom" title="No way people could ruin this concept by trolling and leaving spam messages right? To bad this is a coding project that lives on a local environment." role="button">View Posts</a>
        </div>
      </div>
    </div>

    <a href="#scroll-down" class="hero__scroll-btn">
      Explore <i class="bi bi-arrow-down-short"></i>
    </a>

  </section>
  <!-- Hero End -->

  <a id="scroll-down"></a>
  <!-- Section One Start -->
  <section class="steps container-custom">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-6 align-self-center">
        <div class="steps__content-width ">
          <div class="d-flex justify-content-center flex-column">
            <h1 class='fw-bold mb-4 text-center'>Post on The Wall</h1>
            <?php 
              if(!security_loggedIn()) {
                echo("
                  <p class='text-center'>Log in to post on the wall.</p>
                ");
              }
              if(security_loggedIn()) {
                echo("
                  <div class='form-group justify-content-center'>
                    <form class='d-flex justify-content-center flex-column' action='index.php' method='POST'>
                      <textarea class='form-control' name='user_post'></textarea>
                      <button class='btn btn-dark ' type='submit'>Submit</button>
                    </form> 
                  </div>
                ");
              }
            ?>
          </div>
          <div class='mb-4 d-flex flex-column-reverse align-items-center'>
            <?php 
              security_post();
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section One End -->


  <!-- Section With 3 Col's Start -->
  <section class="bg-dark text-white py-4">
    <div class="container-custom my-4">
      <div class="row">

        <div class="col-12 col-sm-4 mb-4">
          <img src="img/user-interface.png" class="mb-4 img-fluid" alt="This is a header" width="60" height="60" loading="lazy">
          <h3>Custom SQL Login System</h3>
          <p>The site features a custom SQL-based login and sign-up system, adding a layer of security and customization to user authentication. By utilizing SQL databases, user credentials are securely stored, and the system allows for seamless integration with other database-driven functionalities.</p>
        </div>

        <div class="col-12 col-sm-4 mb-4">
          <img src="img/bootstrap.png" class="mb-4 img-fluid" alt="This is a header" width="60" height="60" loading="lazy">
          <h3>Bootstrap Styling</h3>
          <p>The website was built using Bootstrap, a versatile front-end framework. Bootstrap's responsive design features ensure the site looks great on different devices. The grid system simplifies layout, and pre-styled components like navigation bars and buttons accelerate development.</p>
        </div>

        <div class="col-12 col-sm-4 mb-4">
          <img src="img/secure.png" class="mb-4 img-fluid" alt="This is a header" width="60" height="60" loading="lazy">
          <h3>Security Measures</h3>
          <p>User submissions are sanitized to prevent potential vulnerabilities and injections, and sensitive data undergoes data hashing, transforming information like passwords into a secure unreadable and irreversible format.</p>
        </div>

      </div>
    </div>
  </section>
  <!-- Section With 3 Col's End -->

  <!-- Footer Start -->
  <footer class="footer bg-dark text-white">
    <div class="container-custom d-flex justify-content-between align-items-center py-3 border-highlight">
      <div class="col-md-4 d-flex align-items-center">
        <a href="https://darrendigital.com" class="me-2 text-muted text-decoration-none">
          <span>&copy; Darren Digital</a></span>
        </a> 
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>