<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FONYE DJs booking site. Contact us today to book your event">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FONYE DJs Booking Site</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster|Rye|Raleway" rel="stylesheet">
    <!-- ICONS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- MAIN NAV -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/navbar-logo.png" height="20" /></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="index.html">Home</a></li>
              <li class="active"><a href="#">Contact</a></li>
            </ul>
            <!--<form class="navbar-form navbar-right">
              <a href="subscribe.html" class="btn btn-default">Login</a>
          </form>-->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    <!-- END MAIN NAV -->

    <!-- MAIN CONTENT -->
    <div class="container-fluid">

      <div class="row header">

        <div class="col-xs-12 text-center">
          <a name="top"></a>
          <p class="entry">Contact Us</p>
        </div>
      </div>

      <div class="row" style=" background: #666;">
          <div class="col-lg-8 col-lg-offset-2" style="margin-top: 35px;">

                  <div class="panel panel-default" >
                      <div class="panel-heading">
                          <h2 class="panel-title">Contact Form</h2>
                      </div>
                      <div class="panel-body">
                          <form name="contactform" method="post" action="mailer.php" class="form-horizontal" role="form">
                              <div class="form-group">
                                  <label for="inputName" class="col-lg-2 control-label">Name</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputSubject" class="col-lg-2 control-label">Subject</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputPassword1" class="col-lg-2 control-label">Message</label>
                                  <div class="col-lg-10">
                                      <textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                      <button type="submit" class="btn btn-default">
                                          Send Message
                                      </button>
                                  </div>
                              </div>
                          </form>

                      </div>
                  </div>

          </div>


    </div>
    <!-- END MAIN CONTENT -->

    <!-- FOOTER -->
    <div class="row footer">

        <div class="col-xs-12 col-lg-4">
          <h2 class="text-center">Location</h2>
          <p><i class="fa fa-home"></i> New York City</p>
          <p><i class="fa fa-phone"></i> 877-FONYE-DJ</p>
          <p><i class="fa fa-envelope-o"></i> Bookings@fonyedjs.com</p>
        </div>

        <div class="col-xs-12 col-lg-4 text-center" id="social">
          <h2>Follow Us</h2>
          <p>
              <a href="https://twitter.com/fonye" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
              <a href="https://www.facebook.com/therealfonye/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
              <a href="https://www.mixcloud.com/adam-djaj-smith/live-skate-music-and-hiphop-blend-session-unplanned-unedited/" target="_blank"><i class="fa fa-soundcloud fa-2x"></i></a>
              <a href="https://www.youtube.com/user/fonyerecords" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
        </p>
      </div>
      <div class="col-xs-12 col-lg-4">
        <h2 class="text-center">Disclaimer</h2>
        <p class="">The views, opinions and suggestions expressed by the show hosts and guests do not represent those of the station, its affiliates or sponsors.</p>
      </div>
    </div>
    <!-- END FOOTER -->
    <iframe class="navbar navbar-inverse navbar-fixed-bottom" width="100%" height="61" src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fadam-djaj-smith%2Flive-skate-music-and-hiphop-blend-session-unplanned-unedited%2F&hide_cover=1&mini=1" frameborder="0"></iframe>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
