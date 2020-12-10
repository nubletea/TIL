<!doctype html>
<html>
<body>
<?php
    print("hello\"w\" world");
    //echo도 가능 \사용시 효과가 사라짐
?>
<h2>Concatenation operator</h2>
<?php
    echo "Hello "."world";
    //php는 .으로 좌항과 우황을 더해서 해줌
?>

<?php
   echo strlen("Hello world");
?>
</body>
</html>
