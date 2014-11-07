<?php
//var_dump($_REQUEST);die;
//enviar datos por post
$service_url = $_REQUEST['url'];
//var_dump($service_url);die;

$data = array("authkey" => $_REQUEST['authkey'], "customerCRMId" => $_REQUEST['customerCRMId'], 'name'=> $_REQUEST['name'], "password" => $_REQUEST['password'], "companyId" => $_REQUEST['companyId'], "clientType" => $_REQUEST['clientType'], "username" => $_REQUEST['username'], "customerId" => $_REQUEST['customerId'], "disabled" => $_REQUEST['disabled'], "email" => $_REQUEST['email'], "saleId" => $_REQUEST['saleId'], "sponsorId" => $_REQUEST['sponsorId'], "expirationDate" => $_REQUEST['expirationDate'], "billingCycleId" => $_REQUEST['billingCycleId'], "hidden" => $_REQUEST['hidden'], "lastBillingDate" => $_REQUEST['lastBillingDate'], "changePassword" => $_REQUEST['changePassword'], "lastlogin" => $_REQUEST['lastlogin'], "phone" => $_REQUEST['phone']);
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
