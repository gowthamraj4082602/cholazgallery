<?php 

$text=urlencode("xxx");//Initializethesendervariable
$sender=urlencode("xxxxx");//InitializethesendervariabletializetheURLvariable
$URL="www.unicel.in/SendSMS/sendmsg.php";//CreateandinitializeanewcURLresource
$ch=curl_init();//SetURLtoURLvariable
curl_setopt($ch,CURLOPT_URL,"http://$URL");//SetURLHTTPpostto1
curl_setopt($ch,CURLOPT_POST,1);//SetURLHTTPpostfieldvalues
curl_setopt($ch,CURLOPT_POSTFIELDS,"uname=SAKGPS&pass&pass=Abc@321&send=CHOICB&dest=916380101098&msg=xx");//SetURLreturnvaluetoTruetoreturnthetransferasastring
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);//TheURLsessionisexecutedandpassedtothebrowser
$curl_output=curl_exec($ch);


 ?>