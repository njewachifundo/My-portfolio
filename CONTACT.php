<!doctype html>
<html>



<head>
    <title>CONTACT</title>
</head>

<body style="background-image: url(njala.jpg)  ;color:white;position: relative;text-align: center;">
    <h3>FOR MORE INFORMATION YOU CAN FIND ME BY CONTACTING FOLLOWING NUMBERS</h3>
    
    
<?php
$Servername="localhost";
$username ="root";
$password="";
$db="my_project";

$conn= mysqli_connect($Servername,$username,$password,$db);
if($conn){
    echo "connected";
"<br>";
}
else{
    echo "not connected";
"<br>";
}
$query=mysqli_query($conn,"select*from contacts");
while($row=mysqli_fetch_array($query)){
    echo $row["USEDFOR"]. "\t". $row["NUMBER"]."<br>";
}
?>
 <div>  <UL style="list-style: none;">
<Li>@994175809</Li>

<LI>O884175809</LI>

<Li>YOU CAN EMAIL ME USING @.GMAILNJEWA.COM</Li>
    </UL>

</div> 
</body>


</html>