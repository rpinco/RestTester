<?php
//var_dump($_REQUEST);die;
//enviar datos por post
$service_url = $_REQUEST['url'];
//var_dump($service_url);die;

$authkey = (isset($_REQUEST['authkey']))?$_REQUEST['authkey']:null;
$customerCRMId = (isset($_REQUEST['customerCRMId']))?$_REQUEST['customerCRMId']:null;
$name = (isset($_REQUEST['name']))?$_REQUEST['name']:null;
$password = (isset ($_REQUEST['password']))?$_REQUEST['password']:null;
$companyId = (isset($_REQUEST['companyId']))?$_REQUEST['companyId']:null;
$clientType = (isset($_REQUEST['clientType']))?$_REQUEST['clientType']:null;
$username = (isset($_REQUEST['username']))?$_REQUEST['username']:null;
$customerId = (isset($_REQUEST['customerId']))?$_REQUEST['customerId']:null;
$disabled = (isset($_REQUEST['disabled']))?$_REQUEST['disabled']:null;
$email = (isset($_REQUEST['email']))?$_REQUEST['email']:null;
$saleId = (isset($_REQUEST['saleId']))?$_REQUEST['saleId']:null;
$sponsorId = (isset($_REQUEST['sponsorId']))?$_REQUEST['sponsorId']:null;
$expirationDate = (isset($_REQUEST['expirationDate']))?$_REQUEST['expirationDate']:null;
$billingCycleId = (isset($_REQUEST['billingCycleId']))?$_REQUEST['billingCycleId']:null;
$hidden = (isset($_REQUEST['hidden']))?$_REQUEST['hidden']:null;
$lastBillingDate = (isset($_REQUEST['lastBillingDate']))?$_REQUEST['lastBillingDate']:null;
$changePassword = (isset($_REQUEST['changePassword']))?$_REQUEST['changePassword']:null;
$lastlogin = (isset($_REQUEST['lastlogin']))?$_REQUEST['lastlogin']:null;
$phone = (isset($_REQUEST['phone']))?$_REQUEST['phone']:null;



$data = array("authkey" => $authkey, "customerCRMId" => $customerCRMId, 'name'=> $name, "password" => $password, "companyId" => $companyId, "clientType" => $clientType, "username" => $username, "customerId" => $customerId, "disabled" => $disabled, "email" => $email, "saleId" => $saleId, "sponsorId" => $sponsorId, "expirationDate" => $expirationDate, "billingCycleId" => $billingCycleId, "hidden" => $hidden, "lastBillingDate" => $lastBillingDate, "changePassword" => $changePassword, "lastlogin" => $lastlogin, "phone" => $phone);

// $data_string = json_encode($data);
//var_dump($data);die;
$data_string = http_build_query($data);

$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $_REQUEST['tipoTransaccion']);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt(
    $curl, 
    CURLOPT_HTTPHEADER, 
    array(
        //'Content-Type: application/json',
        'Content-Type: application/x-www-form-urlencoded',
        'Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5'
    )
);
$html = curl_exec($curl); // execute the curl command 
if ($html === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_dump($info));
}

$info = curl_getinfo($curl);
curl_close($curl);
echo "".print_r($html, true)."";
//var_dump($info);

?>
