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
	


.imputadjust {
	padding-left:0px;
	margin-top:20px;
}

.contenedor {
	width:60%;
	padding: 20px 20px 20px 20px;
	margin:auto;
}

.baseurl {
    margin-top: 30px;
	max-width: 66%;
}
.labelsize {
	width:70px;
}
.botonEnviar {
	margin-top:50px;
	margin-left:20%;
	width:34%;
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
                

					<div class="tab-pane active" id="panel-000001">
                    

<form id="elform" method="POST" action="get_test.php" enctype="multipart/form-data" class="form-horizontal"> 
                    
<div class="input-group input-group-sm baseurl">
<span class="input-group-addon labelimput">Base URL</span>
<input type="text" class="form-control" id="URL" placeholder="url base" name="URL"/>

<div class="input-group-btn">
 <select class="dropdown-toggle btn btn-primary " name="tipoTransaccion">
        <option value="POST" name="post">POST</option>
        <option value="put" name="put">PUT</option>
        <option value="GET" name ="get">GET</option>
 </select>
</div>
</div>
<!-- ------------------------------------ BASE URL FIN ------------------------------------- --> 

		<div class="col-md-4 column imputadjust">
        


<div class="input-group input-group-sm has-error">
<span class="input-group-addon">Authkey</span>
<input class="form-control has-error" type="text" id="authkey" placeholder="authkey" name="authkey" value="authkey">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">CustomerCRMId</span>
<input class="form-control" type="text" id="customerCRMId" placeholder="customerCRMId" name="customerCRMId">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">name</span>
<input class="form-control" type="text" id="name" placeholder="name" name="name">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">Password</span>
<input class="form-control" type="text" id="password" placeholder="password" name="password">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">CompanyId</span>
<input class="form-control" id="companyId" placeholder="companyId" name="companyId">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">ClientType</span>
<input class="form-control" type="text" id="clientType" placeholder="clientType" name="clientType">
</div>

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">Username</span>
<input class="form-control" type="text" id="customerId" placeholder="customerId" name="customerId">
</div>

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">Disabled</span>
<input class="form-control" type="text" id="disabled" placeholder="disabled" name="disabled">
</div>


<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">Email</span>
<input class="form-control" type="text" id="email" placeholder="email" name="email">
</div>

</div>


        
        
		<div class="col-md-4 column">
        
<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">SalieId</span>
<input class="form-control" id="saleId" placeholder="saleId" name="saleId">
</div>

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">SponsorId</span>
<input class="form-control" id="sponsorId" placeholder="sponsorId" name="sponsorId">
</div> 

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">ExpirationDate</span>
<input class="form-control" id="expirationDate" placeholder="expirationDate" name="expirationDate">
</div>  

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">BillingCycleId</span>
<input class="form-control" id="billingCycleId" placeholder="billingCycleId" name="billingCycleId">
</div>  

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">Hidden</span>
<input class="form-control" id="hidden" placeholder="hidden" name="hidden">
</div>  

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">LastBillingDate</span>
<input class="form-control" id="lastBillingDate" placeholder="lastBillingDate" name="lastBillingDate">
</div>  

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">ChangePassword</span>
<input class="form-control" id="changePassword" placeholder="changePassword" name="changePassword">
</div>  

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">Lastlogin</span>
<input class="form-control" type="text" id="lastlogin" placeholder="lastlogin" name="lastlogin">
</div>  

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">Phone</span>
<input class="form-control" type="text" id="phone" placeholder="phone" name="phone">
</div>     
    
		</div>
        
        
        
		<div class="col-md-4 column">
        
        <div id="resultado" class="well text-success" style="width: 90%; height:400px; margin: 8% 0px 0px 4%; background-color:white;">MENSAJE DE ERROR PIOLA</div>
        
         
        </div>

   <input type="button" class="btn btn-success botonEnviar" id="Enviar" value="Enviar" onclick="if(validate()){mostrarResultado()}"/>
  
</form>
</div>
              
                    
                    

                 
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




<script type="text/javascript">
 
function validate(){
    
     var customerCRMId = $('#customerCRMId').val();
     var authkey = $('#authkey').val();
     var username = $('#username').val();
     var password = $('#password').val();
     var companyId = $('#companyId').val();
     var clientType = $('#clientType').val();
    
    if(customerCRMId == "" || authkey == ""  || companyId == ""){
	   $('#resultado').html("Falta completar campos requeridos");
 	  return false;
	}

	return true;
}
 
 function mostrarResultado(){
  
  var customerCRMId, authkey, name, password, username, companyId, clientType, customerId,  disabled ,  email, saleId ,  sponsorId ,  billingCycleId,  hidden, lastlogin,  phone = "";

  var customerCRMId = $('#customerCRMId').val();
  var authkey = $('#authkey').val();
  var name = $('#name').val();
  var password = $('#password').val();
  var username = $('#username').val();
  var companyId = $('#companyId').val();
  var clientType = $('#clientType').val();
  var customerId = $('#customerId').val();
  var disabled = $('#disabled').val();
  var email = $('#email').val();
  var saleId = $('#saleId').val();
  var sponsorId = $('#sponsorId').val();
  var expiratiionDate = $('#expiratiionDate').val();
  var billingCycleId = $('#billingCycleId').val();
  var hidden = $('#hidden').val();
  var lastBillingDate = $('#lastBillingDate').val();
  var changePassword = $('#changePassword').val();
  var lastlogin = $('#lastlogin').val();
  var phone = $('#phone').val();
     

   $.ajax({
        url: "get_test.php",
	type: "POST",
        data: {
		    name: name,
 	        customerCRMId: customerCRMId,
 		    authkey: authkey,
	        password: password,
	        companyId: companyId,
	        clientType: clientType,
	        username: username
	        
        },
	success: function(data){
		$('#resultado').html(data);
	}
        });
        
}
</script>





</body>
</html>
