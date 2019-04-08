<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, POST로 받아온 내용 입력하기!
    $connect = mysql_connect("localhost","UiHyeon","1350");
    mysql_select_db("kuh_db", $connect);

    $sql = "insert into tableboard_shop (num, date, name, order_id, price, quantity)";
    $sql .= "values ('$_POST[num]', '$_POST[date]', '$_POST[name]', '$_POST[order_id]', '$_POST[price]', '$_POST[quantity]')";

    $result = mysql_query($sql);

    if ($result)
        echo "레코드 삽입 완료!";
    else
        # 참고 : 에러 메시지 출력 방법
        echo "<script> alert('insert - error message') </script>";

    mysql_close($connect);





?>

<script>
    location.replace('../index.php');
</script>
