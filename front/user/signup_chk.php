<?php

include './dbcon.php';
$replace_keyword = array('-', '#', "'", "\"", "%", "\t", "\r", "\n", "*", "/", "\\", ";", "&", "|", "\v", "\f", 'information_schema','\=');
$email = $_POST['email'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$conpw = $_POST['conpw'];


foreach ($replace_keyword as $keyword) {
    $email = str_replace($keyword, "", $email);
    $id = str_replace($keyword, "", $id);
    $pw = str_replace($keyword, "", $pw);
    $conpw = str_replace($keyword, "", $conpw);
}

$email = addslashes($_POST['email']);
$id = addslashes($_POST['id']);
$pw = addslashes($_POST['pw']);
$conpw = addslashes($_POST['conpw']);

if(!$email || !$pw || !$conpw || !$id){
    echo "<script>alert('fill the form completely');history.back();</script>";
    exit();
}else if($pw != $conpw){
    echo "<script>alert('password is not same');history.back();</script>";
    exit();
}
$pw_hash = hash("sha256", $pw);

$chk = "SELECT * FROM user WHERE email='$email'";
$res = $DB->query($chk);
$num = $res -> fetchArray(SQLITE3_ASSOC);
$id_chk = "SELECT * FROM user WHERE id='$id'";
$id_res = $DB->query($id_chk);
$id_num = $id_res -> fetchArray(SQLITE3_ASSOC);

if ($num != 0) {
    echo "<script>alert('email exists');history.back();</script>";
    exit();
}else if($id_num != 0){
    echo "<script>alert('id exists');history.back();</script>";
    exit();
}
else{
    $query = "INSERT INTO user(email, id, pw) values('$email', '$id', '$pw_hash');";
    $result = $DB -> exec($query);
    

    if($result === false){
        print_r($query);
        print_r($result);
        echo $DB->lastErrorMsg();
        echo "회원가입 실패!";
    }else{
    echo "<script>alert('Sign up Successfully! Welcome!')</script>";
    echo "<meta http-equiv='refresh' content='0;url=signin.php'>";
    }
}
$DB->close();
?>