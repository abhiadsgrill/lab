  <?php
include('../include/connection_sqli.php');

if (isset($_POST['upload_inv'])) {
 
    $inv_no = mysqli_real_escape_string($conn, $_POST['inv_no']);
    $inv_date = mysqli_real_escape_string($conn, $_POST['inv_date']);
    $out_vendor_name1 = mysqli_real_escape_string($conn, $_POST['out_vendor_name1']);

 if($out_vendor_name1==0){
    $inv_client2 = mysqli_real_escape_string($conn, $_POST['out_inv_client']); 
    $mr = mysqli_real_escape_string($conn, $_POST['mr']); 
    $inv_client =   "$mr $inv_client2";
    $mobile = mysqli_real_escape_string($conn, $_POST['out_inv_client_phone']); 
   $inv_client_age = mysqli_real_escape_string($conn, $_POST['inv_client_age']); 
   $inv_client_phone = mysqli_real_escape_string($conn, $_POST['outsitepid']); 
   $pat_type = '1';  
}

else if($out_vendor_name1==1){

    $inv_client = ''; // mysqli_real_escape_string($conn, $_POST['inv_client']); 
    $inv_client_phone = mysqli_real_escape_string($conn, $_POST['inv_client_phone']);
    $pat_type = '0';  
    $mobile = '';  
}
 
  $doc_name = mysqli_real_escape_string($conn, $_POST['doc_name']);
  $inv_ttl_amt = mysqli_real_escape_string($conn, $_POST['inv_ttl_amt']);
   $inv_discount = mysqli_real_escape_string($conn, $_POST['inv_discount']);
   $inv_grnd_ttl = mysqli_real_escape_string($conn, $_POST['inv_grnd_ttl']);
   $inv_gst = mysqli_real_escape_string($conn, $_POST['inv_gst']);
   $inv_paid_amt = mysqli_real_escape_string($conn, $_POST['inv_paid_amt']);
   $inv_due_amt = mysqli_real_escape_string($conn, $_POST['inv_due_amt']);
   $inv_pay_type = mysqli_real_escape_string($conn, $_POST['inv_pay_type']);
   $inv_pay_status = mysqli_real_escape_string($conn, $_POST['inv_pay_status']);
   $inv_pay_price = mysqli_real_escape_string($conn, $_POST['inv_pay_price']);
   $collect = mysqli_real_escape_string($conn, $_POST['collect']);
   $collect_home = mysqli_real_escape_string($conn, $_POST['collect_home']); 
 echo  $query = mysqli_query($conn, "INSERT INTO `invoice_data`(`inv_no`,`doc_name`, `inv_date`,`inv_client_age`, `inv_client`, `client_id`, `inv_main_ttl`, `inv_dis`, `grnd_total`, `inv_gst`, `inv_pd_amt`, `inv_due_amt`, `inv_pay_type`, `inv_pay_status`, `inv_pay_price`,`collect`,`collect_home`,`pat_type`,`os_mobile`) VALUES ('$inv_no','$doc_name', '$inv_date','$inv_client_age', '$inv_client', '$inv_client_phone','$inv_ttl_amt', '$inv_discount', '$inv_grnd_ttl', '$inv_gst', '$inv_paid_amt', '$inv_due_amt', '$inv_pay_type', '$inv_pay_status', '$inv_pay_price','$collect','$collect_home','$pat_type','$mobile')");
exit();
   if($query){
        header("location: ../list-invoice.php");
 
   }
}



 
// if (isset($_POST['upload_inv'])) {
 
//      $inv_no = mysqli_real_escape_string($conn, $_POST['inv_no']);
//      $inv_date = mysqli_real_escape_string($conn, $_POST['inv_date']);
//      $out_vendor_name1 = mysqli_real_escape_string($conn, $_POST['out_vendor_name1']);

//   if($out_vendor_name1==0){

//      $inv_client2 = mysqli_real_escape_string($conn, $_POST['out_inv_client']); 
//      $mr = mysqli_real_escape_string($conn, $_POST['mr']); 
//      $inv_client =   "$mr $inv_client2";
//      $inv_client_phone = mysqli_real_escape_string($conn, $_POST['out_inv_client_phone']); 
//     $inv_client_age = mysqli_real_escape_string($conn, $_POST['inv_client_age']); 
//     $pat_type = '1'; 

