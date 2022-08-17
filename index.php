<?php
// create variables that read the gateway
$sessionId= $_POST[" sessionId"];
$serviceCode=$_POST["serviceCode"];
$phoneNumber=$_POST["phoneNumber"];
$text=$_POST["text"];

if ($text== ""){
  // this is the first requsest from the user start the code with CON
  $resoonse= " CON please choose option\n";
  $resoonse= "2. Account number\n";
  $resoonse= "3. my phone number\n";

}elseif($text== "1"){
    // logc for the first level respose
  $response=" CON choose an option";cd
  $resoonse= "1. Check account number\n";
  $resoonse= "2. Check balance\n";
  
}
elseif($text=="2"){
    // logic response for first level response
    $response="END your phone number is".$phoneNumber;
}
elseif ($text=1*1) {
  // second level response where user chose option 1
  $accountNumber=="ACC 101";
  // TERMINAL request must end with END
  $response="END Your account number is".$accountNumber;
}
elseif ($text==1*2) {
    // create variable for balance
    $balance="KES 10000";
    $response="END  Your balance is".$balance;
}
header('content-type;text/plain');
echo$response;

?>