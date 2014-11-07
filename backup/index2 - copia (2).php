<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PI.gu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
	
body {
    background-image: url("images/bg.png");
    background-repeat: repeat;
}

.imputadjust {
	padding-left:0px;
	margin-top:20px;
}

.contenedor {
	width:100%;
	padding: 20px 20px 20px 20px;
}

.baseurl {
    margin-top: 30px;
	max-width: 66%;
}
    </style>
	
    

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>


<div class="contenedor">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="tabbable" id="tabs-589929">
			  <ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-000001" data-toggle="tab">addCustomer</a>
					</li>
					<li>
						<a href="#panel-000002" data-toggle="tab">deleteCustomer</a>
					</li>
					<li>
						<a href="#panel-000003" data-toggle="tab">disableCustomer</a>
					</li>
					<li>
						<a href="#panel-000004" data-toggle="tab">enableCusotmer</a>
					</li>
					<li>
						<a href="#panel-000005" data-toggle="tab">getCustomer</a>
					</li>
					<li>
						<a href="#panel-000006" data-toggle="tab">getCustomerBy</a>
					</li>
					<li>
						<a href="#panel-000007" data-toggle="tab">modifyCustomer</a>
					</li>
			  </ul>
                
                
                
				<div class="tab-content">
                
<!-------------------------------------- PANEL 1 --------------------------------------->                 
					<div class="tab-pane active" id="panel-000001">
                    
<!-------------------------------------- BASE URL --------------------------------------->                     
<div class="input-group input-group-sm baseurl">
<span class="input-group-addon labelimput">Base URL</span>
<input type="text" class="form-control" placeholder="Username">
<div class="input-group-btn">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
Metodo
<span class="caret"></span>
</button>
<ul class="dropdown-menu pull-right">
<li><a href="#">POST</a></li>
<li><a href="#">PUT</a></li>
<li><a href="#">GET</a></li>
</ul>
</div>
</div>
<!-------------------------------------- BASE URL FIN ---------------------------------------> 

		<div class="col-md-4 column imputadjust">
        
      
<div class="input-group input-group-sm">
<span class="input-group-addon">authkey</span>
<input class="form-control" type="text" id="authkey" placeholder="authkey" name="authkey" value="authkey">
</div>







        
		</div>
        
        
        
		<div class="col-md-4 column">A
		</div>
        
        
        
		<div class="col-md-4 column">A
		</div>




					</div>
                    
<!-------------------------------------- PANEL 1 FIN --------------------------------------->    
                 
					<div class="tab-pane" id="panel-000002">
						<p>
							Howdy, I'm in Section 2.
						</p>
					</div>
                    
                    
					<div class="tab-pane" id="panel-000003">
						<p>
							Howdy, I'm in Section 3.
						</p>
					</div>
                    
                    
					<div class="tab-pane" id="panel-000004">
						<p>
							Howdy, I'm in Section 4.
						</p>
					</div>
                    
                    
					<div class="tab-pane" id="panel-000005">
						<p>
							Howdy, I'm in Section 5.
						</p>
					</div>
                    
                    
					<div class="tab-pane" id="panel-000006">
						<p>
							Howdy, I'm in Section 6.
						</p>
					</div>
                    
                    
					<div class="tab-pane" id="panel-000007">
						<p>
							Howdy, I'm in Section 7.
						</p>
					</div>
                    
                    
				</div>
			</div>
		</div>
	</div>
</div>









</body>
</html>