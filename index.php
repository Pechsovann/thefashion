<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Fashion</title>
    

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="asset/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
    <body>
        <!-- Start nav bar -->
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
            <a class="navbar-brand" rel="home" href="home.php"><img style=" margin-left:30px;width:80px;height:45px;margin-top:-12px;" class="logostyle" src="asset/image/slide/fashion.png"></a>
            
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
        <!-- End nav bar -->

        <!-- Images from local folder for slide we set in array -->
        <?php  
            $images = ['thefashion_slide1.jpg','thefashion_slide2.png','thefashion_slide3.jpg',
                    'thefashion_slide4.jpg','thefashion_slide5.jpg','thefashion_slide6.jpg','thefashion_slide7.jpg',]
        ?>


        <!-- Start slide body -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <?php 
                    $i = 0;
                    foreach($images as $img): 
                        if($i == 0){
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'" class="active"></li>';
                        }else{
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>';
                        }
                        $i++;
                    endforeach;
                ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <?php $i = 0;
            foreach($images as $img):
                if($i==0){
                    echo '
                        <div class="item active">
                            <img src="/asset/image/slide/'.$img.'" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                    ';
                }else{
                    echo '
                        <div class="item">
                            <img src="/asset/image/slide/'.$img.'" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                    ';
                }
                $i++;
            endforeach;
            ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <!-- End slide body -->
    
    </body>
</html>