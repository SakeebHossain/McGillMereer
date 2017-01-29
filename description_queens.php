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
                        <a href="skill_analysis.php">My Profile</a>
                    </li>
                    <li>
                        <a href="experience_mine.php">ExperienceMine</a>
                    </li>
                    <li>
                        <a href="#">Points: 10</a>
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
                    <a href="skill_analysis.php" class="list-group-item active">Skill Analysis</a>
                    <a href="#" class="list-group-item">Experience List</a>
                    <a href="#" class="list-group-item">Add an Experience</a>
                    <a href="#" class="list-group-item">Achievements</a>
                </div>
            </div>

            <div class="col-md-9">

                <h1>Your Skill Profile</h1><span><h4>A compilation of the latest and greatest from you.</h4></span>


<table class="table table-striped">
<thead><tr><th>Event Name</th><th>Description</th><th>Associated Skills</th><th>Sentiment Score</th></tr></thead>
<tbody>
  <tr><td>McGill Hacks</td><td><a href="experience_list/description_mcgill.php" target="_blank">...</a></td><td><a href="#">Creativity</a> | <a href="#">Programming(jQuery)</a> | <a href="#">Programming(PHP)</a></td><td><a href="#">neutral (+0.098)</a></td></tr>

  <tr><td>Queen's Inter-Collegiate Business Competition</td><td><a href="experience_list/description_queens.php" target="_blank">...</a></td><td><a href="#">Leadership</a> | <a href="#">Critical Thinking</a> | <a href="#">Creativity</a></td><td><a href="#">positive (+0.529)</a></td></tr>

  <tr><td>CIBC Business Analyst Co-op</td><td><a href="experience_list/description_cibc.php" target="_blank">...</a></td><td><a href="#">Leadership</a> | <a href="#">Writing</a> | <a href="#">Creativity</a></td><td><a href="#">positive (+0.625)</a></td></tr>

  <tr><td>Pan-am Event Volunteer</td><td><a href="experience_list/description_panam.php" target="_blank">...</a></td><td><a href="#">Ethical Conduct</a> | <a href="#">Writing</a> </td><td><a href="#">negative (-0.492)</a></td></tr>
  </tbody>
</table>



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

</body>

</html>
