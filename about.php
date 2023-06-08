<!doctype html>
    <html>

<head>
<title>ABOUT</title>


</head>

<body >

<h1>ABOUT ME </h1>

<div style="border: 2;color:black;column-width: 4;">


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
    $query=mysqli_query($conn,"select*from skills");
    while($row=mysqli_fetch_array($query)){
        echo $row["NAME"]. "\t". $row["EXPERIENCE"]."<br>";
    }
    ?>

</div>

<p style="display: inline-block;">
<h3  style="font-family:Verdana, Geneva, Tahoma, sans-serif ;">experience</h3>

<ol>
<li >worked as pc doctor at mzuzu 2021</li>

<li>worked  as ict assistant at mzomba  2022</li>
<li>worked as web developer at mzimba technical college 2023</li>

</ol>

</p>


<footer style="text-align: center;">
    
<h4 style="color: black;">COURSES I TALKED</h4>
enduser computing
web development
cloud computing
</footer>

<CEnter>@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@</CEnter>

</body>




    </html>