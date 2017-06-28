<?php
include "connect.php";
$sql = "select phone from user";
$phoneList = mysqli_query($link , $sql);
$list = array();
while($List = mysqli_fetch_row($phoneList)){
    array_push($list,$List[0]);
}
$list = json_encode($list);
//保存数据库中 已存在的手机号到 JS 对象 List数组中
echo "<script>var List = $list</script>";

mysqli_close($link);
?>