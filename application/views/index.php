<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Sidebar</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url("assets/css/styles.css"); ?>" rel="stylesheet">
	</head>
	<body>

<header class="navbar navbar-inverse" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">BeatMusic</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#">Tienda</a>
        </li>
        <li>
          <a href="#">Escuchar</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<!-- Begin Body -->
<div class="container">
	<div class="row">

    <div class="col-md-9" id="leftCol">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="<?php echo base_url("assets/imgs/12951008.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951009.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951011.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951012.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951013.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951014.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951015.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>


                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                
              
              
                <h2 id="sec1">Content</h2>
                <p>
                Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut.
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-heading"><h3>Hello.</h3></div>
                      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                      Aliquam in felis sit amet augue.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="panel panel-default">
                      <div class="panel-heading"><h3>Hello.</h3></div>
                      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                      Aliquam in felis sit amet augue.
                      </div>
                    </div>
                  </div>  
                </div>
              
                <hr>
              
                <h2 id="sec2">Section 2</h2>
                <p>
                Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut!
                </p>
                <div class="row">
                  <div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
                    <div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
                    <div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
                </div>
              
                <hr>
              
                <h2 id="sec3">Section 3</h2>
            Images are responsive sed @mdo but sum are more fun peratis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut..
                <br>
                Fos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut..
              
              
                <h2 id="sec4">Section 4</h2>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              
              
                <hr>
              <h4><a href="http://bootply.com/100993">Edit on Bootply</a></h4>
                <hr>    
                
        </div> 

        <div class="col-md-3">        
            <div class="well"> 
              TOP 10
                  <ul class="nav nav-stacked" id="sidebar">
                    <li><a href="#sec1">Section 1</a></li>
                    <li><a href="#sec2">Section 2</a></li>
                    <li><a href="#sec3">Section 3</a></li>
                    <li><a href="#sec4">Section 4</a></li>
                  </ul>
            </div>

        </div> 
    </div> 
      		
</div>



	<!-- script references -->
		<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/scripts.js"); ?>"></script>
	</body>
</html>