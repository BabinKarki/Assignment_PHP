
///**
// * Created by PhpStorm.
// * User: babin
// * Date: 7/15/18
// * Time: 8:04 AM
// */


<html>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
Strings:<input type="text" name="name"><br>
<input type="submit" value="Submit">
</form>

<?php
$str =  $_GET["name"];
countWords($str);
print_r(array_count_values(countWords($str)));

//$expode
function countWords($str){
    $str = strtolower($str);
    $strArr = preg_split("/[\s,.)(]+/", $str);
    echo '<pre>';
    return $strArr;
}


?>

</body>
</html>
