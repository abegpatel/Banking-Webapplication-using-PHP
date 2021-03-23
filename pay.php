<body background="axis1.jpg">
<?php
$n1=$_POST["n1"];
$p1=$_POST["p1"];
$conn=mysqli_connect("localhost","root","","axis");
$result=mysqli_query($conn,"SELECT balance,name,account_no FROM customer where account_no='$n1' and password='$p1'");
$c=mysqli_num_rows($result);
if($c==0)
{
	echo"WRONG PASSWORD";
	header("refresh:2;url=sign.html");
}
else
{
		while($row=mysqli_fetch_assoc($result))
	 {
		 echo"<center>";
		
		echo "<center>Welcome&nbsp;".$row["name"]."</center>";
		
		$today=date("Y-m-d");
		
		echo "$today";
		
		
		echo "<table>";
		echo"<form method=post action=pay1.php>";
		echo "<tr><td>ACCOUNT NO</td><td>:</td><td><input type=number name=t5 value=".$row["account_no"]." readonly></td></tr>";
		echo "<tr><td>BALANCE</td><td>:</td><td><input type=number name=t1 value=".$row["balance"]." readonly></td></tr>";
		echo"<tr><td>ACCOUNT NUMBER(TO SENT)</td><td>:</td><td><input type=number name=t2></td></tr>";
        echo"<tr><td>ENTER AMOUNT</td><td>:</td><td><input type=number name=t3></td></tr>";
		echo"<tr><td></td><td></td><td><input type=submit value=PROCEED TO PAY></td></tr>";
		echo"</form>";
		echo"</table>";
		echo"</center>";
		
	 }
}
		?>
		</body>