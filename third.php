<html>
<head></head>
<body>
<?php
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
$name1=$_POST["name"];
$name2=$_POST["toname"];
$name3=$_POST["amt"];


$query="SELECT currentcredit FROM `user` where name='".$name1."'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($result)){
    $amt1=$row["currentcredit"]-$name3;
    //echo "$amt1";
    }
$sqlq="UPDATE user SET currentcredit=$amt1 WHERE name='".$name1."'";
    $result=mysqli_query($conn, $sqlq);

}
$que="SELECT currentcredit FROM `user` where name='".$name2."'";
$res = mysqli_query($conn, $que);
if(mysqli_num_rows($res) > 0)
{
    //echo "query executed.";
    while($row = mysqli_fetch_assoc($res)){
    $amt2=$row["currentcredit"]+$name3;
    //echo "$amt2";
   }
    $sql="UPDATE user SET currentcredit=$amt2 WHERE name='".$name2."'";
    $res=mysqli_query($conn, $sql);

}
$sqlin = "INSERT INTO transfer (Tfrom, Tto,Amount)
VALUES ('$name1', '$name2', '$name3')";
$re=mysqli_query($conn, $sqlin);
?>
<form method="post" action="second.php">
<input type="submit" name="submit" value="Go Back to list of users"></form>
</body>
</html>
