<?php
session_start();
require 'connection.php';
mysqli_select_db($con,'store')or die(mysql_error());
  echo "db selected";
//if(isset($_POST['btn_checkout']))
//{
//$current_date=date("d-m-y");
$item_name=$_POST['item_name'];
echo "$item_name";
$user_mail=$_SESSION['email'];
echo "$user_mail";
$bid_amount=$_POST['bid_amount'];
echo "$bid_amount";
$end_date=$_POST['end_date'];
echo "$end_date";
// $end_date="06-05-20";
$cur_date=date("d-m-y");
/*if ($cur_date>$end_date) {
	# code...
	$cur_date=aks;
}*/
$query="insert into user_bid2(u_mail,item_name,bid_amount,end_date,cur_date) values ('$user_mail','$item_name','$bid_amount','$end_date','$cur_date')";
mysqli_query($con,$query)or die ("Query 1 is inncorrect........");
mysqli_close($con);
 header('location: index.php');


?>
