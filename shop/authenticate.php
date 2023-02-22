<?php session_start();

$hashed_pwd = '$2y$10$BMcKSABQyyciPbUWl.pE9.6zv1tbk.O0QXlX/NMLxWt7vLxOCx/h.';

$username = $_POST['uname'];
$pwd = $_POST['pwd'];
    
echo $pwd;    



$my_hash = password_hash($pwd, PASSWORD_DEFAULT);

echo "my hash is $my_hash";

echo "Password verify returns: <br>";
echo password_verify($pwd, $hashed_pwd);


//if true
//then user password matches
       
//select password from table name (USERS) where username = '$uname"


// TODO: PHP Form Validation (see the example under Validate Form Data With PHP)

?>
<!DOCTYPE html>
<html>
    <body>
        Invalid username and/or password.

        <a href="index.php">Homepage</a>
    </body>
</html>


