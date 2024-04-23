<?php
$con = mysqli_connect('localhost', 'root', '', 'contact');

if (!$con) { 
    die("Connection failed: " . mysqli_connect_error());
}

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Number = $_POST['Number'];
$Message = $_POST['Message'];

$query = "INSERT INTO contact (Name, Email, Number, Message) VALUES ('$Name', '$Email', '$Number', '$Message')";

if (mysqli_query($con, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);
header('location:./FoodOrderingWebsite.php');
?>
