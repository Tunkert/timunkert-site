<?php include "includes/connection.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">
  <link href="./main.550dcf66.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./style.css">
	<title>Form Submitted | TimUnkert.com</title>
</head>
<body>
	<header>
    <nav class="navbar navbar-default active">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.html" title="">
            <!-- <img src="./assets/images/mashup-icon.svg" class="navbar-logo-img" alt=""> -->
            TimUnkert.com
          </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./index.html" title="">Home</a></li>
            <li><a href="./blog/blog.html">Blog</a></li>
            <li><a href="https://youtube.com/c/TimothyUnkert" target="_blank">YouTube</a></li>
            <li>
              <p>
                <a href="https://github.com/Tunkert" class="btn btn-default navbar-btn" title="Tim Unkert's Github profile">Github</a>
              </p>
            </li>

          </ul>
        </div> 
      </div>
    </nav>
  </header>
  <div class="section-container">
  	<div class="container">
  		
  	<?php
  		if(isset($_POST['submit'])) {
  			$name = $_POST['name'];
  			$email = $_POST['name'];
  			$telephone = $_POST['telephone'];
  			$subject = $_POST['subject'];
  			$message = $_POST['message'];

  			$query = "INSERT INTO tim_unkert_form(name, email, telephone, subject, message) ";

  			$query = "VALUES ('$name', '$email', '$telephone', '$subject', '$message')";

  			/* transfrer to database */
  			$result = mysqli($connection, $query);

  			if(!$result) {
  				die("Query failed! " . mysql_error($connection));
  			} else {
  				echo "<p>Form submitted successfully. Please give 1-2 business days for a response.</p>";
  			}

  		}

  		?>
  	</div>
  </div>
</body>
</html>