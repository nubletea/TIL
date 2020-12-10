<?php
require_once('lib/print.php');
require('view/top.php');
?>
    <?php if(isset($_GET['id'])){?>
    <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <?php } ?>
    <form action="update_process.php" method="POST">
    <input type="hidden" name="old_title" value="<?=$_GET['id']?>"> <!--업데이트 시에 무조건 히든으로 가져오기-->
    <p>
        <input type="text" name="title" placeholder="title" value="<?=$_GET['id']?>">
    </p>
    <p>
        <textarea name="description" placeholder="DESC"><?=file_get_contents("data/".$_GET['id'])?></textarea>
    </p>
    <p>
        <input type="submit">
    </p>
    </form>

   <!--data/id 값에 해당하는 파일을 읽어서 파일의 내용;-->
<?php
require_once('view/bottom.php');
?>