<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, num에 해당하는 레코드 삭제하기!
$connect = mysql_connect("localhost","UiHyeon","1350");
mysql_select_db("kuh_db", $connect);
echo "$_GET[num]";


if($connect->connect_errno){
    echo '[연결실패] : '.$connect->connect_error.'';
}
else {
    echo '[연결성공]';
}
$num = $_GET[num];
$sql = "delete from tableboard_shop where num =  $num;";
echo $sql;
$result = mysql_query($sql,$connect);

# 참고 : 에러 메시지 출력 방법
if($result){
    echo "<script> alert('delete - sucsses') </script>";
}
else
    echo "<script> alert('delete - error message') </script>";

?>

<script>
   // location.replace('../index.php');                     //웹에 히스토리가 남지 않는다. -> location.replace()의 경우.
</script>
