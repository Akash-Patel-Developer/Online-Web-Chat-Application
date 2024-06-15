<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background:url(BG1.svg); 
    }
    .container{
        /* border: 2px solid red; */
        height: 300px;
        width: 400px; 
        margin: auto;
        box-shadow: 0 0 5px white;
    }
    .container h1{
        text-align: center;
        color: white;
    }
    .container input{
        /* border: 2px solid red; */
        width: 300px;
        height: 2rem;
        margin: 3rem;
        background: transparent;
        box-shadow: 0 0 5px white;
        color: yellow;
        font-size: 14px;
        font-weight: bold;
    }
    ::placeholder{
        color: white;
        font-size: 14px;
        font-weight: bold;
    }
    .error{
        color: white;
        margin: auto;
        /* border: 2px solid red; */
        width: 25rem;
        padding-left: 6rem;
    }
    input[type="submit"]{
        color: white;
        width: 6rem;
        margin-top: 1rem;
        margin-left: 9rem;
     }
</style>
<body>
    <div class="container">
        <h1>Confirm your User Name</h1>
        <br>
        <form method="POST">
            <input type="text" name="user" placeholder="Enter Your User Name">
            <br>
            <input type="submit" >
            <br>
                <div class="error">
        <h2>
            <?php
            session_start();
            $session = $_SESSION['name'];
            $conn = new mysqli("localhost", "root", "", "emp");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['user']) && !empty($_POST['user'])) {
                    $user = $_POST['user'];
                    $_SESSION['user'] = $_POST['user'];
                    $sql_insert = "INSERT INTO `on_chat`(`name`) VALUES (?)";
                    $insert_stmt = $conn->prepare($sql_insert);
                    if ($insert_stmt === false) {
                        die("Error preparing statement: " . $conn->error);
                    }
                    $insert_stmt->bind_param("s", $user);
                    $insert_stmt->execute();
                    if ($insert_stmt->affected_rows == 1) {
                        if($user == $_SESSION['name']){
                            header("Location:1.php");
                            exit;
                        }else{
                            
                            echo $user;
                        }
                    }
                } else {
                    echo "please enter your user name"; 
                    
                }
            }
            
            ?>
        </h2>
    </div>
        </form>
    </div>


</body>
</html>