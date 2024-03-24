<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css?v=<?php echo time(); ?>">
    <title>Online-Chat-Application</title>
    <style></style>
    <!-- <script language="JavaScript" src="1.js"></script> -->
</head>
<body>
<div class="container">
    <div class="box box1">
        
        <div class="h">GROUPS</div>
        
            <?php

                $conn = new mysqli("localhost", "root", "", "emp");

                if ($conn->connect_error) {
                    echo "problem";
                } else {
                    $sql_select = "SELECT `gname`, `icon` FROM `chat_group` WHERE `gname`=? OR `icon`=?";
                    $fetch_stmt = $conn->prepare($sql_select);
                    $fetch_stmt->execute();
                    $fetch_stmt->bind_result($gname,$icon);
                    if($fetch_stmt->fetch()){
                        echo "hllo world";
                    }
                }

            
        ?>
        
        <div class="group" style="background: url();">
                                <p class="p"></p>
        </div>
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
                <span class="nickname">Ezra</span>
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
        <h1>Themes</h1>
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