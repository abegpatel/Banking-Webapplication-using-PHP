<body background="axis1.jpg">
<?php
       $l1=$_POST["l1"];
       $p1=$_POST["p1"];	  
     $conn=mysqli_connect("localhost","root","","axis");
	 $result=mysqli_query($conn,"SELECT name,account_no FROM customer where account_no='$l1' and password='$p1'");
    $c=mysqli_num_rows($result);
	if($c==0)
	{
		echo "wrong password or login id";
		header("refresh:2;url=sign.html");
	}
	else
	while($row=mysqli_fetch_assoc($result))
	 {
		 echo"<center>";
		
		echo "<center>Welcome&nbsp;".$row["name"]." </center>";
		
		$today=date("Y-m-d");
		
		echo "$today";
		
		echo "<form method=post action=sign2.php><br><br>";
		echo "<table>";
		echo"<tr>";
		echo "<td>ACCOUNT NO : <input type=number name=t1 value=".$row["account_no"]." readonly></td><td></td>";
		
		echo"<td><select name=s1><option>mini statement<option>account details<option>customer details<option>update<option>money transfer</select></td><td></td>";
		
		echo"<td><input type=submit value=Go></td>";
		echo"</tr>";
		
		echo"</form>";
		echo"</center>";
	
     }
	 ?>
	 </body>

