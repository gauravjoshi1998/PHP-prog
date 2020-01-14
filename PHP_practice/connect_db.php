<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newDB"; 


$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "CREATE DATABASE student";

check_conn($sql1);

// Create tables
$sql2 = "CREATE TABLE student(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
prn INT(11) UNSIGNED,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
CONSTRAINT UC_student UNIQUE (fname, lname)
)";

check_conn($sql2);

//Insert values
$sql3 = "INSERT INTO student (prn, fname, lname)
        VALUES('17070124029', 'Gaurav', 'Joshi')";

check_conn($sql3);

$sql4 = "INSERT INTO student (prn, fname, lname)
VALUES ('17070124001', 'Vinod', 'Solanki');";
$sql4 .= "INSERT INTO student (prn, fname, lname)
VALUES ('17070124002', 'Shakti', 'Singh');";
$sql4 .= "INSERT INTO student (prn, fname, lname)
VALUES ('17070124003', 'Khatri', 'Mohammed');";

check_conn($sql4);

function check_conn($val){
    if($val === $GLOBALS['sql4']){
        //multi_query() used to execute multiple queries at once
        if ($GLOBALS['conn']->multi_query($GLOBALS['sql4']) === TRUE) {
    echo "New records created successfully<br>";
    } else {
    echo "Error: " . $GLOBALS['sql4'] . "<br>" . $GLOBALS['conn']->error . "<br>";
    }
    }
    if ($GLOBALS['conn']->query($val) === TRUE) {
    echo "Operation completed successfully<br>";
    $last_id = $GLOBALS['conn']->insert_id;
    echo "Last inserted ID is: " . $last_id. "<br>";
    }
//error for duplicate entries = 1062
    elseif($GLOBALS['conn']->errno === 1062){
        echo "Data already present in the table!<br>";
    }
    else {
    echo "Error performing operation:  ". $GLOBALS['conn']->error."<br>";
    }
}
$conn->close();
?>
