<!DOCTYPE html>
<html>
<body>

<?php
$host="localhost";
$user="root";
$password="";
$db="college";
$conn=mysqli_connect($host,$user,$password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user.firstname, user.lastname, user.email,user.phone,fees.hostel_fees,fees.mess_fees
    FROM user, fees
    where fees.hostel_fees='NOT PAID' OR fees.mess_fees='NOT PAID'
    ;";

$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>  - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
        echo "<br>email:  ". $row["email"]. "<br> PhoneNo".$row["phone"]."<br>";
        
      
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>