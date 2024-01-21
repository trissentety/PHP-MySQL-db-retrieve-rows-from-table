<?php
//Connect to MySQL db
include("database.php");

// $SQL = "SELECT * FROM users WHERE user = 'SpongebobSquarepants'";
$SQL = "SELECT * FROM users";

$Collection = mysqli_query($conn, $SQL);

if (mysqli_num_rows($Collection) != 0) {
    while ($ROW = mysqli_fetch_assoc($Collection)) {
        echo $ROW["id"] . "<br>";
        echo $ROW["user"] . "<br>";
        echo $ROW["register-date"] . "<br>";
    };
} else {
    echo "Nothing found";
}
//returns
// Database is connected
// 2
// SpongebobSquarepants
// 2024-01-21 06:23:02
// 5
// Patrick
// 2024-01-21 06:38:34

//Finish up by closing connection
mysqli_close($conn);
