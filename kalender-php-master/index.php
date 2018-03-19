<!doctype html>
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "calendar";
$jan = array();
$feb = array();
$mar = array();
$apr = array();
$mei = array();
$jun = array();
$jul = array();
$aug = array();
$sep = array();
$oct = array();
$nov = array();
$dec = array();

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );

// Check connection
if ( $conn->connect_error ) {
    die( "Connection failed: " . $conn->connect_error );
}

$sql = "SELECT id, person, day, month, year FROM birthdays";
$result = $conn->query( $sql );

?>

<html>

<head>
    <title>Verjaardagskalender</title>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
if ( $result->num_rows > 0 ) {
    while ( $row = $result->fetch_assoc() ) {
        $birthdayelement = '<h2>' . $row[ "day" ] . '</h2> <p> <a href="edit.php?id=' . $row[ "id" ] . '">' . $row[ "person" ] . ' (' . $row[ "year" ] . ')</a> <a href="delete.php?id=' . $row[ "id" ] . '">x</a> </p>';
        if ($row[ "month" ] == "1") {
            array_push($jan, $birthdayelement);
        } else if ($row[ "month" ] == "2") {
            array_push($feb, $birthdayelement);
        } else if ($row[ "month" ] == "3") {
            array_push($mar, $birthdayelement);
        } else if ($row[ "month" ] == "4") {
            array_push($apr, $birthdayelement);
        } else if ($row[ "month" ] == "5") {
            array_push($mei, $birthdayelement);
        } else if ($row[ "month" ] == "6") {
            array_push($jun, $birthdayelement);
        } else if ($row[ "month" ] == "7") {
            array_push($jul, $birthdayelement);
        } else if ($row[ "month" ] == "8") {
            array_push($aug, $birthdayelement);
        } else if ($row[ "month" ] == "9") {
            array_push($sep, $birthdayelement);
        } else if ($row[ "month" ] == "10") {
            array_push($oct, $birthdayelement);
        } else if ($row[ "month" ] == "11") {
            array_push($nov, $birthdayelement);
        } else if ($row[ "month" ] == "12") {
            array_push($dec, $birthdayelement);
        }
    }
}
if ( count( $jan ) > 0 ) {
    echo "<h1>januari</h1>";
    for ( $x = 0; $x < count( $jan ); $x++ ) {
        echo $jan[ $x ];
    }
}

if ( count( $feb ) > 0 ) {
    echo "<h1>februari</h1>";
    for ( $x = 0; $x < count( $feb ); $x++ ) {
        echo $feb[ $x ];
    }
}

if ( count( $mar ) > 0 ) {
    echo "<h1>maart</h1>";
    for ( $x = 0; $x < count( $mar ); $x++ ) {
        echo $mar[ $x ];
    }
}

if ( count( $apr ) > 0 ) {
    echo "<h1>april</h1>";
    for ( $x = 0; $x < count( $apr ); $x++ ) {
        echo $apr[ $x ];
    }
}

if ( count( $mei ) > 0 ) {
    echo "<h1>mei</h1>";
    for ( $x = 0; $x < count( $mei ); $x++ ) {
        echo $mei[ $x ];
    }
}

if ( count( $jun ) > 0 ) {
    echo "<h1>juni</h1>";
    for ( $x = 0; $x < count( $jun ); $x++ ) {
        echo $jun[ $x ];
    }
}

if ( count( $jul ) > 0 ) {
    echo "<h1>juli</h1>";
    for ( $x = 0; $x < count( $jul ); $x++ ) {
        echo $jul[ $x ];
    }
}

if ( count( $aug ) > 0 ) {
    echo "<h1>augustus</h1>";
    for ( $x = 0; $x < count( $aug ); $x++ ) {
        echo $aug[ $x ];
    }
}

if ( count( $sep ) > 0 ) {
    echo "<h1>september</h1>";
    for ( $x = 0; $x < count( $sep ); $x++ ) {
        echo $sep[ $x ];
    }
}

if ( count( $oct ) > 0 ) {
    echo "<h1>october</h1>";
    for ( $x = 0; $x < count( $oct ); $x++ ) {
        echo $oct[ $x ];
    }
}

if ( count( $nov ) > 0 ) {
    echo "<h1>november</h1>";
    for ( $x = 0; $x < count( $nov ); $x++ ) {
        echo $nov[ $x ];
    }
}

if ( count( $dec ) > 0 ) {
    echo "<h1>december</h1>";
    for ( $x = 0; $x < count( $dec ); $x++ ) {
        echo $dec[ $x ];
    }
}
?>

<p><a href="create.php">+ Toevoegen</a>
</p>

</body>

</html>