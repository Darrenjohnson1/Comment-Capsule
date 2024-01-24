<?php
  include("src/security.php");
  security_login();
  if(!security_loggedIn()) {
    header('Location: login.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comment Capsule - Profile</title>

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
  <header class="header  p-3 bg-dark start-0 top-0 end-0">
    <div class="d-flex justify-content-between container-custom align-items-center">
      <a href="index.php" class="text-decoration-none text-white fs-5 fw-bold">Comment Capsule</a>

      <div>
          <a href="logout.php" class="mt-2 btn btn-default text-white btn-link" role="button">Log Out</a>
          <a href="index.php" class="mt-2 btn btn-default btn-light" role="button">Back to Home</a>
      </div>

    </div>
  </header>
  <!-- Header End -->

  <!-- Section One Start -->
  <section class="steps container-custom h-100">
      
    <div class="row">
      <div class="col-12 col-sm-6 justify-content-md-ceneter pb-4">
            <h1 class='fw-bold'>Account Settings</h1>
            <p>Here you can update your password or delete your account.</p>
      </div>

      <div class="col-12 col-sm-6 align-self-center justify-content-md-ceneter">
        <div class='container'>
            <div class="mb-4">
                <h2>Update Password</h2>
                <p>Alter your current account password.</p>
                <a href='update.php'><button type="button" class="btn btn-warning">Update</button></a>
            </div>
            <div class="mb-4">
                <h2>Delete Account</h2>
                <p>Permanently delete this account.</p>
                <a href='remove.php'><button type="button" class="btn btn-danger">Delete</button></a>
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
