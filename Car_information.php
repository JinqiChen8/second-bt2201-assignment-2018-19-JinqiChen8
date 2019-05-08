<html>
<head>
    <!--http://jchen36.bimserver2.com/second-bt2201-assignment-2018-19-JinqiChen8/Car_information.php-->
    <title>Car Information</title>
</head>
<body>

<?php

$id=$_GET['carid'];

$link = mysqli_connect('bt2201db.bimserver2.com','jchen36db','3iwlQln7','jchen36db');
if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
}
$result = mysqli_query($link, "SELECT * FROM CAR WHERE id =".$id);
$carArray=mysqli_fetch_array($result);
?>

<body>
<table width="640" border="2" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="3" align="center"><h1>Car Information</h1></td>
    </tr>
    <tr>
        <td align="left" valign="top"><strong>Make:</strong></td>
        <td align="left" valign="top"><?php echo $carArray['MAKE']?></td>
        <td rowspan="2" align="center" valign="middle">
            <img src="./<?php echo $carArray['PICTURE']?>" style="width:300px;height:350px;">
        </td>
    </tr>
    <tr>
        <td align="left" valign="top"><strong>Price:</strong></td>
        <td align="left" valign="top">&pound;<?php echo $carArray['PRICE']?></td>
    </tr>
    <tr>
        <td align="left" valign="top"><strong>Model:</strong></td>
        <td align="left" valign="top"><?php echo $carArray['MODEL']?></td>
    </tr>
    <tr>
        <td align="left" valign="top"><strong>Seat:</strong></td>
        <td align="left" valign="top"><?php echo $carArray['SEAT']?></td>
    </tr>
    <tr>
        <td align="left" valign="top"><strong>Mileage:</strong></td>
        <td align="left" valign="top"><?php echo $carArray['MILEAGE']?></td>
    </tr>
    <tr>
        <td colspan="3" align="center" valign="top">
            <a href="Lancashire_Cars_Ltd..php">back to list of car</a>
        </td>
    </tr>
</table>

</body>
</html>
