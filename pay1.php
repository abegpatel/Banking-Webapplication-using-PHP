<body background="axis1.jpg">
<?php
$t5=$_POST["t5"];
$t1=$_POST["t1"];
$t2=$_POST["t2"];
$t3=$_POST["t3"];
$t4=$t1-$t3;
$conn=mysqli_connect("localhost","root","","axis");
mysqli_query($conn,"update customer set balance='$t4' where account_no='$t5'");

echo"<center>";
echo"YOU HAVE TRANSFERRED MONEY TO ACCOUNT NUMBER :$t2<br>";

echo"YOUR AVAILABLE BALANCE IS $t4";
echo"</center>";
header("refresh:3;url=sign.html");
?>
</body>