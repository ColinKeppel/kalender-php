<?php
require 'check.php';

/*var_dump($_POST);*/
$person = ucwords($_POST[ "firstname" ]);
$day = $_POST[ "day" ];
$month = $_POST[ "month" ];
$year = $_POST[ "year" ];

$query = "INSERT INTO birthdays (person, day, month, year) VALUES ('$person', '$day', '$month', '$year')";

if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}



?>