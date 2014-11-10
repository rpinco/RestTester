function validate(){
    
     var authkey = $('#authkey').val();
     var customerCRMId = $('#customerCRMId').val();
     var name = $('#name').val();
     var password = $('#password').val();
     var companyId = $('#companyId').val();
     var clientType = $('#clientType').val();
    
    if(authkey == "" || customerCRMId == ""  || name == "" || password == "" || companyId == "" || clientType == ""){
	   $('#resultado').html("Falta completar alguno de estos campos requeridos authkey, customerCRMId, name, password, companyId, clientType.");
 	  return false;
	}

	return true;
}
 
 function mostrarResultado(){
  
  var customerCRMId, authkey, name, password, username, companyId, clientType, customerId,  disabled ,  email, saleId ,  sponsorId ,expirationDate,  billingCycleId,  hidden, lastlogin,  phone = "";

  var url = $('#URL').val();
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
  var expirationDate = $('#expirationDate').val();
  var billingCycleId = $('#billingCycleId').val();
  var hidden = $('#hidden').val();
  var lastBillingDate = $('#lastBillingDate').val();
  var changePassword = $('#changePassword').val();
  var lastlogin = $('#lastlogin').val();
  var phone = $('#phone').val();
  var tipoTransaccion = $('#tipoTransaccion').val();
     

   $.ajax({
        url: "get_test.php",
	type: "POST",
        data: {
            url: url,
		    name: name,
 	        customerCRMId: customerCRMId,
 		    authkey: authkey,
	        password: password,
	        companyId: companyId,
	        clientType: clientType,
	        username: username,
	        customerId: customerId,
	        disabled: disabled,
	        email: email,
	        saleId: saleId,
	        sponsorId: sponsorId,
	        expirationDate: expirationDate,
	        billingCycleId: billingCycleId,
	        hidden: hidden,
	        lastBillingDate: lastBillingDate,
	        changePassword: changePassword,
	        lastlogin: lastlogin,
	        phone: phone,
            tipoTransaccion: tipoTransaccion
	        
        },
	success: function(data){
		$('#resultado').html(data);
	}
        });
        
}


 function mostrarResultadoGET(){
  
  var customerCRMId, authkey, name, password, username, companyId, clientType, customerId,  disabled ,  email, saleId ,  sponsorId ,expirationDate,  billingCycleId,  hidden, lastlogin,  phone = "";

  var url = $('#URL').val();
  var authkey = $('#authkey').val();
  var companyId = $('#companyId').val();
  var customerId = $('#customerId').val();
  var tipoTransaccion = $('#tipoTransaccion').val();
     
  url = url + authkey + "/"+ companyId + "/" + customerId;   

   $.ajax({
        url: "get_test.php",
	type: "POST",
        data: {
            url: url,
	    tipoTransaccion: tipoTransaccion
        },
	success: function(data){
		$('#resultado').html(data);
	}
        });

}
