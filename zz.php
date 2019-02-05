<php
        $dbServername ="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbName="booking";
        $conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
     
     $username = $_POST['name'];
        list($firstName, $lastName) = explode(' ', $username);
        $pass = $_POST['passport'];
     
     if( isset($_POST['name']) && isset($_POST['passport']) 
                                 
       $sql = "INSERT INTO customer(firstname, lastname, passport,)"
                    . "VALUES ('$firstName','$lastName','$pass')";
            mysqli_query($conn,$sql);
?>