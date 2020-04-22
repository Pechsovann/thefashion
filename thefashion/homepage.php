<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
    <body>
        <!-- menu -->
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" rel="home" href="home.php"><img style=" margin-left:30px;width:80px;height:45px;margin-top:-12px;" class="logostyle" src="image/slide/fashion.png"></a>
            
            <a class="navbar-brand" rel="home" href="allcart.php">
                <span class="glyphicon glyphicon-shopping-cart" style=" color:white;"></span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li class="dropdown">
                <li><a href="#">Accessories</a></li>
                <li><form action="search.php" class="navbar-form" role="search">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" required="" class="form-control" placeholder="Search" name="mysearch">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-info ">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                        </div>
                    </div>
                </form></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><p class="navbar-text" style="color:white; padding-left:12px;">Already have an account?</p></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			    <ul id="login-dp" class="dropdown-menu" show" style="width: 252px;height: 292px;border-right-width: 0px;border-left-width: 0px;padding-left: 10px;padding-right: 10px;">
				    <li>
					     <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
                                <a href="fb/fbconfig.php?u=dGhlZmFzaGlvbi5hc2lhL2luZGV4LnBocA==" class="btn btn-fb center-block"><i class="fa fa-facebook"></i> Facebook</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
					    </div>
				    </li>
			    </ul>
            </ul>          
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- Slide -->
        <div class="container" style="margin-top:58px;margin-bottom:8px;">
            <div class="row">
            <!-- Carousel -->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">    
            <!-- Indicators -->
             <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="6" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="7" class=""></li>
            </ol>
            <!-- image slide -->
        <div class="carousel-inner">
            <div class="item" style="max-height:460px;">
	        
                <a href="https://www.facebook.com/cambodiathefashion/" target="_blank">
			    <img src="image/slide/thefashion_slide1.jpg" alt="First slide"></a>
            </div>
            <div class="item" style="max-height:460px;">
                <a href="https://www.wingmoney.com/en/" target="_blank">
                <img src="image/slide/thefashion_slide2.jpg" alt="Second slide"></a>
            </div>
            <div class="item" style="max-height:460px;">
                <a href="http://ibuythefashion.com/women.php" target="_blank">
			    <img src="image/slide/thefashion_slide3.jpg" alt="Third slide"></a>
            </div>
	        <div class="item active" style="max-height:460px;">
                <a href="http://ibuythefashion.com/men.php" target="_blank">
			    <img src="image/slide/thefashion_slide4" alt="4th slide"></a>
            </div>
	        <div class="item" style="max-height:460px;">
                <a href="http://ibuythefashion.com/accessories.php" target="_blank">
			    <img src="image/slide/thefashion_slide5.jpg" alt="5th slide"></a>
            </div>
	        <div class="item" style="max-height:460px;">
                <a href="http://www.pipay.com/" target="_blank">
			    <img src="image/slide/thefashion_slide6.jpg" alt="6th slide"></a>
            </div>
	        <div class="item" style="max-height:460px;">
                <a href="https://www.paygo24.com/" target="_blank">
			    <img src="image/slide/thefashion_slide7.jpg" alt="7th slide"></a>
            </div>
            
               
        </div>
    </body>
</html>