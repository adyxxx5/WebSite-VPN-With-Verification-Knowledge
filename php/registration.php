<?php
$servername = "localhost:3307";
$username = "root";
$password = "usbw";
$dbname = "websitevpn";
if (!empty($_REQUEST["name"]) and (!empty($_REQUEST['lastname'])) and (!empty($_REQUEST['age']))) 
{ 
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $age = $_REQUEST['age'];
            
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); }

    $sql = "INSERT INTO USERS VALUES (NULL, $name, $lastname, $age)";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully"; } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); }

    mysqli_close($conn);
}
else
    echo  "<script type='text/javascript'>alert('Hai lasciato qualche campo vuoto, completa tutti i campi! Ritorna sulla pagina di test e riprova che qualcosa è andato storto!');</script>"; 
?>