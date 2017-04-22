<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photos - Rabbi Chuck</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <style>
    div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
	}

	div.img:hover {
    border: 1px solid #777;
	}

	div.img img {
    width: 100%;
    height: auto;
	}

	div.desc {
    padding: 15px;
    text-align: center;
	}
	</style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Rabbi Chuck Diamond</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Rabbi Chuck</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                    	<a href="photos.php">Photos</a>
                    </li>
                    <li>
                    	<a href="calendar.php">Calendar</a>
                    </li>
                    <li>
                    	<a href="donate.php">Donate</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="container">

        <div class="row">
            <div class="box">
            	<div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Photo Album</strong>
                    </h2>
                    <hr>
                </div>
            	<a data-flickr-embed="true"  href="https://www.flickr.com/gp/doublediamondz/9Lo02w" title="RabbiChuck.com">
            		<img class="img-big img-responsive img-center img-border" src="https://c1.staticflickr.com/4/3792/33066758301_b3a5b0445b_c.jpg" alt="RabbiChuck.com">
            	</a>
            	<div class="col-lg-12">
                    <hr>
                    <h5 class="intro-text text-center">
						Click the photo to be taken to Rabbi Chuck's Flickr album
                    </h5>
                    <hr>
                </div>
            </div>
        </div>c      	
</div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; RabbiChuck.com 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    <!-- Flickr -->
    <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>

</body>

</html>