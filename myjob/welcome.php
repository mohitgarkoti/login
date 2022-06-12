<?php
$uname="mohit";
$pwd="mohit@123";
session_start();
if(isset($_SESSION['uname'])){

echo"<h1> welcome".$_SESSION ['uname']."</h1>";
echo "<a href='logout.php'><input type=button value=logout name=logout></a>";
echo"<a href='message.php'><input type=button value=messsage name=message</a>" ;
}
else{
    if($_POST['uname']== $uname && $_POST ['pwd'] == $pwd){
        $_SESSION['uname']=$uname;

        echo "<script>location.href='welcome.php' </script>";

    }
    else{
        echo "<script>alert('username or email incorrect!')</script>";
        }
}

?>