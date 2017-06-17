
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->
    <title>Ristorante Con Fusion</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
   
        
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" height=30 width=41></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><span class = "glyphicon glyphicon-home" aria-hidden = "true"></span> Home</a></li>
                    <li><a href="aboutus.php"><span class = "glyphicon glyphicon-info-sign" aria-hidden = "true"></span> About</a></li>
                    <li class = "dropdown">
                        <a href="#" class = "dropdown-toggle" data-toggle = "dropdown" 
                        role = "button" aria-haspopup = "true" aria-expanded = "false">
                        <span class = "glyphicon glyphicon-list-alt" aria-hidden = "true"></span> Menu<span class = "caret"></span>
                        </a>
                        <ul class = "dropdown-menu">
                        <li><a href = "#">Appetizers</a></li>
                        <li><a href = "#">Deserts</a></li>
                        <li><a href = "#">Drinks</a></li>
                        <li role = "seperator" class = "divider"></li>
                        <li class = "dropdown-header">Specials</li>
                        <li><a href = "#">Lunch Buffet</a></li>
                        <li><a href = "#">Weekend Brunch</a></li>
                        </ul>
                        
                    </li>
                    <li><a href="contactus.php"><i class="fa fa-envelope-o"></i> Contact</a></li>
                      
                </ul>
                <ul class = "nav navbar-nav navbar-right">
                        <li><a id="mylogin">
                        <span class="glyphicon glyphicon-log-in"></span>
                        Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>  
    
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" id = "myclose">&times;</button>
                    <h4 class="modal-title">Login </h4>
                </div>
                <div class="modal-body">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control input-sm" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" > Remember me</label>
                        </div>
                            <button type="submit" class="btn btn-info btn-sm">Sign in</button>
                        
                            <button type="submit" class="btn btn-default btn-sm" id="myclose">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <header class="jumbotron">
        <!-- Main component for a primary marketing message or call to action -->

        <div class="container">
            <div class="row row-header">
                <div class="col-xs-12 col-sm-8">
                    <h1>Ristorante con Fusion</h1>
                    <p style="padding:40px;"></p>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:20px;"></p>
                    <img src="img/logo.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:40px;"></p>
                    <a type = "button" class="btn btn-warning btn-lg" id="myreserve">  Reserve Table  </a>
                </div>
            </div>
        </div>
    </header>
    
    <div id="reserveModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" id = "myclosereserve">&times;</button>
                    <h4 class="modal-title">Reserve </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Number of Guests</label>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4"> 4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5"> 5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6"> 6
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section" class="col-sm-2 control-label">Section</label>
                        <div class="col-sm-10 col-xs-12 btn-group" data-toggle="buttons">
                            <label class="btn btn-success active">
                            <input type="radio" checked>Non Smoking
                            </label>
                            <label class="btn btn-danger">
                                <input type="radio">Smoking
                            </label>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="date" class="col-sm-2 control-label">Date and Time</label>
                        <div class="has-feedback col-sm-3">
                            <input type="text" class="form-control" id="date" placeholder="Date">
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                        </div>
                        <div  class="col-sm-1">
                            <p></p>
                        </div>
                        <div class="has-feedback col-sm-3">
                            <input type="text" class="form-control" id="date" placeholder="Time">
                            <span class="glyphicon glyphicon-time form-control-feedback"></span>
                        </div>
                    </div>
                    <button class="col-sm-offset-2 btn btn-primary" type="submit" >Reserve</button>
                        
                    <button class="btn btn-primary" type="submit" id = "myclosereserve" >Cancel</button>
                    <div class="alert alert-warning alert-dismissible" style="margin:10px;" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <strong>Warning: </strong> Please <a class="alert-link" href="tel:+">call</a> us to reserve for more than six guests.
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class = "container">
        <div class = "row row-content">
            <div class="col-xs-12">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>    
                
                    <!-- Wrapper for Slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="img/uthappizza.png" alt="Uthapizza">
                            <div class="carousel-caption">
                                <h2>Uthappizza <span class="label label">Hot</span>
                                    <span class="badge">$4.99</span></h2>
                                <p>A Unique combination of Indian Uthapam(pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/buffet.png" alt="buffet">
                            <div class="carousel-caption">
                                    <h2>Weekend Grand Buffet <span class = "label label-danger label-xs">NEW</span></h2>
                                    <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                                    <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                            </div>
</div>
                        <div class="item">
                        <img class="img-responsive" src="img/alberto.png" alt="Alberto">
                        <div class="carousel-caption">
                            <h2>Alberto Somayya</h2>
                            <h4>Executive Chef</h4>
                            <p>Award winning three-star Michelin chef with wide
                             International experience having worked closely with
                             whos-who in the culinary world, he specializes in
                              creating mouthwatering Indo-Italian fusion experiences.
                             </p>
                            <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                        </div>
                    </div>
                    </div>
                    
                    <!-- Controls -->
                    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class ="btn-group" id="carouselButtons">
                        <button class="btn btn-danger btn-xs" id="carousel-pause">
                            <span class= "glyphicon glyphicon-pause" aria-hidden="true"></</span>
                        </button>
                        <button class="btn btn-danger btn-xs" id="carousel-play">
                            <span class= "glyphicon glyphicon-play" aria-hidden="true"></</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class = "row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/uthappizza.png" alt="Uthappizza">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Uthappizza <span class = "label label-danger label-xs">HOT</span>
                            <span class = "badge">$4.99</span></h2>
                        <p>A unique combination of Indian Uthappam (pancake) and
                          Italian pizza, topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>This Month's Promotions</h3>
            </div>
            <div class = "col-xs-12 col-sm-9">
                <div class="media">
                    
                    <div class="media-body">
                        
                        <h2 class="media-heading">Weekend Grand Buffet <span class = "label label-danger label-xs">NEW</span></h2>
                        <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                    <div class="media-right media-middle">
                        <a href="#">
                            <img class="media-object img-thumbnail" src="img/buffet.png" alt="buffet">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class = "col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center>Meet our Culinary Specialists</h3>
            </div>
            <div class = "col-xs-12 col-sm-9 col-sm-pull-3">
               <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/alberto.png" alt="Alberto Somayya">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Alberto Somayya</h2>
                        <h4>Executive Chef</h4>
                        <p>Award winning three-star Michelin chef with wide
                         International experience having worked closely with
                         whos-who in the culinary world, he specializes in
                          creating mouthwatering Indo-Italian fusion experiences.
                         </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
            
                    
        </div>
    </div>    
    
    <footer class = "row-footer">
        <div class="container">
            <div class="row">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                    <h5>Links</h5>
                    <ul class = "list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="aboutus.php">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
                        <i class = "fa fa-phone"></i> +852 1234 5678<br>
                        <i class = "fa fa-fax"></i> +852 8765 4321<br>
                        <i class = "fa fa-envelope"></i> <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align=center>© Copyright 2015 Ristorante Con Fusion</p>
                </div>
            </div>
        </div>
    </footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
            $(document).ready(function(){
                $("#mylogin").click(function(){
                    $("#loginModal").modal();
                });
                $("#myclose").click(function(){
                    $("#loginModal").modal('hide');
                });
                $("#myreserve").click(function(){
                    $("#reserveModal").modal();
                });
                $("#myclosereserve").click(function(){
                    $("#reserveModal").modal('hide');
                });
                $("#mycarousel").carousel({interval:2000});
                
                $("#carousel-pause").click(function(){
                    $("#mycarousel").carousel('pause');
                });
                
                $("#carousel-play").click(function(){
                    $("#mycarousel").carousel('cycle');
                });
            });
        </script>
</body>

</html>