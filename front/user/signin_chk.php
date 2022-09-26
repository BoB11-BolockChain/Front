<?php
include './dbcon.php';
session_start();

$replace_keyword = array('-', '#', "'", "\"", "%", "\t", "\r", "\n", "*", "/", "\\", ";", "&", "|", "\v", "\f", 'information_schema','\=');
$id = $_POST['id'];
$pw = $_POST['pw'];

foreach ($replace_keyword as $keyword) {
    $id = str_replace($keyword, "", $id);
    $pw = str_replace($keyword, "", $pw);
}

$id = addslashes($_POST['id']);
$pw = addslashes($_POST['pw']);

$pw_hash = hash("sha256", $pw);
$query = "SELECT COUNT(*) as count FROM user where id='$id' and pw='$pw_hash'";
$res = $DB -> query($query);
$num = $res -> fetchArray();
$count = $num['count'];


if($count>0){
    if(isset($id)){
        $user_login = TRUE;
        $_SESSION['id'] = $id;
        echo "<script>alert('login as $id')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../admin.index.php'>";
    }else{
        echo "login fail!";
        echo "<meta http-equiv='refresh' content='0;url=./signin.php'>";
    }
}else if($num == 0){
    echo "<script>alert('No information!');</script>";
    echo "<meta http-equiv='refresh' content='0;url=./signup.php'>";
}else{
    echo "<script>alert('Error');</script>";
    echo "<meta http-equiv='refresh' content='0;url=./signin.php'>";
}

$DB->close();

?>