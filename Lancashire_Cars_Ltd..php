<html>
<head>
    <!--http://jchen36.bimserver2.com/second-bt2201-assignment-2018-19-JinqiChen8/Lancashire_Cars_Ltd..php-->
    <title>Welcome</title>
</head>
<body>

<meta charset="utf-8">
<h3 style="background-color:pink;"> Welcome to Lancashire used car Company. Here are the cars you can choose.</h3>
<a href="employee_login.php " style="float: right;">login  </a> <br>
<?php
$link = mysqli_connect('bt2201db.bimserver2.com','jchen36db','3iwlQln7','jchen36db');
if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error()); }
$result = mysqli_query($link, "SELECT * FROM CAR");
while ($array = mysqli_fetch_array($result)) {
    echo "<a href=\"Car_information.php?carid=$array[ID]\">$array[MAKE]</a> - $array[MODEL]<br>";

}

?>

<img src="https://mmbiz.qpic.cn/mmbiz_gif/V91EwQHiat0RMkz347qf1icibvFRib15G8UORgtBUKRMLTWcYOErwNSO9IOOsgOrDwh9unianOkdCrGvUFqn81BXeZA/640?wx_fmt=gif"

</body>
</html>
