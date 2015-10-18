<?php
// $servername = "localhost";
// $username = "yeeklcka_db";
// $password = "B00y33k41";
// $dbname = "yeeklcka_sambiesta";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "caterfromwhere";

// Create connection
$connection = mysqli_connect($servername,$username,$password,$dbname) or die("Error " . mysqli_error($connection));

   //fetch department names from the department table
   $sql = "select * from caterer";
   $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

   $dname_list = array();
   while($row = mysqli_fetch_array($result))
   {
       //echo $row['name'];
     array_push($dname_list, array('name' => $row['name'], 'company_name' => $row['company_name'],'address' => $row['address']));

   }
   echo json_encode($dname_list);
?>
