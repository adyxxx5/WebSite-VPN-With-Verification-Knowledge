<?php
$servername = "localhost:3307";
$username = "root";
$password = "usbw";
$dbname = "websitevpn";
if (isset($_REQUEST["name"])) 
{ 
          $name = $_REQUEST['name'];
}
else echo 'Variabile nome non esiste!';
if (isset($_REQUEST['lastname'])) 
{ 
          $lastname = $_REQUEST['lastname'];
}
else echo 'Variabile Cognome non esiste!'; 
if (isset($_REQUEST['age'])) 
{ 
          $age = $_REQUEST['age'];
}
else echo 'Variabile Eta non esiste!'; 


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO USERS VALUES (NULL, $name, $lastname, $age)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>