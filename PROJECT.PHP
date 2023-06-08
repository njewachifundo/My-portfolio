<!doctype html>
<html>
<head>
    <title>SERVICES</title>
</head>

<body>
    
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
$query=mysqli_query($conn,"select*from projects");
while($row=mysqli_fetch_array($query)){
    echo $row["NAME"]. "\t". $row["REQUIREMENTS"]. $row["AMOUNT"]."<br>";
}
?>

<footer style="align-items: center;"> <h1>FILL THE FORM TO REGISTER IN ANY COURSE YOU  WANT</h1>

<form action="https:\\www.learnwithnjewa.com">

<label for="username">username</label>
<input type="text"name="username" required><br>


<label for="password">password</label>
<input type="password"name="password" required><br>
<button type="submit"><a href="tick.html">login</a></button>

</form>




</footer>
</body>






















</html>