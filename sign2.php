<body background="axis1.jpg">
<?php
       $t1=$_POST["t1"];
$s1=$_POST["s1"];   	   
     $conn=mysqli_connect("localhost","root","","axis");
	 $result=mysqli_query($conn,"SELECT account_no,name,password,phone_no,email,city,city,gender,facilities,adhar_no,dob,balance,(balance*4*1)/100 'interest' FROM customer where account_no='$t1'");
    if($s1=='mini statement')
	{
	while($row=mysqli_fetch_assoc($result))
	 {
		echo "<center><font size=8>Welcome&nbsp;".$row["name"]." </center>";
		echo"<center>";
		$today=date("Y-m-d");
		echo"$today";
		echo"</center>";
			echo"<center>";
		echo"<table border=1px cellpadding=0px cellspacing=0px>";
		echo "<tr><th>Account number</th><th>Balance</th></tr>";
		echo"<tr><td>".$row["account_no"]."</td><td>".$row["balance"]."</td></tr>";
		echo"</table>";
			echo"</center>";
	 }
	}
	if($s1=="account details")
	{
	while($row=mysqli_fetch_assoc($result))
	 {
		 echo"<pre>";
		echo "<center><font size=8>Welcome&nbsp;".$row["name"]." </center>";
				echo"<center>";
		$today=date("Y-m-d");
		echo"$today";
				echo"</center>";
		echo"<center>";
		echo"<table border=1px cellpadding=0px cellspacing=0px>";
		echo "<tr><th>Account number</th><th>Balance</th><th>Interest</th></tr>";
		echo"<tr><td>".$row["account_no"]."</td><td>".$row["balance"]."</td><td>".$row["interest"]."</td></tr>";
	    echo"</table>";
		echo"</center>";
		echo"</pre>";
	 }
	}
	if($s1=="customer details")
	{
	while($row=mysqli_fetch_assoc($result))
	 {
		 echo"<pre>";
		echo "<center><font size=8>Welcome&nbsp;".$row["name"]." </center>";
        echo"<center>";
		$today=date("Y-m-d");
		echo"$today";
		echo"</center>";
		echo"<center>";
		echo"<table border=1px cellpadding=0px cellspacing=0px>";
		echo "<tr><th>Account number</th><th>Balance</th><th>Name</th><th>Phone No.</th><th>D.O.B</th><th>City</th></tr>";
		echo"<tr><td>".$row["account_no"]."</td><td>".$row["balance"]."</td><td>".$row["name"]."</td><td>".$row["phone_no"]."</td><td>".$row["dob"]."</td><td>".$row["city"]."</td></tr>";
	    echo"</table>";
		echo"</center>";
		echo"</pre>";
	 }
	}
	if($s1=="update")
	{
	
echo "<pre>";
while($row = mysqli_fetch_assoc($result))

 {
  echo "<center><font size=5>UPDATE YOUR ACCOUNT DETAILS<center>";
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

echo "<pre>";
}
if($s1=="money transfer")
	{
	while($row=mysqli_fetch_assoc($result))
	 {
		echo "<center><font size=8>Welcome&nbsp;".$row["name"]." </center>";
		echo"<center>";
		$today=date("Y-m-d");
		echo"$today";
	    echo"</center>";
			echo"<center>";
			echo"<table>";
			echo"<form method=post action=pay.php>";
			echo"<tr><td>ACCOUNT NUMBER</td><td>:</td><td><input type=number name=n1 value=".$row["account_no"]." readonly></td></tr>";
	        echo"<tr><td>ENTER YOUR PASSWORD</td><td>:</td><td><input type=password name=p1 required></td></tr>";
			echo"<tr><td></td><td></td><td><input type=submit value=PROCEED></td></tr>";
			echo"</form>";
			echo"</table>";
			echo"</center>";
			
	 }
	}
	 ?>
	 </body>

