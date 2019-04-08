<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, num에 해당하는 레코드를 POST로 받아온 내용으로 수정하기!

    $connect = mysql_connect("localhost","UiHyeon","1350");
    mysql_select_db("kuh_db", $connect);

    $sql = "update tableboard_shop set date = '$_POST[date]', name = '$_POST[name]', order_id = $_POST[order_id], price = $_POST[price], quantity = $_POST[quantity] where num = $_GET[num]";

    $result = mysql_query($sql);

# 참고 : 에러 메시지 출력 방법
if($result) {
    echo "<scrip> alert('update - sucsess') </scrip>";
}
else {
    echo "<script> alert('update - error message') </script>";
}
?>

<script>
    location.replace('../index.php');
</script>
