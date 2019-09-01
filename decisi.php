<html>
<body>
<form>
<?php
$con=mysqli_connect("localhost","root","","database1");
$d=mysqli_query($con,SELECT status FROM current customer);
$c=mysqli_query($con,SELECT BALANCE FROM toll mangement WHERE TAG_ID=$d);
$vt=$_GET['vehtyp'];
if($vt==2)
{
 if($c>=15)
{
 $newbal=$c-15;
 mysqli_query($con,UPDATE toll management WHERE TAG_ID=$d );
 echo"15 Rs. PAID SUCCESSFULLY";
 echo"ACCESS ALLOWED";
}
else
{
 echo"INSUFFICIENT BALANCE"
 <input type="submit" name="pay" value="RECHARGE NOW">
}
}
if($vt==3)
{
 if($b>=20)
{
 $newbal=$b-20;
 mysqli_query($con,UPDATE toll management WHERE TAG_ID=$d);
 echo"20 Rs. PAID SUCCESSFULLY";
 echo"ACCESS ALLOWED";
}
else
{
 echo"INSUFFICIENT BALANCE"
 <input type="submit" name="pay" value="RECHARGE NOW">
}
}
if($vt==3)
{
 if($b>=30)
{
 $newbal=$b-30;
 mysqli_query($con,UPDATE toll management WHERE TAG_ID=$d);
 echo"30 Rs. PAID SUCCESSFULLY";
 echo"ACCESS ALLOWED";
}
else
{
 echo"INSUFFICIENT BALANCE"
?>
 <input type="submit" name="pay" value="RECHARGE NOW">
}
}
</form>
</body>
</html>