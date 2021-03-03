
<?php
// $usd=$_GET['usd'];
// $eur=$_GET['eur'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH&tsyms=USD,EUR');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$output = curl_exec($ch);
echo $output
// $outputjs=json_decode($output,true);
// print_r($outputjs);
// $usd_actual=$outputjs["BTC"]["USD"];
// $eur_actual=$outputjs["BTC"]["EUR"];
// $class='';
// if($usd<=$usd_actual)
// $class='verde';
// else
// $class='roja';

?>


