<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css?v=<?php echo time(); ?>">
    <title>Online-Chat-Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style></style>
    <!-- <script language="JavaScript" src="1.js"></script> -->
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
                        session_start();
                        echo $_SESSION['name'];
                    ?>
                </span>
                <span class="on-off">Online</span>
            </div>
            <p class="time">15:56</p>
        </div>
        <div class="chat">
            <div class="left">Hllo world</div>   
            <p class="right">Hllo world</p>
            <div class="left">Hllo world</div>   
            <p class="right">Hllo world</p>
            <div class="left">Hllo world</div>   
            <p class="right">Hllo world</p>
        </div>
        <div class="inp">
            <label for="">Chat :</label>
            <input type="text" name="chat" placeholder="Chat--here">
        </div>
    </div>
    <div class="box box4">
        <div class="thems">
        <h1>Themes</h1>
        <div class="logout">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        </div>
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