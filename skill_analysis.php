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
                        <a href="#">Points: 15</a>
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
                    <a href="#" class="list-group-item active">Skill Analysis</a>
                    <a href="experience_list.php" class="list-group-item">Experience List</a>
                    <a href="add_experience.php" class="list-group-item">Add an Experience</a>
                    <a href="achievements.php" class="list-group-item">Achievements</a>
                </div>
            </div>

            <div class="col-md-9">

                <h1>Your Skill Profile</h1><span><h4>Discover what skills you've mastered.</h4></span>

                <div class="thumbnail">
<canvas id="myChart"></canvas>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ['Creativity', 'Leadership', 'Critical Thinking', 'Writing', 'Ethical Conduct', 'Programming(jQuery)', 'Programming(PHP)'],
                datasets: [{
                  label: 'how much you use a skill',
                  data: [4, 3, 2, 3, 2, 3, 2],
                  backgroundColor: "rgba(153,255,51,0.4)"
                }, {
                  type: 'line',
                  label: 'How much you like acitivities involving a specific skill',
                  data: [2, 5, 3, 1, 1, 3, 4],
                  backgroundColor: "rgba(255,153,0,0.4)"
                }]
              }
            });
        </script>
                </div>

               

                <div class="well" >

 <h2>Analysis</h2>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <p><strong>Hi Sakeeb. Here are some observations about your skills and preferences:</strong></p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12" style="color: red !important;">
                            <p>You don't enjoy activities involving <strong>Creativity</strong> but do have a lot of experience. Try avoiding <strong>Creativity</strong> roles.</p>
                        </div>
                    </div>

                    <br />    

                    <div class="row">
                        <div class="col-md-12" style="color: green !important;">
                            <p>You enjoy <strong>Leadership</strong> but do not have much experience. Try finding more <strong>Leadership</strong> roles.</p>
                        </div>
                    </div>

                    <hr>


                    <div class="row">
                        <div class="col-md-12">
                            <p style="color: green !important;">You enjoy <strong>Critical Thinking Roles</strong> but do not have much experience. Try finding more <strong>Critical Thinking</strong> roles.</p>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-md-12" style="color: red !important;">
                            <p>You don't enjoy activities involving <strong>Writing</strong> but do have a lot of experience. Try avoiding <strong>Writing</strong> roles.</p>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-md-12" style="color: red !important;">
                            <p>You don't enjoy activities involving <strong>Ethical Content</strong> but do have a lot of experience. Try avoiding <strong>Ethical Content</strong> roles.</p>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-md-12" style="color: blue !important;">
                            <p>You are neutral towards <strong>Programming(jQuery)</strong> but have moderate experience. Try exploring <strong>Programming(jQuery)</strong> roles to see if you like it.</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <p style="color: green !important;">You enjoy <strong>Programming(PHP)</strong> but do not have much experience. Try finding more <strong>Programming(PHP)</strong> roles.</p>
                        </div>
                    </div>

                </div>

                 <div class="well" style="background-color: white !important;">

 <h1>Recommended Events</h1>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <p><strong>We noticed your strong interest in <strong>Creativity</strong> and <strong>Programming(PHP). Checkout the following events:</strong></p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>IBM - Product Manager</h3>
                            <p>IBM has taken product management to the next level. Our Offering Managers define, develop and deliver differentiated offerings that focus on winning in markets and delivering iconic user experiences. </p>
                            <button class="btn btn-success">RSVP</button>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-md-12 ">
                            <h3>ICSOB 2017 - International Conference on Software Business</h3>
                            <p>Public and private organizations are entering in the digital world where real time data is available about their operations, their operating environments, third-party services offered to increase their performance as well as chances in the demands of their customers. </p>
                            <button class="btn btn-success">RSVP</button>
                        </div>
                    </div>
                </div>

            </div>



        </div>



    </div>
    <!-- /.container -->

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
