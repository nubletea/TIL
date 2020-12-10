<?php
require_once('lib/print.php');//처음 실행이 되면 이게 정신건강에좋음
require('view/top.php');
?>
    <form action="create_process.php" method="POST">
    <p>
        <input type="text" name="title" placeholder="title">
    </p>
    <p>
        <textarea name="description" placeholder="DESC"></textarea>
    </p>
    <p>
        <input type="submit">
    </p>
    </form>

   <!--data/id 값에 해당하는 파일을 읽어서 파일의 내용;-->
   <?php
require_once('view/bottom.php');
?>