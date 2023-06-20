
<?php
require_once 'DBConnection.php';
$conn = new mysqli($HN, $UN, $db, $PW);
if ($conn->connect_error) die("Fatal Error");

if ($result=mysqli_query($conn,$sql))
 

  $sql="SELECT COUNT(*) FROM answers";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_fetch_assoc($result);
  echo $count;

  SELECT MAX(Age)
  FROM answers;
  SELECT MIN(Age)
FROM answers;

SELECT AVG(Age)
FROM answers;



mysqli_close($conn);
?>
<a href="Landing page.html">View survey results</a>