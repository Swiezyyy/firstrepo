<html>
    <form action:" " method="Post">
        <select name="Plec">
            <option name=chłop> Chłop </option><option name=baba> Baba </option>
        </select><br>
       Alkohol (litr) <br>
        <input name="alko1">
        <select name="woltaz1"> 
            <option name="Harnaś"> Harnaś (5.6%) </option>
            <option name="Maryjka"> Maryjka (10%) </option>
            <option name="Bocian"> Bocian (40%) </option>
        </select><br>
        <input name="alko2">
        <select name="woltaz2"> 
            <option name="Harnaś"> Harnaś (5.6%) </option>
            <option name="Maryjka"> Maryjka (10%) </option>
            <option name="Bocian"> Bocian (40%) </option>
        </select><br>
        <input name="alko3">
        <select name="woltaz3"> 
            <option name="Harnaś"> Harnaś (5.6%) </option>
            <option name="Maryjka"> Maryjka (10%) </option>
            <option name="Bocian"> Bocian (40%) </option>
        </select><br>
        <input type="submit" value="Submit">
</form>
</html>
<?php
$woltaz1=$_POST['woltaz1'];
if($woltaz1="Harnas"){
    $woltaz1=5.6;
}else if($woltaz1="Maryjka"){
    $woltaz1=10;
}else if($woltaz1="Bocian"){
    $woltaz1=40;
}    
$woltaz2=$_POST['woltaz2'];
if($woltaz2="Harnas"){
    $woltaz2=5.6;
}else if($woltaz2="Maryjka"){
    $woltaz=10;
}else if($woltaz2="Bocian"){
    $woltaz2=40;
} 
$woltaz3=$_POST['woltaz3'];
if($woltaz3="Harnas"){
    $woltaz3=5.6;
}else if($woltaz3="Maryjka"){
    $woltaz3=10;
}else if($woltaz3="Bocian"){
    $woltaz3=40;
} 
$Plec=$_POST['Plec'];
$Plec0=1.2;
$alko1=$_POST['alko1'];
$schlanie=$alko1*$woltaz1/10;
$alko2=$_POST['alko2'];
$schlanie2=$alko2*$woltaz2/10;
$alko3=$_POST['alko3'];
$schlanie3=$alko3*$woltaz3/10;
$alkomator=($schlanie+$schlanie2+$schlanie3)/$Plec0/100;
echo "<br>".$alkomator." promila po 30 minutach";
?>