<html>
<head>
    <!--http://jchen36.bimserver2.com/second-bt2201-assignment-2018-19-JinqiChen8/add_cars_result.php-->
    <title>Upload Result</title>
</head>
<body>

<?php
$MAKE=$_POST["make"];
$PRICE=$_POST["price"];
$MODEL=$_POST["model"];
$SEAT=$_POST["seat"];
$MILEAGE=$_POST["mileage"];
$uploaddir = "/home/jchen36/JChen36.bimserver2.com/second-bt2201-assignment-2018-19-JinqiChen8/car/";
$uploadfile = $uploaddir . basename($_FILES['picture']['name']);
$PICTURE="/car/".$_FILES['picture']['name'];
move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile);

$link = mysqli_connect('bt2201db.bimserver2.com','jchen36db','3iwlQln7','jchen36db');
mysqli_set_charset($link, "utf8");
$sql = "INSERT INTO CAR values ('', '$MAKE', '$PRICE','$MODEL', '$SEAT', '$MILEAGE','$PICTURE')";
$result = mysqli_query($link, $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($link));
}
else {
    echo "Record Inserted. Would you like to <a href=\"Lancashire_Cars_Ltd..php\">view
the full list of car</a> or <a href=\"employee_add_cars_information.php\">insert
  car</a>?";
}
?>

<img src="https://3.bp.blogspot.com/-cezsqlX97h0/WDwHULDatwI/AAAAAAAEUoE/6tQsVm-Imo0Zqgti-sFN9-Wgo5ivuRimACLcB/s1600/AS001801_02.gif"

</body>
</html>
