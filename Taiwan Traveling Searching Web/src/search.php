<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("连接数据库失败：" . $conn->connect_error);
}

$term = $_GET["term"];

$sql = "SELECT * FROM your_table WHERE column_name LIKE '%$term%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row["column_name"] . "</p>";
  }
} else {
  echo "无查询结果";
}

$conn->close();
?>
