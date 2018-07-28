<html>
<head>
<style>

header {
    text-align: center;
    font-size: 25px;
 }
table{
    font-size:15px;
}
#b1{
     alignment:center;
     width:100px;
     height:40px;
     font-size:30px;
}
</style>
</head>
<body>
<header>
<h1>List of Users<h1>
</header>
<table border="2" height="400" width="600" align="center" >
<tr>
<th>No</th>
<th>Name of User</th>
<th>Current Amount </th>
</tr>
<tr>
<td>1</td>
<td>Nikita Gawade</td>
<td><?php
  $servername="localhost";
  $username="root";
  $password="";
  $database="userdetail";

  //create connection

  $conn=new mysqli($servername,$username,$password,$database);

  // connection checking

  if (!$conn) 
  {
     die("Connection failed: ");
  } 
else
{
   //echo "connection Successful" ;
}
//$name1=$_POST["name"];


$query="SELECT currentcredit FROM `user` where no=1";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>
</tr>
<tr>
<td>2</td>
<td>Nilam vare</td>
<td><?php 
$query="SELECT currentcredit FROM `user` where no=2";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>

</tr>
<tr>
<td>3</td>
<td>Nikita Naik</td>
<td><?php 
$query="SELECT currentcredit FROM `user` where no=3";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>
</tr>
<tr>
<td>4</td>
<td>Apurva Dalavi</td>
<td><?php 
$query="SELECT currentcredit FROM `user` where no=4";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>
</tr>
<tr>
<td>5</td>
<td>Aishwarya Satavase</td>
<td><?php 
$query="SELECT currentcredit FROM `user` where no=5";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>
</tr>
<tr>
<td>6</td>
<td>pooja bandekar</td>
<td><?php 
$query="SELECT currentcredit FROM `user` where no=6";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>
</tr>
<tr>
<td>7</td>
<td>Mitali Bnadarkar</td>
<td><?php 
$query="SELECT currentcredit FROM `user` where no=7";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>
</tr>
<tr>
<td>8</td>
<td>Anushka Gorkha</td>
<td><?php 
$query="SELECT currentcredit FROM `user` where no=8";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>
</tr>
<tr>
<td>9</td>
<td>Himani Ambede</td>
<td><?php 
$query="SELECT currentcredit FROM `user` where no=9";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>
</tr>
<tr>
<td>10</td>
<td>Rasika Ghanekar</td>
<td><?php 
$query="SELECT currentcredit FROM `user` where no=10";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"];
    echo $amt1;}
}?></td>
</tr>
</table>
<p align="center"> 
<button id="b1" type="button"><a href="third.html">next</a></button>
</p>
</body>
</html> 