<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user"
    $data = mysqli_connect($servername,$username,$password,$database);
    if($data == false){
        die("Not Connected");
    }
    // else{
    //     echo "Connected";
    // }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM usertable WHERE username = '".$username."' AND password = '".$password."' ";
        $result = mysqli_query($data,$sql);
        $row = mysqli_fetch_array($result);
        echo  "Welcome";
    }
    else{
        echo "Enter valid Username or Password";
    }
    ?>
</body>
</html>