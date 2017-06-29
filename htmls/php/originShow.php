<?php
include 'connectOrigin.php';
$sql = "select name , time from userr";
$result = mysqli_query($link, $sql);


while($row = mysqli_fetch_assoc($result) ){

    foreach( $row as $key => $val){
        echo $key." : ".$val."<br/>";
    }

}
//    print_r($row);
