<!--default layout-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dynamix Feature Matrix::Home</title>
	    <!-- Bootstrap -->
	    {{ HTML::style('bootstrap-3.2.0-dist/css/bootstrap.min.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">

caption {
  background: #CCFF00;
  font-weight: bold;
  font-size: 3.3em;
}
	.list-group{
		width: 200px;
	}
    .bs-example{
    	margin: 20px;
    	
    }
    
    </style>
    

</head>
	<body style = "padding-top: 120px; background-color: #CCFF00;
	color: #990066;
	

</style>">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				  <div class="wide">
		     {{HTML::image('images/DynamiX-logo.png')}}
	      </div> 	
      <!-- Static navbar -->
        <div class="container-fluid">
       	
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            
              <li class="active">  <a href="#"> <span class="glyphicon glyphicon-home"> Home</span></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
					<li><a href="#">Forms</a></li>
					<li><a href="#">Widgets</a></li>
					<li><a href="#">Others</a></li>
                </ul>
              <li><a href="#">Add Site</a></li>
            </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="">
        </div>
      <button type="button">Search
 		 <span class="glyphicon glyphicon-search"></span>
 	  </button> 
      </form>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
      <div class='container-fluid'>
	@yield('content')
	  </div>	
	    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
	{{ HTML::script('bootstrap-3.2.0-dist/js/bootstrap.min.js') }}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{ HTML::script('bootstrap-3.2.0-dist/js/ie10-viewport-bug-workaround.js')}}
 	</body>
</html>