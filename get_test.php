<?php
//var_dump($_REQUEST);die;
//enviar datos por post
$service_url = $_REQUEST['url'];
//var_dump($service_url);die;

$authkey = ($_REQUEST['authkey'])?$_REQUEST['authkey']:null;
$customerCRMId = ($_REQUEST['customerCRMId'])?$_REQUEST['customerCRMId']:null;
$name = ($_REQUEST['name'])?$_REQUEST['name']:null;
$password = ($_REQUEST['password'])?$_REQUEST['password']:null;
$companyId = ($_REQUEST['companyId'])?$_REQUEST['companyId']:null;
$clientType = ($_REQUEST['clientType'])?$_REQUEST['clientType']:null;
$username = ($_REQUEST['username'])?$_REQUEST['username']:null;
$customerId = ($_REQUEST['customerId'])?$_REQUEST['customerId']:null;
$disabled = ($_REQUEST['disabled'])?$_REQUEST['disabled']:null;
$email = ($_REQUEST['email'])?$_REQUEST['email']:null;
$saleId = ($_REQUEST['saleId'])?$_REQUEST['saleId']:null;
$sponsorId = ($_REQUEST['sponsorId'])?$_REQUEST['sponsorId']:null;
$expirationDate = ($_REQUEST['expirationDate'])?$expirationDate['name']:null;
$billingCycleId = ($_REQUEST['billingCycleId'])?$_REQUEST['billingCycleId']:null;
$hidden = ($_REQUEST['hidden'])?$_REQUEST['hidden']:null;
$lastBillingDate = ($_REQUEST['lastBillingDate'])?$_REQUEST['lastBillingDate']:null;
$changePassword = ($_REQUEST['changePassword'])?$_REQUEST['changePassword']:null;
$lastlogin = ($_REQUEST['lastlogin'])?$_REQUEST['lastlogin']:null;
$phone = ($_REQUEST['phone'])?$_REQUEST['phone']:null;



$data = array("authkey" => $authkey['authkey'], "customerCRMId" => $customerCRMId['customerCRMId'], 'name'=> $name['name'], "password" => $password['password'], "companyId" => $companyId['companyId'], "clientType" => $clientType['clientType'], "username" => $username['username'], "customerId" => $customerId['customerId'], "disabled" => $disabled['disabled'], "email" => $email['email'], "saleId" => $saleId['saleId'], "sponsorId" => $sponsorId['sponsorId'], "expirationDate" => $expirationDate['expirationDate'], "billingCycleId" => $billingCycleId['billingCycleId'], "hidden" => $hidden['hidden'], "lastBillingDate" => $lastBillingDate['lastBillingDate'], "changePassword" => $changePassword['changePassword'], "lastlogin" => $lastlogin['lastlogin'], "phone" => $_REQUEST['phone']);

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
