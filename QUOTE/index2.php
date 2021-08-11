



<?php

//Fields for establishing database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "quotes";

class Quote{
    public $qStatement;
}

//Quotes array
$quotes = array();


// Establishing connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, quote, author FROM positive";
$result = $conn->query($sql);




//Selecting data from db
    $sql = "SELECT id, quote, author FROM positive ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        $Statement = '"'.$row["quote"]. '"'. " -- ". $row["author"]."<br>";
        

    }


} else {
    echo "0 results";
}

//Closing database connection
$conn->close();



