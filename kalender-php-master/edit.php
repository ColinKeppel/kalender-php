<!DOCTYPE html>
<?php
require 'check.php';

if ( isset( $_GET[ 'id' ] ) ) {
    $id = $_GET[ 'id' ];
    $sql = "SELECT id, person, day, month, year FROM birthdays WHERE id=" . $id;
    $result = $conn->query( $sql );
    $row = $result->fetch_array( MYSQLI_ASSOC );
}
?>
<html>

<head>
    <link href="main.css" rel="stylesheet" type="text/css">
    <title>Verander je verjaardag</title>
</head>

<body>
<h1>Verander je verjaardag</h1>
<form class="editForm" action="edit-action.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row[ "id" ] ?>">
    <label for="firstname">Voornaam:</label> <input type="text" name="firstname" id="firstname" maxlength="20" placeholder="<?php echo $row[ "person" ] ?>" value="<?php echo $row[ "person" ] ?>" required>*
    <br>
    <label for="day">Dag:</label> <input type="text" name="day" id="day" maxlength="2" placeholder="<?php echo $row[ "day" ] ?>" value="<?php echo $row[ "day" ]  ?>" required>*
    <br>
    <label for="month">Maand:</label> <input type="text" name="month" id="month" maxlength="1" <?php echo $row[ "month" ] ?>" value="<?php echo $row[ "month" ]  ?>" required>*
    <br>
    <label for="year">Jaar:</label> <input type="text" name="year" id="year" maxlength="4" <?php echo $row[ "year" ] ?>" value="<?php echo $row[ "year" ]  ?>" required>*
    <br>
    <input type="submit" value="Submit">
</form>
<p><a href="index.php">Ga terug</a>
</p>

</body>

</html>