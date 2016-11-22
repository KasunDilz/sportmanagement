<?php 
require_once'dbcon.php';


if(isset($_POST['name']) && isset($_POST['nic_no']) && isset($_POST['faculty']) && isset($_POST['reg_no']) && isset($_POST['contact_no']) && isset($_POST['dob']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['password']) ){
	$name = $_POST['name'];
	$nic_no=$_POST['nic_no'];
	$faculty=$_POST['faculty'];
	$reg_no = $_POST['reg_no'];
	$contact_no = $_POST['contact_no'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];


$sql3q=mysqli_query($link," INSERT INTO add_user(name,nic_no,faculty,reg_no,contact_no,dob,email,gender,password)
 values ('$name','$nic_no','$faculty','$reg_no','$contact_no','$dob','$email','$gender','$password')");


if($sql3q){
	echo 'success';
}
else{
	echo 'not success';
}

}
else{
	echo 'not set';
}
?>