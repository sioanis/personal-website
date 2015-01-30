<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Sue Ann Ioanis</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/cover.css" rel="stylesheet">
    <link href="assets/css/contact.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

        <div class="masthead clearfix">
          <div class="inner">
            <h3 class="masthead-brand">Sue Ann Ioanis</h3>
            <ul class="nav masthead-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li class="active"><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>


          <div class="inner cover">

<div class="container">
<div class="row">

  <div class="col-sm-3">
  <h3>Drop me a msg!</h3>
  <hr>
  <address>
  <strong>Email:</strong> <a href="mailto:sueann.ioanis@gmail.com"> sueann.ioanis@gmail.com</a><br><br>
  <strong>Phone:</strong> (732) 325-4822
  </address>
  </div>
    

  <div class="col-sm-4 contact-form">

  <div id="success">
    <span class="green textcenter">
        <p>Your msg was sent! I'll try to reply asap. :)</p>
    </span>
  </div>

  <div id="error">
    <span>
        <p>Something went wrong, try refreshing and submitting the form again.</p>
    </span>
  </div>


    <form id="contact" name="contact" action="mail.php"  method="post" class="form" role="form">
      <div class="row">
        <div class="col-xs-6 col-md-6 form-group">
        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
        </div>
        <div class="col-xs-6 col-md-6 form-group">
        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
        </div>
      </div>
        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
        <br />
        <input class="form-control" id="answer" name="answer" placeholder="Type 'yes' to confirm that you are human." type="text" required />
        <br />

      <div class="row">
        <div class="col-xs-8 col-md-8 form-group">
        <button class="btn btn-primary pull-right" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>

</div>
</div>


          </div>

        <?php include("assets/footer.php"); ?>

        </div>

      </div>

    </div>

    <!-- JS -->
    <script src="assets/js/navigation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>


    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <script src="assets/js/validation.js"></script>

  </body>
</html>
