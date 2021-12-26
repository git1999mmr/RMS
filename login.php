<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body> 
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "newuser";
    $data = mysqli_connect($servername,$username,$password,$database);
    $username1 = $_POST["username"];
    $password1 = $_POST["password"];
    if($data == false){
        die("Not Connected");
    }
    else{
        if (empty($username1)) {
            echo "Invalid Username";
            // header("Location: loginfailure.html");
            exit();
    
        }
        else if(empty($password1)){
            echo "Invalid Password";
        //    header("Location: loginfailure.html");
            exit();
    
        }
        else{

            if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM newusertable WHERE email = '".$username."' AND passwordval = '".$password."' ";
            $result = mysqli_query($data, $sql);
                if (mysqli_num_rows($result) === 1) {
                    header("Location: loginsuccess.html");
                    exit();
                }
                else{
                    echo "Login Failed";
                    header("Location: loginfailure.html");
                    exit();
                }
    
            }
        }
    }
    ?>
</body>
</html>