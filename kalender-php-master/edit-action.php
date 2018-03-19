<?php
require 'check.php';

/*var_dump($_POST);*/
$id = $_POST[ "id" ];
$person = ucwords($_POST[ "firstname" ]);
$day = $_POST[ "day" ];
$month = $_POST[ "month" ];
$year = $_POST[ "year" ];

if ( $person == NULL || $day == NULL || $month == NULL || $year == NULL ) {
    header( "Location: index.php" );
    die();
} else {
    $sql = "UPDATE birthdays SET person='$person', day='$day', month='$month', year='$year' WHERE id=" . $id;
}

if ( $conn->query( $sql ) === TRUE ) {
    echo "record updated successfully";
    header( "Location: index.php" );
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>