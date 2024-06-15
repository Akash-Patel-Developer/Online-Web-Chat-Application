<?php
session_start();
if(isset($_SESSION['name'])){
    $name=$_SESSION['name'];
}
else{
    header("location:signUP.php");
    die();
}

if(isset($_GET['logout'])){
session_destroy();
header("location:signUP.php");
die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css?v=<?php echo time(); ?>">
    <title>Online-Chat-Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
    <div class="box box1">
        
        <div class="h">GROUPS</div>
        <?php
                $conn = mysqli_connect("localhost","root","","emp");
                $sql_select = "SELECT `id`, `gname`, `icon` FROM `chat_group`";
                $query = mysqli_query($conn,$sql_select); 

                if($query){
                    
                    if(mysqli_num_rows($query) > 0) {
                        while($data = mysqli_fetch_assoc($query)) {
                            $img = $data['icon'];
                            echo '
                            <div class="group" style="background-image:url(./'.$data['icon'].')">
                                <p class="p">'.$data['gname'].'</p>
                            </div>
                            ';
                        }
                    }
                }else{
                    echo "not working";
                }
                
        ?>
        
        <div class="add">+
            <p class="add-p">Click and create your own group</p>
        </div>
        
    </div>
    <div class="box box2">
        <div class="friend">
            <h2>FRIENDS</h2>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
    </div>
    <div class="box box3">
         <div class="person">
            <span class="img"></span>
            <div class="about">
                <span class="nickname">
                    <?php
                            
                            if($_SESSION['name']){
                                echo $_SESSION['name'];
                            }elseif($_GET['logout']){
                                session_unset();
                                session_destroy();   
                                header("Location: signUP.php");
                            }else{
                                session_destroy();
                                header("location:signUP.php");
                            }
                            
                    ?>
                </span>
                <span class="on-off">Online</span>
            </div>
            <p class="time">15:56</p>
        </div>
        <form class="chat" method="POST" >
            <!-- <div class="left">Hllo world</div>   
            <p class="right">Hllo world</p>
            <div class="left">Hllo world</div>   
            <p class="right">Hllo world</p>
            <div class="left">Hllo world</div>   
            <p class="right">Hllo world</p> -->
            
            <div class="inp" >
                <label for="">Chat :</label>
                <input type="text" name="chat" placeholder="Chat--here">
                <input type="submit" name="Send" id="send">
            </div>

                <?php
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        if(isset($_POST['chat']) && !empty($_POST['chat'])){
                            
                            echo $name;


                        }else{
                            echo ' 
                            <div class="left">Hllo world</div>   
                            <p class="right">Hllo world</p>
                            <div class="left">Hllo world</div>   
                            <p class="right">Hllo world</p>
                            <div class="left">Hllo world</div>   
                            <p class="right">Hllo world</p>
                            <div class="left">Hllo world</div>   
                            <p class="right">Hllo world</p>
                            <div class="left">Hllo world</div>   
                            <p class="right">Hllo world</p>
                            <div class="left">Hllo world</div>   
                            <p class="right">Hllo world</p> 
                            ';
                        }
                    }
                ?>

        </form>
    </div>
    <div class="box box4">
        <div class="thems">
        <h1>Themes</h1>
        
        <a href="?logout" class="logout"> <i class="fa-solid fa-arrow-right-from-bracket"></i> </a>
        </div>
        <div class="imgs">
            <img src="./images/download.svg" alt="" class="img">
            <img src="./images/BG1.svg" alt="" class="img">
            <img src="./images/BG2.svg" alt="" class="img">
            <img src="./images/BG3.svg" alt="" class="img">
            <img src="./images/BG4.svg" alt="" class="img">
            <img src="./images/BG5.svg" alt="" class="img">
            <img src="./images/BG6.svg" alt="" class="img">
            <img src="./images/BG7.svg" alt="" class="img">
            <img src="./images/BG8.svg" alt="" class="img">
            <img src="./images/BG9.svg" alt="" class="img">
            <img src="./images/BG10.svg" alt="" class="img">
            <img src="./images/BG11.svg" alt="" class="img">
        </div>
    </div>
</div>
<script src="1.js?v=<?php echo time(); ?>"></script>
</body>
</html>