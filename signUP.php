<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            /* border: 2px solid red; */
            width: 14rem;
            /* height: 22rem; */
            margin: auto;
            padding: 10px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 4px white, 3px 3px 4px white;
            border-radius: 4px;
            padding-top: 2px;
            margin-top: 2rem;
        }
        .container .h{
            text-align: center;
            color: yellow;
            color: white;
            margin-top: 3px;
        }
        body{
            background:url(BG1.svg);
        }
        input[type="submit"]{
            width: 100%;
            height: 2.4rem;
            border-radius: 4px;
            border: none;
            outline: none;
        }
        label{
            color: white;
            font-weight: bold;
        }
        input{
            /* border: 2px solid red; */
            height: 2rem;
            width: 95%;
            border-radius: 5px;
            background-color: transparent;
            border-bottom: 3px solid green;
            border: none;
            outline: none;
            box-shadow: 1px 1px 3px white;
            color: white;
            font-size: 18px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        ::placeholder{
            color: white;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">

        <form method="POST">
        <p class="h" style="color:white;">
            <?php
            session_start();
                if($_SERVER['REQUEST_METHOD']){
                    if(isset($_POST['name']) && !empty($_POST['name'])){
                        $name = $_POST['name'];
                            if(isset($_POST['age']) && !empty($_POST['age'])){
                                $age = $_POST['age'];

                                if($age > 15){
                                        if(isset($_POST['email']) && !empty($_POST['email'])){
                                            $email = $_POST['email'];

                                                if(isset($_POST['password']) && !empty($_POST['password'])){
                                                    $password = $_POST['password'];

                                                    if($password > 10){
                                                        // echo $password;
                                                        $conn = new mysqli("localhost","root","","emp");
                                                        $sql_insert = "INSERT INTO `chat_list`(`name`, `age`, `email`, `password`) VALUES (?,?,?,?)";
                                                        $insert_stmt = $conn->prepare($sql_insert);
                                                        $insert_stmt->bind_param("ssss",$name,$age,$email,$password);
                                                        $insert_stmt->execute();
                                                        if($insert_stmt->affected_rows==1){
                                                            echo $insert_stmt->affected_rows;
                                                            $_SESSION['name'] = $name;
                                                            header("location:1.php");
                                                        }else{
                                                            echo "server is busy";
                                                        }
                                                    }else{
                                                        echo "Your password should be under in 10";
                                                    }
                                                }else{
                                                    echo "please enter your password";
                                                }
                                        }else{
                                            echo "please enter you email";
                                        }
                                }else{
                                    echo "you must be above 15";
                                }
                            }else{
                                echo "please enter your age";
                            }
                    }else{
                        echo "please enter you name";
                    }
                }else{
                }
            ?>
        </p>
        <br>
            <label>Name :</label>
            <br>
            <input type="text" name="name" placeholder="Enter your name">
            <br><br>
            <label>Age :</label>
            <br>
            <input type="number" name="age" placeholder="You must be above 15">
            <br><br>
            <label>Email :</label>
            <br>
            <input type="email" name="email" placeholder="Enter your email">
            <br><br>
            <label>Password :</label>
            <br>
            <input type="text" name="password" placeholder="Enter your password">
            <br><br>
            <input type="submit" name="save" value="save">
        </form>
    </div>
</body>
</html>