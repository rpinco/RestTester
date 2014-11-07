<?php
var_dump($_REQUEST);die;
//enviar datos por post
$service_url = $_REQUEST['url'];
//var_dump($service_url);die;

$data = array("authkey" => $_REQUEST['authkey'], "companyId" => $_REQUEST['companyId'], 'customerId'=> $_REQUEST['customerId']);
// $data_string = json_encode($data);
//var_dump($data);die;
$data_string = http_build_query($data);

$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "'".$_REQUEST['tipotransaccion']."'");
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
echo "<pre>".print_r($html, true)."</pre>";
var_dump($info);

?>