// }

// else if($out_vendor_name1==1){

//      $inv_client = ''; 
//      $inv_client_phone = mysqli_real_escape_string($conn, $_POST['inv_client_phone']);
//      $pat_type = '0'; 
 
// }
 
//      $doc_name = mysqli_real_escape_string($conn, $_POST['doc_name']);
//      $inv_test = mysqli_real_escape_string($conn, $_POST['inv_test']);
//      $inv_rate = mysqli_real_escape_string($conn, $_POST['inv_rate']);
//      $inv_qty = mysqli_real_escape_string($conn, $_POST['inv_qty']);
//      $inv_ttl1 = mysqli_real_escape_string($conn, $_POST['inv_ttl1']);
//      $inv_sb_amt = mysqli_real_escape_string($conn, $_POST['inv_sb_amt']);
//     $inv_ttl_amt = mysqli_real_escape_string($conn, $_POST['inv_ttl_amt']);
//     $inv_discount = mysqli_real_escape_string($conn, $_POST['inv_discount']);
//     $inv_grnd_ttl = mysqli_real_escape_string($conn, $_POST['inv_grnd_ttl']);
//     $inv_gst = mysqli_real_escape_string($conn, $_POST['inv_gst']);
//     $inv_paid_amt = mysqli_real_escape_string($conn, $_POST['inv_paid_amt']);
//     $inv_due_amt = mysqli_real_escape_string($conn, $_POST['inv_due_amt']);
//     $inv_pay_type = mysqli_real_escape_string($conn, $_POST['inv_pay_type']);
//     $inv_pay_status = mysqli_real_escape_string($conn, $_POST['inv_pay_status']);
//     $inv_pay_price = mysqli_real_escape_string($conn, $_POST['inv_pay_price']);
//     $collect = mysqli_real_escape_string($conn, $_POST['collect']);
//     $collect_home = mysqli_real_escape_string($conn, $_POST['collect_home']); 
//     $query = mysqli_query($conn, "INSERT INTO `invoice_data`(`inv_no`,`doc_name`, `inv_date`,`inv_client_age`, `inv_client`, `inv_client_cnct`, `inv_test_id`, `inv_rate`, `inv_qty`, `inv_ttl`, `inv_sb_amt`, `inv_main_ttl`, `inv_dis`, `grnd_total`, `inv_gst`, `inv_pd_amt`, `inv_due_amt`, `inv_pay_type`, `inv_pay_status`, `inv_pay_price`,`collect`,`collect_home`,`pat_type`) VALUES ('$inv_no','$doc_name', '$inv_date','$inv_client_age', '$inv_client', '$inv_client_phone', '$inv_test', '$inv_rate', '$inv_qty', '$inv_ttl1', '$inv_sb_amt', '$inv_ttl_amt', '$inv_discount', '$inv_grnd_ttl', '$inv_gst', '$inv_paid_amt', '$inv_due_amt', '$inv_pay_type', '$inv_pay_status', '$inv_pay_price','$collect','$collect_home','$pat_type')");

//     if($query){
      
//           header("location: ../list-invoice.php");
 
//     }
// }
else if(isset($_POST['delete_btn'])){

    $id = $_POST['in_id'];

    $query = mysqli_query($conn,"DELETE FROM invoice_data WHERE inv_id = '$id'");
    if($query){
        header("location: ../list-invoice.php");
    }

}

else if(isset($_POST['out_delete_btn'])){

    $id = $_POST['in_id'];

    $query = mysqli_query($conn,"DELETE FROM invoice_data WHERE inv_id = '$id'");
    if($query){
        header("location: ../outside-list-invoice.php");
    }

} 
 
