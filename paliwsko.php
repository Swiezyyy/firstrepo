<form action="" method="post">
diesel - 6,67/l <br>
ilość litrów:
<input type="text" name="litry1" /><br>
benzyna 98 - 7,66/l <br>
ilość litrów:
<input type="text" name="litry2" /><br>
<input type="submit" name="oblicz" value="Oblicz" />
</form>



<body>
<?php
$litr1=$_POST['litry1'];
$litr2=$_POST['litry2'];
$diesel=$litr1*6.67;
$benzyna=$litr2*7.66;

echo " zaplacisz za diesel: ".$diesel." zł";
echo " zaplacisz za benzyne ".$benzyna." zł";
?>
</body>