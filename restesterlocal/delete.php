<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Master Race Team</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	



	
    

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
  	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/ajustes.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/masterjs.js"></script>
	<link rel="stylesheet" href="css/bootstrapValidator.css"/>
	<script type="text/javascript" src="js/bootstrapValidator.js"></script>



</head>

<body>


<nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0;">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  		<div class="navbar-header">

    <a class="navbar-brand" href="#">[MRaceT]</a>
  			</div>

 	 <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-bootsnipp-collapse">
    <ul class="nav navbar-nav">

     <li class=""><a href="index.php" ><span class="glyphicon glyphicon-plus"></span> Add</a></li>
     <li class="active"><a href="delete.php"><span class="glyphicon glyphicon-remove"></span> Delete</a></li>
     <li class=""><a href="modify.php"><span class="glyphicon glyphicon-pencil"></span> Modify</a></li>
     <li class=""><a href="get.php"><span class="glyphicon glyphicon-share-alt"></span> get</a></li>
     <li class=""><a href="getby.php"><span class="glyphicon glyphicon-share"></span> getBy</a></li>
     <li class=""><a href="disable.php"><span class="glyphicon glyphicon-eye-close"></span> Disable</a></li>
     <li class=""><a href="enable.php"><span class="glyphicon glyphicon-eye-open"></span> Enable</a></li>
     <li class=""><a href="info.php"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
    
    </ul>




  </div><!-- /.navbar-collapse -->
  </div>

  </nav>

<div class="container-fluid">


    <div class="col-md-3 column">

    		
                      <div class="page-header">
                <h2 class="Titulo">Delete Customer</h2>





            		</div>

            			<p>Required Fields <i class="glyphicon glyphicon-exclamation-sign requerido"></i></p>
                  <p>Optative Fields <i class="glyphicon glyphicon-leaf norequerido"></i>


           					 <div class="from-horizontal">

            	         	<legend>URL BASE</legend>

            <form id="elform" method="POST" action="get_test.php" enctype="multipart/form-data" class="form-horizontal"> 

               		
              <div class="input-group input-group-sm baseurl">
              <input type="text" class="form-control" id="URL" placeholder="url base" name="URL" value="http://172.16.11.152/customerRest/web/customer/delete/" />
              <div class="input-group-btn">
              <input class="btn btn-primary metodo" value="delete" name="tipoTransaccion" id="tipoTransaccion" disabled>


              </div>
              </div>




            </div>


                <fieldset>

                    <legend><br>Valores</legend>
                    




          <div class="form-group">
          <label class="col-lg-4 control-label ajustetexto">Authkey</label>
          <div class="input-group">
          <span class="input-group-addon requerido"><i class="glyphicon glyphicon-exclamation-sign "></i></span>
          <input type="text" class="form-control" type="text" id="authkey" placeholder="authkey" name="authkey" value="somerandomauthkey">
          </div></div>


          <div class="form-group">
          <label class="col-lg-4 control-label ajustetexto">CompanyId</label>
          <div class="input-group">
          <span class="input-group-addon requerido"><i class="glyphicon glyphicon-exclamation-sign "></i></span>
          <input class="form-control" type="text" id="companyId" placeholder="companyId" name="companyId" value="572190">
          </div></div>

          <div class="form-group">
          <label class="col-lg-4 control-label ajustetexto">customerId</label>
          <div class="input-group">
          <span class="input-group-addon requerido"><i class="glyphicon glyphicon-exclamation-sign "></i></span>
          <input class="form-control" type="text" id="customerId" placeholder="customerId" name="customerId">
          </div>
          </div>


	







 </fieldset>

 </div>



    <div class="col-md-9 column respuesta"> 

    	 <h3> RESPUESTA </h3>
        		<div id="resultado" class="bs-callout bs-callout-warning">
        			1. Colocar la url base<br>
        			2. Elegir el metodo<br>
        			3. Completar todos los campos<br>
        			4. Enviar<br>

    </div>

    </div>


  </div>


 			<div class="abajo">
      <input type="btnSubmit" class="btn btn-info btn-lg btn-block" id="Enviar" value="Enviar" onclick="if(validate()){mostrarResultado()}"/>
      
 				

 			</div>
 					
 		</form>



</body>
</html>
