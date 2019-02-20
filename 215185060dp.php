<?php 
$dbServername ="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbName="itemsdb";
        $conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
     

    $itemno=$_POST['itemno'];
    $itemname=$_POST['itemname'];
    $itemprice=$_POST['itemprice'];
                              
       $sql = "INSERT INTO `items`(`itemno`, `itemname`, `itemprice`) VALUES
                    ('$itemno',' $itemname','$itemprice')";
           $result = mysqli_query($conn,$sql);
      if($conn ) echo "Successful";

        
?>




