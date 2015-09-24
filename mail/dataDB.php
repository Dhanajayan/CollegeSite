    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost","jashjaco_sym", "66KwX=$n7mQu");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Attempt create database query execution

    $sql = "CREATE DATABASE Student";

    if(mysqli_query($link, $sql)){

        echo "Database demo created successfully";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
	
	$link = mysqli_connect("localhost", "jashjaco_sym", "66KwX=$n7mQu", "jashjaco_sym");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Attempt create table query execution

$sql = "CREATE TABLE persons(person_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, first_name CHAR(30) NOT NULL, last_name CHAR(30) NOT NULL, email_address VARCHAR(50))";

if (mysqli_query($link, $sql)){

    echo "Table persons created successfully";

} else {

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

     $link = mysqli_connect("localhost", "jashjaco_sym", "66KwX=$n7mQu", "jashjaco_sym");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Escape user inputs for security

$first_name = mysqli_real_escape_string($link, $_POST['name']);

$last_name = mysqli_real_escape_string($link, $_POST['message']);

$email_address = mysqli_real_escape_string($link, $_POST['email']);

 

// attempt insert query execution

$sql = "INSERT INTO persons (first_name, last_name, email_address) VALUES ('$first_name', '$last_name', '$email_address')";

if(mysqli_query($link, $sql)){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

    // Close connection

    mysqli_close($link);
	header('Location: thank-you.html');

    ?>

