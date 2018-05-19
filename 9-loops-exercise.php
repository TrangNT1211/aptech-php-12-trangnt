
<!DOCTYPE html>
<html>
<body>
<?php
    $a = 0;
    while ($a < 10) {
        echo $a++;
    }
?>
<br>
<?php 
    $b = 1;
    do {
    echo $b++;
    }
    while ($b < 10); 
?> 
<br>
<?php
for($c = 0; $c <= 5; $c++){
echo $c;
}
?>
<br>
<?php
$arr = array("1" => "nguyen","2" => "van");
foreach($arr as $key => $value){
    echo $key.'-'.$value."<br>";
}
?>

<?php
$arr = array(1,2,3,4);
foreach($arr as $key => $value){
    echo $key.'-'.$value."<br>";
}
?>
</body>
</html>