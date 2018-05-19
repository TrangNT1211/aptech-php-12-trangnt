<!DOCTYPE html>
<html>
<body>


<!-- // function myPoject(){
//     echo "Trang MyStore";
// }
// myPoject(); -->

<?php
function myPoject1($name="YourName",$project="YourProject"){
    echo $name." ".$project;
}
$name = 'Trang';
$project = 'MyStore';
myPoject1($name,$project);
echo "<br>";
myPoject1();
?>
</body>
</html>