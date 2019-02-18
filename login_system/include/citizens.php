<?php
    
    
//}else{
//    echo"All fields are required!";
//    die();
//}


 //Sanitize post array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $user_ID = $POST['userID']; 
 $user_name = $POST['user_name']; 
 $for_president = $POST['for_president'];
  $for_governor = $POST['for_governor'];
$for_senator = $POST['for_senator'];
$for_mp = $POST['for_mp'];



//customer data
$customerData = [
    'id' => $id,
    'user_ID' => $user_ID,
    'user_name' => $user_name,
    'for_president' => $for_president,
    'for_governor' => $for_governor,
    'for_senator' => $for_senator,
    'for_mp' => $for_mp
];

//insatnciate  customer

$customer = new Customer();

//Add Customer to DB
$customer->addCustomer($customerData); 






//redirect to success
//header('Location: success.php?tid='.$charge->id.'$product='.$charge->description);












?>