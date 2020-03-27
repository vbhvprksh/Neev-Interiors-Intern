<?php
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Email = $_POST['Email'];
	$Contact = $_POST['Contact'];
	$notes = $_POST['notes'];

    //database connection
    $servername='localhost';
    $username='neevinte_pradnya';
    $password='654321aA#zZ#';
    
    try {
    $conn = new PDO("mysql:host=$servername;dbname=neevinte_Contact Form", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    $sql = 'INSERT INTO contactInfo (First_name, Last_name, Email, ContactNo, Notes)
        VALUES (?, ?, ?, ?, ?)';
    $entry=$conn->prepare($sql);
    $entry->execute([$Firstname, $Lastname, $Email, $Contact, $notes]);
    
    header("Location: https://www.neevinteriors.com/");
    exit();
	
?>