if (isset($_POST['update_inv'])) {  
 echo   $inv_date = mysqli_real_escape_string($conn, $_POST['inv_date']);
    $out_vendor_name1 = mysqli_real_escape_string($conn, $_POST['out_vendor_name1']); 
    $inv_client2 = mysqli_real_escape_string($conn, $_POST['out_inv_client']); 
    $mr = mysqli_real_escape_string($conn, $_POST['mr']); 
    $inv_client =   "$mr $inv_client2";
    $mobile = mysqli_real_escape_string($conn, $_POST['out_inv_client_phone']); 
   $inv_client_age = mysqli_real_escape_string($conn, $_POST['inv_client_age']); 
   $inv_client_phone = mysqli_real_escape_string($conn, $_POST['outsitepid']); 
  
 echo  $doc_name = mysqli_real_escape_string($conn, $_POST['doc_name']);
 echo  $inv_ttl_amt = mysqli_real_escape_string($conn, $_POST['inv_ttl_amt']);
 echo  $inv_discount = mysqli_real_escape_string($conn, $_POST['inv_discount']);
 echo  $inv_grnd_ttl = mysqli_real_escape_string($conn, $_POST['inv_grnd_ttl']);
 echo   $inv_paid_amt = mysqli_real_escape_string($conn, $_POST['inv_paid_amt']);
 echo  $inv_due_amt = mysqli_real_escape_string($conn, $_POST['inv_due_amt']);
echo   $inv_pay_type = mysqli_real_escape_string($conn, $_POST['inv_pay_type']);
echo   $inv_pay_status = mysqli_real_escape_string($conn, $_POST['inv_pay_status']);
echo   $inv_pay_price = mysqli_real_escape_string($conn, $_POST['inv_pay_price']);
echo   $collect = mysqli_real_escape_string($conn, $_POST['collect']);
//   $collect_home = mysqli_real_escape_string($conn, $_POST['collect_home']);
   
  $query = mysqli_query($conn, "UPDATE invoice_data SET inv_date = '$inv_date', inv_client ='$inv_client', os_mobile ='$mobile', doc_name ='$inv_ttl_amt', inv_main_ttl = '$inv_ttl_amt', inv_dis = '$inv_discount', grnd_total = '$inv_grnd_ttl', inv_pd_amt = '$inv_paid_amt', inv_due_amt = '$inv_due_amt', inv_pay_type = '$inv_pay_type', inv_pay_status = '$inv_pay_status', inv_pay_price = '$inv_pay_price', collect = '$collect' WHERE inv_id = '$inv_id'");

if (!$query) {
    die("Error: " . mysqli_error($conn));
}
      else if ($query) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Succesfully Updated');
        // window.location='https://mercyhospitalmadurai.in/backend/lab/update-invoice4.php?uid=$inv_id';
        window.location='https://mercyhospitalmadurai.in/backend/lab/list-invoice.php';
        </script>");  
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
if (isset($_POST['checkbox']) && $_POST['checkbox'] === 'on') { 
 $inv_no = mysqli_real_escape_string($conn, $_POST['inv_no']);
$pat_id = mysqli_real_escape_string($conn, $_POST['inv_client_phone']);
$dep_name = mysqli_real_escape_string($conn, $_POST['dep_name']);
$checkbox = mysqli_real_escape_string($conn, $_POST['checkbox']);  

$query = mysqli_query($conn, "INSERT INTO `check_test`(`inv_no`,`pat_id`, `dep_id`,`test_name`) VALUES ('$inv_no','$pat_id', '$dep_name','$checkbox')");
 
   echo 'submitted successfully';
    } else {
        // Checkbox is not checked
        // Handle the case when the checkbox is not checked
        echo 'Checkbox is not checked';
    }
} else {
    // Invalid request method
    echo 'Invalid request';
}
 
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['isChecked'])) {
    // You can get the value of checkbox here
    $isChecked = $_POST['isChecked'];

    $inv_no = mysqli_real_escape_string($conn, $_POST['inv_no']);
    $pat_id = mysqli_real_escape_string($conn, $_POST['inv_client_phone']);
    $dep_name = mysqli_real_escape_string($conn, $_POST['dep_name']);
    // $checkbox = mysqli_real_escape_string($conn, $_POST['checkbox']); 

    $query = mysqli_query($conn, "INSERT INTO `check_test`(`inv_no`,`pat_id`, `dep_id`,`test_name`) VALUES ('$inv_no','$pat_id', '$dep_name','$isChecked')");
  
    if ($query === 'true') {
        // Checkbox is checked
        // Perform actions for checked state
        echo "Checkbox is checked";
        // Add your logic here
    } else {
        // Checkbox is unchecked
        // Perform actions for unchecked state
        echo "Checkbox is unchecked";
        // Add your logic here
    }
} else {
    // If the request method is not POST or the 'isChecked' value is not set
    echo "Invalid request";
}



 

 