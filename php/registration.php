<?php
// Configuration for the conection with the data base
require 'config.php';

// Check the variables that I receive from the HTML page.
if (!empty($_REQUEST["name"]) and (!empty($_REQUEST['lastname'])) and (!empty($_REQUEST['age']))) 
{ 
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $age = $_REQUEST['age'];
	
	//mySQL string for insert a new usere
    $sql = "INSERT INTO USERS VALUES (null, '$name', '$lastname', $age)";
	
	// Check the mySQL string work
    if (mysqli_query($conn, $sql)) {
    require 'test.php';
	} 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); }
}
else
    echo  "<script type='text/javascript'>alert('Hai lasciato qualche campo vuoto, completa tutti i campi! Ritorna sulla pagina di test e riprova che qualcosa è andato storto!');</script>"; 

?>