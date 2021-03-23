<body bgcolor=cyan>
<?php
$t1=$_POST["t1"];
$p1=$_POST["p1"];
$n1=$_POST["n1"];
$e1=$_POST["e1"];
$a1=$_POST["a1"];
$conn=mysqli_connect("localhost","root","","axis");

mysqli_query($conn,"update customer set password='$p1',phone_no='$n1',email='$e1',city='$a1' where account_no='$t1'");

echo "Record updated successfully";


?>
</body>