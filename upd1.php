<body bgcolor=cyan>
<?php

$t1=$_POST["t1"];
$p1=$_POST["p1"];

$conn=mysqli_connect("localhost","root","","axis");

$result=mysqli_query($conn,"SELECT account_no,name,password,phone_no,email,city FROM customer where account_no='$t1' and password='$p1'");
$c=mysqli_num_rows($result);
if($c==0)
{
	echo "value not found";
	header("refresh:5;url=update.html");
}
else
{
while($row = mysqli_fetch_assoc($result))

 {   echo "<center><font size=5>UPDATE YOUR ACCOUNT DETAILS<center>";
	 echo "<table align=center>";
	 echo "<form method=post action=upd2.php>";
  echo "<tr><td>ACCOUNT NO.</td><td>:</td><td> <input type=number readonly name=t1 value=".$row["account_no"]."></td></tr>";

  echo "<tr><td>Name</td><td>:</td><td> <input type=text name=s1 readonly value=".$row["name"]."></td></tr>";

  echo "<tr><td>Password</td><td>:</td><td> <input type=password name=p1 value=".$row["password"]."></td></tr>";
  
  echo "<tr><td>Phone No.</td><td>:</td><td> <input type=number name=n1 value=".$row["phone_no"]."></td></tr>";
  
  echo "<tr><td>Email Id.</td><td>:</td><td> <input type=email name=e1 value=".$row["email"]."></td></tr>";
  
  echo "<tr><td>City</td><td>:</td><td><input type=text name=a1 value=".$row["city"]."></td><td>";
 
echo "<tr><td></td><td></td><td><input type=submit value=confirm></td><td>";
echo "</form>";
 }

}
?>
</body>