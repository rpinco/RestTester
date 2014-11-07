<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/masterjs.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ajustes.css" rel="stylesheet">
    


<form id="elform" method="POST" action="get_test.php" enctype="multipart/form-data" class="form-horizontal"> 
                    
<div class="input-group input-group-sm baseurl">
<span class="input-group-addon labelimput">Base URL</span>
<input type="text" class="form-control" id="URL" placeholder="url base" name="URL" value="http://172.16.11.152/customerRest/web/customer/add/" />

<div class="input-group-btn">
 <select class="dropdown-toggle btn btn-primary " name="tipoTransaccion" id="tipoTransaccion">
        <option value="POST" name="post">POST</option>
 </select>
</div>
</div>


		<div class="col-md-3 column divadjust">
        


<div class="input-group input-group-sm has-error imputadjust">
<span class="input-group-addon">Authkey</span>
<input class="form-control has-error" type="text" id="authkey" placeholder="authkey" name="authkey" value="somerandomauthkey">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">CustomerCRMId</span>
<input class="form-control" type="text" id="customerCRMId" placeholder="customerCRMId" name="customerCRMId">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">name</span>
<input class="form-control" type="text" id="name" placeholder="name" name="name" value="prueba00000">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">Password</span>
<input class="form-control" type="text" id="password" placeholder="password" name="password" value="admin1234">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">CompanyId</span>
<input class="form-control" id="companyId" placeholder="companyId" name="companyId" value="572190">
</div>

<div class="input-group input-group-sm imputadjust has-error">
<span class="input-group-addon ">ClientType</span>
<input class="form-control" type="text" id="clientType" placeholder="clientType" name="clientType" value="1">
</div>

<div class="input-group input-group-sm imputadjust">
<span class="input-group-addon ">Username</span>
<input class="form-control" type="text" id="username" placeholder="username" name="username">
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


        
        
		<div class="col-md-3 column">
        
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

    <input type="button" class="btn btn-success botonEnviar" id="Enviar" value="Enviar" onclick="if(validate()){mostrarResultado()}"/>
		</div>
        
        
        
				<div class="col-md-6 column">
         <h3> RESPUESTA </h3>
        		<div id="resultado" class="bs-callout bs-callout-warning">
        			1. Colocar la url base<br>
        			2. Elegir el metodo<br>
        			3. Completar todos los campos<br>
        			4. Enviar<br>

        		</div>
        
        

        </div>

   
  
</form>