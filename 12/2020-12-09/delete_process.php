<?php
 unlink('data/'.basename($_POST['id']));
 header('Location:/index.php');

 //basename (파일 명만 넣을수 있게 되어잇음)
?>