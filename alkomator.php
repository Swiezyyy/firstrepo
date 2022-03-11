

</from>
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
$Przyciaganie_ziemskie=$_POST
$Waga=$_POST['Liczba'];
$alkohol1=$_POST['alkohol1'];
$schlanie=$alkohol1*$woltaz1;
$alkohol2=$_POST['alkohol2'];
$schlanie2=$alkohol2*$woltaz2;
$alkohol3=$_POST['alkohol3'];
$schlanie3=$alkohol3*$woltaz3;
}
$alkomator=($schlanie+$schlanie2+$schlanie3)/$Waga/100;
echo "<br>".$alkomator." promila";
?>