<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
</head>
<body>
<?php
echo "hello";
//defining variable


//database connection
$mysqli = new \MySQLi('localhost','root','','project3');
//error handling and data input query
if($mysqli->connect_error){
    $item1 = $_POST['$item1'];
$item2 = $_POST['$item2'];
$item3 = $_POST['$item3'];
$item4 = $_POST['$item4'];
$item5 = $_POST['$item5'];
    die("Connection Failed : ".$mysqli->connect_error);
}else{
    $stmt = $mysqli->prepare("insert into itemlist(item1, item2, item3, item4, item5) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$item1, $item2, $item3, $item4, $item5);
    $stmt->execute();
    echo "Items recorded successfully...";
    $stmt->close();
    $mysqli->close();
}

?>
</body>
</html>