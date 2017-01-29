<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    
    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Meerer</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="skill_analysis.html">My Profile</a>
                    </li>
                    <li>
                        <a href="experience_mine.php">ExperienceMine</a>
                    </li>
                    <li>
                        <a href="#">Points: 5</a>
                    </li>
                </ul>
                <div class="nav navbar-nav pull-right" style="padding-top: 15px">
                    <a href="#" style="text-decoration: none">You are logged in as: Hossain, Sakeeb!</a>
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Your Profile</p>
                <div class="list-group">
                    <a href="skill_analysis.html" class="list-group-item active">Skill Analysis</a>
                    <a href="experience_list.php" class="list-group-item">Experience List</a>
                    <a href="#" class="list-group-item">Add an Experience</a>
                    <a href="#" class="list-group-item">Achievements</a>
                </div>
            </div>

    <div class="col-md-9">

                <h1>Add an Experience</h1>
                <h4>Tell us how it went down.</h4>
                <hr />
                <h3>Event name:</h3>
                <form>
                    <div class="form-group">
                      <textarea class="form-control" rows="1" id="comment"  placeholder="Title"></textarea>
                    </div>
                </form>

                <h3>How did you feel about the event?:</h3>
                <form>
                    <div class="form-group">
                      <textarea class="form-control" rows="5" id="comment"  placeholder="Write your thoughts here..."></textarea>
                    </div>
                    <button class="btn btn-danger" onClick="notifyMe()">Submit</button>
                </form>

                <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                  <span style="font-size: 20px; background-color: #F3F5F6; padding: 0 10px;">
                    OR <!--Padding is optional-->
                  </span>
                </div>

                <div>
                <br/>
                <img style="vertical-align:middle" src="LinkedIn_Logo.png">

                <br/>
                <br/>

                <form>
                    <div class="form-group">
                      <textarea class="form-control" rows="1" id="comment" placeholder="Paste link to LinkedIn profile here"></textarea>
                    </div>
                    <button class="btn btn-danger" onClick="setTimeout(notifyMe(), 5000)">Submit</button>
                </form>
                    
                </div>
    </div>

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Meerar</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        Notification.requestPermission().then(function(result) {
  console.log(result);
});

function notifyMe(theBody,theIcon,theTitle) {
  var options = {
      body: "You got 5 points!",
      icon: "meerar_logo.png"
  }
  var n = new Notification("Meerar",options);
  setTimeout(n.close.bind(n), 5000); 
}

    </script>

</body>

</html>