<?php
include('db.php');
if(isset($_POST['payement_id']) && isset($_POST['amt'])&& isset($_post['name'])){
    $payment_id=$_post['payement_id'];
    $amt=$_post['amt'];
    $name=$_post['name'];
    $payment_status="complete";
    mysqli_query($con,"insert into payment(name,amount,payment_status,payment_id) values('$name','$amt','$payment_status','$payment_id')");

}
?>