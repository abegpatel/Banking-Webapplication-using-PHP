<?php
$t1=$_POST["t1"];
$n1=$_POST["n1"];
$p1=$_POST["p1"];
$n2=$_POST["n2"];
$e1=$_POST["e1"];
$d1=$_POST["d1"];
$p3=$_POST["p3"];
$g1=$_POST["g1"];
$s1=$_POST["s1"];
$s2=$_POST["s2"];

$conn=mysqli_connect("localhost","root","","axis");

	 $result=mysqli_query($conn,"select count(*) 'cnt' from customer");
	$r=mysqli_fetch_assoc($result);
$account=10000+$r["cnt"];

mysqli_query($conn,"insert into customer(name,adhar_no,password,phone_no,email,dob,balance,gender,city,facilities,account_no) values('$t1','$n1','$p1','$n2','$e1','$d1','$p3','$g1','$s1','$s2',$account)");


echo "you have signed up successfully<br>";
echo "your account no. is $account";
header("refresh:5;src=sign.html");
?>
	 