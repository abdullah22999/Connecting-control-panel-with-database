<?php

$servername = "localhost";
$username = "Lujain";
$password = "202917";
$dbname = "robot_control_panel";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 $sql = "INSERT INTO control_panel VALUES (DEFAULT, 'R', '', '', '', '')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<?php

echo "<!DOCTYPE html>\n";
echo "\n";
echo "<html>\n";
echo "\n";
echo "<head>\n";
echo "<meta charset=\"utf-8\">\n";
echo "<title>Right</title>\n";
echo "<style>\n";
echo "body{\n";
echo "background:#A9A9A9;\n";
echo "}\n";
echo "p.r{\n";
echo "text-align:center;\n";
echo "font-size:40px;\n";
echo "color:#fff;\n";
echo "font-family:Lucidatypewriter, monospace;\n";
echo "margin-top:220px;\n";
echo "}\n";
echo "</style>\n";
echo "\n";
echo "</head>\n";
echo "<body>\n";
echo "<p class='r'>Right</p>\n";
echo "</body>\n";
echo "\n";
echo "</html>";


?>