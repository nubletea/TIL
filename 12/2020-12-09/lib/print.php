<?php
function print_title(){
    if(isset($_GET['id'])){
        echo htmlspecialchars($_GET['id']);
    }else{
        echo "Welcome";
    } 
}
function print_description(){
    if(isset($_GET['id'])){
        $basename = basename('data/'.$_GET['id']); //basename으로 부모디렉토리로 나오는 나쁜직막음
        echo htmlspecialchars(file_get_contents("data/".$basename));
        //htmlspercialcahrs는 추가시 뜨는 오류막기
   }else{
        echo "Welcome To";
   }
}
function print_list(){
    $data = scandir('./data');
    for($x=0;$x<count($data);$x++){
        $title = htmlspecialchars($data[$x]);
        if($data[$x]!="." and $data[$x]!=".."){
            echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
        }
    }
}
?>